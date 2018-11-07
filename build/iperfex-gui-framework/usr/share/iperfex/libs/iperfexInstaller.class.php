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
  $Id: iperfexInstaller.class.php,v 1.1 2007/09/05 00:25:25 gcarrillo Exp $
*/

$iperfex="/usr/share/iperfex";
require_once "$iperfex/libs/iperfexDB.class.php";
require_once "$iperfex/libs/iperfexModuloXML.class.php";
require_once "$iperfex/libs/misc.lib.php";

// La presencia de MYSQL_ROOT_PASSWORD es parte del API global.
define('MYSQL_ROOT_PASSWORD', obtenerClaveConocidaMySQL('root'));

class Installer
{

    var $_errMsg;

    function createNewDatabase($path_script_db,$sqlite_db_path,$db_name)
    {
        $comando="cat $path_script_db | sqlite3 $sqlite_db_path/$db_name.db";
        exec($comando,$output,$retval);
        return $retval;
    }

    function createNewDatabaseMySQL($path_script_db, $db_name, $datos_conexion)
    {
        $root_password = MYSQL_ROOT_PASSWORD;

        $db = 'mysql://root:'.$root_password.'@localhost/';
        $pDB = new iperfexDB ($db);
        $sPeticionSQL = "CREATE DATABASE $db_name";
        $result = $pDB->genExec($sPeticionSQL);
        if($datos_conexion['locate'] == "")
            $datos_conexion['locate'] = "localhost";
        $GrantSQL = "GRANT SELECT, INSERT, UPDATE, DELETE ON $db_name.* TO ";
        $GrantSQL .= $datos_conexion['user']."@".$datos_conexion['locate']." IDENTIFIED BY '".                          $datos_conexion['password']."'";
        $result = $pDB->genExec($GrantSQL);
        $comando="mysql --password=".escapeshellcmd($root_password)." --user=root $db_name < $path_script_db";
        exec($comando,$output,$retval);
        return $retval;
    }

    function refresh($documentRoot='')
    {
        global $arrConf;
        $documentRoot = $arrConf['documentRoot'];

        //STEP 1: Delete tmp templates of smarty.
        exec("rm -rf $documentRoot/tmp/smarty/templates_c/*",$arrConsole,$flagStatus); 

        //STEP 2: Update menus iperfex permission.
        if(isset($_SESSION['iperfex_user_permission']))
          unset($_SESSION['iperfex_user_permission']);

        return $flagStatus;
    }
}
?>
