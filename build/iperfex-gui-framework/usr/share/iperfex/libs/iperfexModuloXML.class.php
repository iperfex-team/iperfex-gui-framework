<?php
/*
  vim: set expandtab tabstop=4 softtabstop=4 shiftwidth=4:
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
  $Id: iperfexModuloXML.class.php,v 1.1 2007/09/05 00:25:25 gcarrillo Exp $
  $Id: iperfexModuloXML.class.php,v 1.1 2008/05/29 11:25:25 afigueroa Exp $
  $Id: iperfexModuloXML.class.php,v 1.1 2011/01/31 10:00:00 ecueva Exp $
  $Id: iperfexModuloXML.class.php,v 3.1 2013/09/27 10:00:00 rmera@iperfexsato.com Exp $
*/


class ModuloXML
{
    private $arbolResource;// 
    private $xmlFile;
    private $errMsg;
    /**
     * Constructor del objeto ModuloXML
     * 
     * @param string    $sRutaArchivo   Ruta al archivo donde se encuentra el menú XML
     */
    function ModuloXML($xmlFile)
    {
        $this->xmlFile=$xmlFile;
        $this->_privado_construirArbolMenu();
    }

    private function _privado_construirArbolMenu()
    {
        $this->arbolResource = array();

        //comprabamos que realmente sea un archivo
        if (!is_file($this->xmlFile)) 
            return false;
        
        $xmlObj=simplexml_load_file($this->xmlFile);
        if($xmlObj===false){
            return false;
        }
        //atributos del recurso
        //id="email_stats" name="Email stats" idParent="email_admin" type="module" link=""  order_no="5"
        if(!isset($xmlObj->menu)){
            return false;
        }
        
        $resource['id']=(string)$xmlObj->menu['id'];
        $resource['description']=(string)$xmlObj->menu['name'];
        $resource['idParent']=(string)$xmlObj->menu['idParent'];
        $resource['type']=(string)$xmlObj->menu['type'];
        $resource['link']=(string)$xmlObj->menu['link'];
        $resource['order_no']=(string)$xmlObj->menu['order_no'];
        $resource['administrative']=(string)$xmlObj->menu->permissions['administrative'];
        $resource['org_access']=(string)$xmlObj->menu->permissions['organization_access'];
        if(isset($xmlObj->menu->permissions->actions)){
            foreach($xmlObj->menu->permissions->actions->action as $actiontag){
                $tmpAction=explode("|",(string)$actiontag['name']);
                $arrGroup=array();
                if(isset($actiontag->groups)){
                    foreach($actiontag->groups->group as $group){
                        $arrGroup[(string)$group['name']]=(string)$group['desc'];
                    }
                }
                foreach($tmpAction as $action){
                    $resource['actions'][$action]=$arrGroup;
                }
            }
        }
        $this->arbolResource = $resource;
        return true;
    }
    
    function getArbolResource(){
        return $this->arbolResource;
    }
}
?>
