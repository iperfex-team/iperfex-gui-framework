<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
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
  $Id: iperfexEmailRelay.class.php,v 1.1 2010-07-21 01:08:56 Bruno Macias bmacias@iperfexsanto.com Exp $ */
class iperfexEmailRelay {
    var $_DB;
    var $errMsg;

    function iperfexEmailRelay(&$pDB)
    {
        // Se recibe como parámetro una referencia a una conexión iperfexDB
        if (is_object($pDB)) {
            $this->_DB =& $pDB;
            $this->errMsg = $this->_DB->errMsg;
        } else {
            $dsn = (string)$pDB;
            $this->_DB = new iperfexDB($dsn);

            if (!$this->_DB->connStatus) {
                $this->errMsg = $this->_DB->errMsg;
                // debo llenar alguna variable de error
            } else {
                // debo llenar alguna variable de error
            }
        }
    }

    function getMainConfigByAll()
    {
        $query  = "SELECT name, value FROM email_relay ";
        $result = $this->_DB->fetchTable($query, true);

        if($result==FALSE){
            $this->errMsg = $this->_DB->errMsg;
            return null;
        }

        $arrData = null;
        if(is_array($result) && count($result)>0){
            foreach($result as $k => $data)
                $arrData[$data['name']] = $data['value'];
        }
        return $arrData;
    }


    /**
     * Método para actualizar la configuración de SMTP remoto.
     * 
     * @param   array   $arrData    Arreglo con los parámetros de configuración:
     *  status          'on' para activar SMTP remoto, 'off' para desactivar
     *  relayhost       nombre de host del SMTP remoto
     *  port            puerto TCP a contactar en SMTP remoto
     *  user            nombre de usuario para autenticación
     *  password        contraseña para autenticación
     *  autentification 'on' para activar TLS, 'off' para desactivar
     * 
     * @return  bool    VERDADERO en éxito, FALSO en error
     */
    function processUpdateConfiguration($arrData)
    {
       /*$this->errMsg = '';
        $output = $retval = NULL;
        $sComando = '/usr/bin/iperfex-helper remotesmtp'.
            ' --relay '.escapeshellarg($arrData['relayhost']).
            ' --port '.escapeshellarg($arrData['port']).
            ' --user '.(empty($arrData['user']) ? "''" : escapeshellarg($arrData['user'])).
            ' --pass '.(empty($arrData['password']) ? "''" : escapeshellarg($arrData['password']));
        if ($arrData['status'] == 'on') $sComando .= ' --enableremote';
        if ($arrData['autentification'] == 'on') $sComando .= ' --tls';
        $sComando .= ' 2>&1';
        exec($sComando, $output, $retval);
        if ($retval != 0) {
            foreach ($output as $s) {
                $regs = NULL;
                if (preg_match('/^ERR: (.+)$/', trim($s), $regs)) {
                    $this->errMsg = $regs[1];
                }
            }
        	return FALSE;
        }*/

        $querys= array();
        // Password
        $query  = "SELECT count(*) existe from email_relay where name='password';";
        $result = $this->_DB->getFirstRowQuery($query,true);
        if(is_array($result) && count($result) >0){
          array_push($querys,($result['existe'] >= 1)
                ? "UPDATE email_relay SET value='".$arrData['password']."' WHERE name='password';"
                : "INSERT into email_relay(name,value) VALUES('password','".$arrData['password']."')");
         }

	//Puerto
        $query  = "SELECT count(*) existe from email_relay where name='port';";
        $result = $this->_DB->getFirstRowQuery($query,true);
        if(is_array($result) && count($result) >0){
          array_push($querys,($result['existe'] >= 1)
                ? "UPDATE email_relay SET value='".$arrData['port']."' WHERE name='port';"
                : "INSERT into email_relay(name,value) VALUES('port','".$arrData['port']."')");
         }

        //Relayhost
        $query  = "SELECT count(*) existe from email_relay where name='relayhost';";
        $result = $this->_DB->getFirstRowQuery($query,true);
        if(is_array($result) && count($result) >0){
          array_push($querys,($result['existe'] >= 1)
                ? "UPDATE email_relay SET value='".$arrData['relayhost']."' WHERE name='relayhost';"
                : "INSERT into email_relay(name,value) VALUES('relayhost','".$arrData['relayhost']."')");
         }

        //User
        $query  = "SELECT count(*) existe from email_relay where name='user';";
        $result = $this->_DB->getFirstRowQuery($query,true);
        if(is_array($result) && count($result) >0){
          array_push($querys,($result['existe'] >= 1)
                ? "UPDATE email_relay SET value='".$arrData['user']."' WHERE name='user';"
                : "INSERT into email_relay(name,value) VALUES('user','".$arrData['user']."')");
         }

        //Autentification
        $query  = "SELECT count(*) existe from email_relay where name='autentification';";
        $result = $this->_DB->getFirstRowQuery($query,true);
        if(is_array($result) && count($result) >0){
          array_push($querys,($result['existe'] >= 1)
                ? "UPDATE email_relay SET value='".$arrData['autentification']."' WHERE name='autentification';"
                : "INSERT into email_relay(name,value) VALUES('autentification','".$arrData['autentification']."')");
         }

        //Status
        $query  = "SELECT count(*) existe from email_relay where name='status';";
        $result = $this->_DB->getFirstRowQuery($query,true);
        if(is_array($result) && count($result) >0){
          array_push($querys,($result['existe'] >= 1)
                ? "UPDATE email_relay SET value='".$arrData['status']."' WHERE name='status';"
                : "INSERT into email_relay(name,value) VALUES('status','".$arrData['status']."')");
         }
       
        //Hostname
        $query  = "SELECT count(*) existe from email_relay where name='hostname';";
        $result = $this->_DB->getFirstRowQuery($query,true);
        if(is_array($result) && count($result) >0){
         if($result['existe'] == 0)
         {
               array_push($querys,"INSERT into email_relay(name,value) VALUES('hostname','isurveyx.cuesti.com')");
         }
       }
     
       foreach($querys as $query)
       {
          $ok=$this->_DB->genQuery($query);
       }
       if(!$ok){
          $this->errMsg = $this->_DB->errMsg;
          return FALSE;
         }

       return TRUE;
    }

