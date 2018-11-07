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

require_once "libs/misc.lib.php";

function _moduleContent(&$smarty, $module_name)
{
    //include module files
    include_once "libs/iperfexForm.class.php" ;
    
    //global variables
    global $arrConf;
    global $arrConfModule;
    $arrConf = array_merge($arrConf,$arrConfModule);
    
    //folder path for custom templates
    $local_templates_dir=getWebDirModule($module_name);
    
    $sZonaActual = "America/New_York";

	//actions
    $accion = getAction();
    $content = "";
    switch($accion){
        case "save":
            $content = saveTime($smarty,$module_name,$local_templates_dir, $sZonaActual);
            break;
        default:
            $content = formTime($smarty,$module_name,$local_templates_dir, $sZonaActual);
            break;
    }
    return $content;
}

function setSync($sync)
{
    //$cmd = "sudo /usr/bin/timedatectl set-ntp ".$sync;
    //exec($cmd,$output,$ret_val);
    echo json_encode(array('success'=>true));
   

}

function formTime($smarty,$module_name,$local_templates_dir, $sZonaActual){
    
    $smarty->assign("TIME_TITULO",_tr("Date and Time Configuration"));
    $smarty->assign("INDEX_HORA_SERVIDOR",_tr("Current Datetime"));
    $smarty->assign("TIME_NUEVA_FECHA",_tr("New Date"));
    $smarty->assign("TIME_NUEVA_HORA",_tr("New Time"));
    $smarty->assign("TIME_NUEVA_ZONA",_tr("New Timezone"));
    $smarty->assign("INDEX_ACTUALIZAR",_tr("Apply changes"));
    $smarty->assign("SINCRONIZATION",_tr("Sincronization"));
    $smarty->assign("TIME_MSG_1", _tr("The change of date and time can concern important  system processes.").'  '._tr("Are you sure you wish to continue?"));
    $arrForm = array();
    $oForm = new iperfexForm($smarty, $arrForm);

    /*
        Para cambiar la zona horaria:
        1)	Abrir y mostrar columna 3 de /usr/share/zoneinfo/zone.tab que muestra todas las zonas horarias.
        2)	Al elegir fila de columna 3, verificar que sea de la forma abc/def y que
            existe el directorio /usr/share/zoneinfo/abc/def . Pueden haber N elementos
            en la elección, separados por / , incluyendo uno solo (sin / alguno)
        3)	Si existe /etc/localtime, borrarlo
        4)	Copiar archivo /usr/share/zoneinfo/abc/def a /etc/localtime
        5)	Si existe /var/spool/postfix/etc/localtime , removerlo y sobreescribr
            con el mismo archivo copiado a /etc/localtime
            
        Luego de esto, ejecutar cambio de hora local
    */
    
    $listaZonas = leeZonas();

    $sync =getSync();

    // Cargar de /etc/sysconfig/clock la supuesta zona horaria configurada.
    // El resto de contenido del archivo se preserva, y la clave ZONE se 
    // escribirá como la última línea en caso de actualizar
   /* $sZonaActual = "America/New_York";
    $infoZona = NULL;
    $hArchivo = fopen('/etc/sysconfig/clock', 'r');
    if ($hArchivo) {
        $infoZona = array();
        while (!feof($hArchivo)) {
            $s = fgets($hArchivo);
            $regs = NULL;
            if (ereg('^ZONE="(.*)"', $s, $regs))
                $sZonaActual = $regs[1];
            else $infoZona[] = $s;
        }
        fclose($hArchivo);
    }
        $sContenido = '';
*/
     $sComando = "sudo /usr/bin/timedatectl status";
     exec($sComando, $output, $ret);
     $sZonaActual=substr ($output[3] , strpos($output[3], ":"));
     $sZonaActual=explode("(",$sZonaActual)[0];
     $sZonaActual=str_replace(' ', '', $sZonaActual);
     $sZonaActual=str_replace(':', '', $sZonaActual);

     $dateActual=str_replace ("Local time: ","",$output[0]);
     $dateActual=explode("(",$dateActual)[0];
     $dateActual=substr($dateActual,0, 29);
     $dateActual=strtotime($dateActual); 
     //$dateActual=str_replace(':', '', $dateActual);
     
     $mes = date("m",time());
    $mes = (int)$mes - 1;

    $smarty->assign("CURRENT_DATETIME", strftime("%Y,%m,%d,%H,%M,%S",$dateActual));
    $smarty->assign("DATETIME", $dateActual);
    $smarty->assign("SYNC", $sync);
    $smarty->assign('LISTA_ZONAS', $listaZonas);
    $smarty->assign('ZONA_ACTUAL', $sZonaActual);
    $smarty->assign("CURRENT_DATE",strftime("%d %b %Y",$dateActual));
    $smarty->assign("icon","web/apps/$module_name/images/system_preferences_datetime.png");
    $sContenido="";
	$sContenido .= $oForm->fetchForm("$local_templates_dir/time.tpl", _tr('Date and Time Configuration'), $_POST);
	return $sContenido;
}

