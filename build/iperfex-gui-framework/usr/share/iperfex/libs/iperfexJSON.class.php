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
  $Id: PaloSantoJSON.class.php,v 1.1.1.1 2010/06/15 11:10:00 Mercy Anchundia manchundia@iperfexsanto.com */

$iperfex="/usr/share/iperfex";
require_once "$iperfex/libs/JSON.php";

class PaloSantoJSON {

    var $_error;
    var $_statusResponse;
    var $_message;

    function PaloSantoJSON()
    {
        $this->_error="";
        $this->_statusResponse="OK";
        $this->_message="";
    }

    function createJSON()
    {
       $json    = new Services_JSON();
       $arrData = array(
		"error"          => $this->_error,
		"message"        => $this->_message,
		"statusResponse" => $this->_statusResponse
       );
       return $json->encode($arrData);
    }

   function get_error()
   {
       return $this->_error;
   }

   function get_status()
   {
       return $this->_statusResponse;
   }

   function get_message()
   {
       return $this->_message;
   }
   
   function set_error($error)
   {
       $this->_error=$error;
   }

   function set_status($status)
   {
       $this->_statusResponse=$status;
   }

   function set_message($message)
   {
       $this->_message=$message;
   }
}
?>
