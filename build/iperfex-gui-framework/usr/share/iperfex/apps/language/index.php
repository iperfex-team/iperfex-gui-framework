<?php
/* vim: set expandtab tabstop=4 softtabstop=4 shiftwidth=4:
  Codificación: UTF-8
  +----------------------------------------------------------------------+
  | iPERFEX version 3.0                                                    |
  | http://www.iperfex.com                                               |
  +----------------------------------------------------------------------+
  | Copyright (c) 2006 Palosanto Solutions S. A.                         |
  +----------------------------------------------------------------------+
  | The contents of this file are subject to the General Public License  |
  | (GPL) Version 2 (the "License"); you may not use this file except in |
  | compliance with the License. You may obtain a copy of the License at |
  | http://www.opensource.org/licenses/gpl-license.php                   |
  |                                                                      |
  | Software distributed under the License is distributed on an "AS IS"  |
  | basis, WITHOUT WARRANTY OF ANY KIND, either express or implied. See  |
  | the License for the specific language governing rights and           |
  | limitations under the License.                                       |
  +----------------------------------------------------------------------+
  | The Initial Developer of the Original Code is PaloSanto Solutions    |
  +----------------------------------------------------------------------+
  $Id: index.php,v 1.1.1.1 2007/07/06 21:31:56 gcarrillo Exp $ */

include_once "libs/iperfexDB.class.php";
include_once "libs/iperfexForm.class.php";
   
function _moduleContent(&$smarty, $module_name)
{
    global $arrConf;
    
    //folder path for custom templates
    $local_templates_dir=getWebDirModule($module_name);
   	
    //conexion resource
    $pDB = new iperfexDB($arrConf['iperfex_dsn']['iperfex']);
    $pACL = new iperfexACL($pDB);
    
    //user credentials
    global $arrCredentials;
    $uid = $arrCredentials['idUser'];
    
    //actions
    $accion = getAction();
 
    switch($accion){
        case "save":
            $content = saveLanguage($smarty, $module_name, $local_templates_dir, $arrConf, $pACL, $uid); 
            break;
        default:
            $content = formLanguage($smarty, $module_name, $local_templates_dir, $arrConf, $pACL, $uid);
            break;
    }
    return $content;
}

function formLanguage($smarty, $module_name, $local_templates_dir, $arrConf, $pACL, $uid)
{   
    global $arrPermission;
    $lang=get_language();
    $error_msg='';
    $archivos=array();
    $langIperfex=array();
    $contenido=''; 
    $msgError='';
    $arrDefaultRate=array();
    $conexionDB=FALSE;
    
    include "configs/languages.conf.php"; //este archivo crea el arreglo language que contine los idiomas soportados
                                          //por iperfex
    leer_directorio("/usr/share/iperfex/lang",$error_msg,$archivos);
    if (count($archivos)>0){
        foreach ($languages as $lang=>$lang_name){
            if (in_array("$lang.lang",$archivos))
               $langIperfex[$lang]=$lang_name;
        }
    }

    if (count($langIperfex)>0){ 
        $arrFormLanguage = createFieldForm($langIperfex);
        $oForm = new iperfexForm($smarty, $arrFormLanguage);
      
        if(empty($pACL->errMsg)) {
            $conexionDB=TRUE;
        } else
            $msgError=_tr("You can't change language").'.-'._tr("ERROR").":".$pACL->errMsg;
        
        // $arrDefaultRate['language']="es";
        $smarty->assign("CAMBIAR", _tr("Save"));
        $smarty->assign("MSG_ERROR",$msgError);
        $smarty->assign("conectiondb",$conexionDB);
	    $smarty->assign("icon","web/apps/$module_name/images/system_preferencies_language.png");
        
        if((in_array('edit',$arrPermission)))
            $smarty->assign('EDIT_LANG',true);
        
        //obtener el valor del lenguage por defecto
        $defLang=$pACL->getUserProp($uid,'language');
        if (empty($defLang) || $defLang===false) $defLang="en";
            $arrDefault['language']=$defLang;
        $htmlForm = $oForm->fetchForm("$local_templates_dir/language.tpl", _tr("Language"), $arrDefault);
        $contenido = "<form  method='POST' style='margin-bottom:0;' action='?menu=$module_name'>".$htmlForm."</form>"; 
    }

     return $contenido;
}

function saveLanguage($smarty, $module_name, $local_templates_dir, $arrConf, $pACL, $uid){
    //guardar el nuevo valor
    $lang = $_POST['language'];
    if($uid!==false){
        $bExito=$pACL->setUserProp($uid,'language',$lang,"system");
    }else
        $bExito=false;
    
    //redirigir a la pagina nuevamente
    if ($bExito){
       header("Location: index.php?menu=language");
        
    }else{
        $smarty->assign("mb_title", _tr("Error"));
        $smarty->assign("mb_message", $pACL->errMsg);
        return formLanguage($smarty, $module_name, $local_templates_dir, $arrConf, $pACL, $uid);
    }
 
}


function createFieldForm($langIperfex){
        $arrForm  = array("language"  => array("LABEL"                  => _tr("Select language"),
                                               "DESCRIPTION"            => _tr("LG_selectlang"),
                                               "REQUIRED"               => "yes",
                                               "INPUT_TYPE"             => "SELECT",
                                               "INPUT_EXTRA_PARAM"      => $langIperfex,
                                               "VALIDATION_TYPE"        => "text",
                                               "VALIDATION_EXTRA_PARAM" => ""),);
        return $arrForm;
}


function leer_directorio($directorio,$error_msg,&$archivos){
    $bExito=FALSE;
    $archivos=array();
    if (file_exists($directorio)) {
        if ($handle = opendir($directorio)) {
            $bExito=true;
            while (false !== ($file = readdir($handle))) {
               //no tomar en cuenta . y ..
                if ($file!="." && $file!=".." )
                    $archivos[]=$file;
            }
            closedir($handle);
        }

     }else
        $error_msg ="No existe directorio";

     return $bExito;
}

function getAction()
{
    global $arrPermission;
    if(getParameter("save_language")) //Get parameter by POST (submit)
        return (in_array('edit',$arrPermission))?'save':'report';
    else
        return "report";
}

?>
