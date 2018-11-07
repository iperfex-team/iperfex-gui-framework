<?php
/* vim: set expandtab tabstop=4 softtabstop=4 shiftwidth=4:
  Codificación: UTF-8
  +----------------------------------------------------------------------+
  | iPERFEX version 3.0                                                  |
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
  $Id: default.conf.php,v 1.1.1.1 2007/07/06 21:31:56 gcarrillo Exp $ */

global $arrConf;
$arrConf['dsn_mysql_iperfex'] = generarDSNSistema("asteriskuser","iperfexpbx","db");
$arrConf['iperfex_dbdir'] = '/var/www/db_iperfex';
$arrConf['iperfex_dsn'] = array(
                                "iperfex"   =>  $arrConf['dsn_mysql_iperfex'],
                                "acl"       =>  $arrConf['dsn_mysql_iperfex'],
                                "samples"   =>  "sqlite3:///$arrConf[iperfex_dbdir]/samples.db",
                            );
$arrConf['documentRoot'] = '/var/www/html';
$arrConf['basePath'] = '/var/www/html';
$arrConf['webCommon'] = 'web/_common';
$arrConf['iperfex'] = '/usr/share/iperfex';
$arrConf['adminFolder'] = 'iperfex';
$arrConf['theme'] = 'default';

checkFrameworkDatabases($arrConf['iperfex_dbdir']);

$arrConf['iperfex_version'] = load_version_iperfex($arrConf['basePath']."/");
$arrConf['defaultMenu'] = 'config';
$arrConf['language'] = 'en';
$arrConf['_LICENCE_CHANNELS_IPERFEX'] = defined('_LICENCE_CHANNELS_IPERFEX') ? _LICENCE_CHANNELS_IPERFEX : 100;

define("HEADTITLE", "iPERFEX");
define("LICENSEDBY", "Copyright © 2012-208 iPERFEX - All Rights Reserved.");
define("LOGO", "/web/_common/images/iperfex-logo.png");
define("FOOTERIMG", "/web/_common/images/iperfexlogo.jpg");
define("FOOTERHREF", "http://www.iperfex.com");
define("LOGINWIDTH", "320");
define("LOGINHEIGHT", "83");
define("FOOTERWIDTH", "120");
define("FOOTERHEIGHT", "40");
define("MENUWIDTH", "120");
define("MENUHEIGHT", "30");
?>