function saveTime($smarty,$module_name,$local_templates_dir, $sZonaActual ){

    $date = getParameter("date");
    $date = translateDate($date);
    $date = explode("-",$date);
    $month = "";
    $year = "";
    $day = "";

    //Sincronizacion
    $sync = getParameter("sync");
    if($sync=="sync"){
        $sComando = 'sudo /usr/bin/timedatectl set-ntp true';
    }else{
        $sComando = 'sudo /usr/bin/timedatectl set-ntp false';
    }
    
    exec($sComando, $output, $ret);
   

    if(isset($date[0]) && isset($date[1]) && isset($date[2])){
        $month = $date[1];
        $day = $date[2];
        $year = $date[0];
    }
    
    // Validación básica
    $listaVars = array(
//		'ServerDate_Year'	=>	'^[[:digit:]]{4}$',
//		'ServerDate_Month'	=>	'^[[:digit:]]{1,2}$',
//		'ServerDate_Day'	=>	'^[[:digit:]]{1,2}$',
        'ServerDate_Hour'	=>	'^[[:digit:]]{1,2}$',
        'ServerDate_Minute'	=>	'^[[:digit:]]{1,2}$',
        'ServerDate_Second'	=>	'^[[:digit:]]{1,2}$',
    );
    
    $bValido = TRUE;
    foreach ($listaVars as $sVar => $sReg) {
        if (!ereg($sReg, $_POST[$sVar])) {
            $bValido = FALSE;
        }
    }
    if(!ereg('^[[:digit:]]{4}$',$year))
        $bValido = FALSE;
    if(!ereg('^[[:digit:]]{1,2}$',$month))
        $bValido = FALSE;
    if(!ereg('^[[:digit:]]{1,2}$',$day))
        $bValido = FALSE;
    if ($bValido && !checkdate($month, $day, $year)) $bValido = FALSE;

    // Validación de zona horaria nueva
    $sZonaNueva = $_POST['TimeZone'];
    
    $listaZonas = leeZonas();

    if (!in_array($sZonaNueva, $listaZonas)) $sZonaNueva = $sZonaActual;

    if (!$bValido && !$sync ) {
        // TODO: internacionalizar
        $smarty->assign("mb_message", _tr('Date not valid'));
    } else {
        if ($sZonaNueva != $sZonaActual && $sync) {
           $sComando = 'sudo /usr/bin/timedatectl set-timezone '.$sZonaNueva;
            $output = $ret = NULL;
            exec($sComando, $output, $ret);
            if ($ret != 0) {
                $smarty->assign('mb_message', _tr('Failed to change timezone').' - '.implode('<br/>', $output));
                $bValido = FALSE;
           }
        }

        if ($bValido && !$sync) {
            $sZonaActual = $sZonaNueva;
            $fecha = sprintf('%04d-%02d-%02d %02d:%02d:%02d', 
                $year, $month, $day, $_POST['ServerDate_Hour'], $_POST['ServerDate_Minute'], $_POST['ServerDate_Second']);
            $cmd = "sudo /usr/bin/timedatectl set-time '".$fecha."'";
            $output=$ret_val="";
            exec($cmd,$output,$ret_val);
            
            if ($ret_val == 0) {
                $smarty->assign('mb_message', _tr('System time changed successfully'));
            } else {
                $smarty->assign('mb_message', _tr('System time can not be changed').$cmd.$sync." - <br/>".implode('<br/>', $output));
            }
        }
         
    }

    return formTime($smarty,$module_name,$local_templates_dir, $listaZonas, $sZonaActual);
}

    
function leeZonas(){
    
    $cmd = "sudo /usr/bin/timedatectl list-timezones";
    exec($cmd,$output,$ret_val);
    $listaZonas=$output;
    return $listaZonas;
}

function getSync(){
    
   $sComando = "sudo /usr/bin/timedatectl status";
    exec($sComando, $output, $ret);
    $sync=substr ($output[4] , strpos($output[4], ":"));
    $sync=str_replace(' ', '', $sync);
    $sync=str_replace(':', '', $sync);
    if($sync=="no"){
        return false;
    }else{
        return true;
    }
    
}

function getAction(){
    global $arrPermission;
    if(getParameter("Actualizar")) //Get parameter by POST (submit)
        return (in_array('edit',$arrPermission))?'save':'report';
    else
        return "report";
}


   

?>