    function setStatus($status)
    {
        // Existe name status
        $query  = "select count(*) existe from email_relay where name='status';";
        $result = $this->_DB->getFirstRowQuery($query,true);

        if(is_array($result) && count($result) >0){
            $query = ($result['existe'] >= 1)
                ? "update email_relay set value=? where name='status'"
                : "insert into email_relay(name,value) values('status', ?)";
            $ok = $this->_DB->genQuery($query, array($status));

            if(!$ok){
		echo $this->_DB->errMsg;
                $this->errMsg = $this->_DB->errMsg;
                return false;
            }
            return true;
        }
        else{
            $this->errMsg = $this->_DB->errMsg;
            return false;
        }
    }

    function getStatus()
    {
        // Existe name status
        $query  = "select value from email_relay where name='status';";
        $result = $this->_DB->getFirstRowQuery($query,true);

        if(is_array($result) && count($result) >0)
            return $result['value'];
        else return 0;
    }
    function getUser()
    {
	$query="SELECT value from email_relay WHERE name='user';";
	$result= $this->_DB->getFirstRowQuery($query,true);
	return $result['value'];
    }

    function getHostname()
    {
   	$query="SELECT value from email_relay WHERE name='hostname';";
        $result= $this->_DB->getFirstRowQuery($query,true);
        return $result['value'];
    }

    function checkSMTP($smtp_server, $smtp_port=25, $username, $password, $auth_enabled=yes, $tls_enabled=true)
    {
      $hostname=$this->getHostname();
      //$hostname="isurveyx.cuesti.com";
      $comandos=array();
      array_push($comandos,"postconf -e 'myhostname = ".$hostname."'");
      array_push($comandos,"postconf -e 'relayhost = ".$smtp_server.":".$smtp_port."'");
      if($tls_enabled)
        {
          array_push($comandos,"postconf -e 'smtp_use_tls = yes'");
       }else
       {
           array_push($comandos,"postconf -e 'smtp_use_tls = no'");
         }

       array_push($comandos,"sudo rm -rf /etc/postfix/sasl_passwd*");
       array_push($comandos,"postconf -e 'smtp_sasl_auth_enable = yes'");
       array_push($comandos,"postconf -e 'smtp_sasl_password_maps = hash:/etc/postfix/sasl_passwd'");
       array_push( $comandos,"postconf -e 'smtp_tls_CAfile = /etc/ssl/certs/ca-bundle.crt'");
       array_push( $comandos,"postconf -e 'smtp_sasl_security_options = noanonymous'");
       array_push( $comandos,"postconf -e 'smtp_sasl_tls_security_options = noanonymous'");
       array_push( $comandos,'echo "'.$smtp_server.':'.$smtp_port.' '.$username.':'.$password.' " > /etc/postfix/sasl_passwd');
       array_push( $comandos,"sudo postmap /etc/postfix/sasl_passwd");
       array_push( $comandos,"sudo chown root:postfix /etc/postfix/sasl_passwd*");
       array_push( $comandos,"sudo chmod 640 /etc/postfix/sasl_passwd*");
       array_push($comandos,"sudo /etc/init.d/postfix restart");
       array_push($comandos,"echo $(id)");
        foreach ($comandos as $comando)
        {
           
           exec($comando,$output,$retval);
           //echo $output;
           //print_r($output);
           //echo $retval;
           //echo $comando."<br>";
         }
    }

    //Envia el mail de prueba
    function test($mail)
     {
	    $to = $mail;
          //$to = $this->getUser();
           $subject = "Test mail";
           $contenido=file_get_contents('/usr/share/iperfex/libs/mailTemplates/basic/templates_inline.html');
	   $contenido=str_replace ("--titulo--","Este es un mail de prueba",$contenido);
	   $contenido=str_replace ("--subtitulo--","¡Felicitaciones!",$contenido);
	   $contenido=str_replace ("--mensaje--","<p>Si has recibido este mail significa que tu configuracióne es correcta</p>",$contenido);
           $message = $contenido;
	   // Always set content-type when sending HTML email
   	   $headers = "MIME-Version: 1.0" . "\r\n";
	   $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	   // More headers
	    $headers .= 'From: <iperfex@iperfex.com>' . "\r\n";
	   // $headers .= 'Cc:iperfex@iperfex.com' . "\r\n";
	   echo mail($to,$subject,$message,$headers);
    }	
}
