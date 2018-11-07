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
  $Id: iperfexOrganization.class.php,v 1.1 2012-02-07 11:02:13 Rocio Mera rmera@iperfexsanto.com Exp $ */



$iperfex="/usr/share/iperfex";
#include_once "$iperfex/libs/iperfexEmail.class.php";
include_once "$iperfex/libs/iperfexACL.class.php";
#include_once "$iperfex/libs/iperfexFax.class.php";



class iperfexOrganization{
    var $_DB;
    var $errMsg;

    function iperfexOrganization(&$pDB)
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
    
    /**
     * This function return the number the organizations that exist filtering by the given params
     * @param array =>
     * @return mixed => false in case of errors
     *                  integer => number of organizations
     */
    function getNumOrganization($arrProp){
        $arrWhere=array();
        $arrParam=array();
        //la organizacion por default de iperfex no se contabiliza
        $query="SELECT count(id) FROM organization WHERE id!=1";
        
        if(!empty($arrProp['state']) && $arrProp['state']!='all'){
            $arrWhere[]=" state=? ";
            $arrParam[]=$arrProp['state'];
        }
        if(!empty($arrProp['name'])){
            $arrWhere[]=" UPPER(name) like ? ";
            $arrParam[]="%".strtoupper($arrProp['name'])."%";
        }
        if(!empty($arrProp['domain'])){
            $arrWhere[]=" domain like ? ";
            $arrParam[]="%{$arrProp['domain']}%";
        }
        if(!empty($arrProp['id'])){
            $arrWhere[]=" id=? ";
            $arrParam[]=$arrProp['id'];
        }
        
        if(count($arrWhere)>0){
            $query .=" AND ".implode(" AND ",$arrWhere);
        }
        
        $result=$this->_DB->getFirstRowQuery($query, false, $arrParam);
        if($result==FALSE){
            $this->errMsg = $this->_DB->errMsg;
            return false;
        }
        return $result[0];
    }
    
    /**
     * This function return a list of organizations that exist filtering by the given params
     * @param array =>
     * @return mixed => false in case of errors
     *                  array => list of organizations
     */
    function getOrganization($arrProp){
        $arrWhere=array();
        $arrParam=array();
        $query="SELECT * FROM organization WHERE id!=1";
        if(!empty($arrProp['state']) && $arrProp['state']!='all'){
            $arrWhere[]=" state=? ";
            $arrParam[]=$arrProp['state'];
        }
        if(!empty($arrProp['name'])){
            $arrWhere[]=" UPPER(name) like ? ";
            $arrParam[]="%".strtoupper($arrProp['name'])."%";
        }
        if(!empty($arrProp['domain'])){
            $arrWhere[]=" domain like ? ";
            $arrParam[]="%{$arrProp['domain']}%";
        }
        if(!empty($arrProp['id'])){
            $arrWhere[]=" id=? ";
            $arrParam[]=$arrProp['id'];
        }
        
        if(count($arrWhere)>0){
            $query .=" AND ".implode(" AND ",$arrWhere);
        }
        
        if(isset($arrProp['limit']) && isset($arrProp['offset'])){
            $query .=" limit ? offset ?";
            $arrParam[]=$arrProp['limit'];
            $arrParam[]=$arrProp['offset'];
        }
        
        $result=$this->_DB->fetchTable($query, true, $arrParam);
        if($result==FALSE){
            $this->errMsg = $this->_DB->errMsg;
            return false;
        }else
            return $result;
    }


    function getNumUserByOrganization($id)
    {
        $query="SELECT COUNT(u.id) FROM acl_user u inner join acl_group g on u.id_group = g.id where g.id_organization=?;";
        $result=$this->_DB->getFirstRowQuery($query, false, array($id));

        if($result===FALSE){
            $this->errMsg = $this->_DB->errMsg;
            return false;
        }else{
            return $result[0];
        }
    }

    function getUsersByOrganization($id)
    {
        if (!preg_match('/^[[:digit:]]+$/', "$id")) {
            $this->errMsg = "Organization ID is not numeric";
            return false;
        }

        $query = "SELECT u.id, u.username, u.name, u.md5_password, u.id_group, u.extension, u.fax_extension, u.picture FROM acl_user u inner join acl_group g on u.id_group = g.id where g.id_organization=?";
        $result=$this->_DB->fetchTable($query, true, array($id));

        if($result==FALSE){
            $this->errMsg = $this->_DB->errMsg;
            return false;
        }
        return $result;
    }

    function getOrganizationById($id)
    {
		if (!preg_match('/^[[:digit:]]+$/', "$id")) {
            $this->errMsg = "Organization ID is not numeric";
			return false;
        }

        $query = "SELECT * FROM organization WHERE id=?;";

        $result=$this->_DB->getFirstRowQuery($query, true, array($id));

        if($result===FALSE){
            $this->errMsg = $this->_DB->errMsg;
            return false;
        }
        return $result;
    }
    
    function getOrganizationByName($name)
    {
        $query = "SELECT * FROM organization WHERE name=?;";
        $result=$this->_DB->getFirstRowQuery($query, true, array($name));
        //triple igual problema de conneccion o de sintaxis, falso booleano
        if($result===FALSE){
            $this->errMsg = $this->_DB->errMsg;
            return false;
        }
        return $result;
    }

    function getOrganizationByDomain_Name($domain_name)
    {
        if(!preg_match("/^(([[:alnum:]-]+)\.)+([[:alnum:]])+$/", $domain_name)){
            $this->errMsg = _tr("Invalid domain format");
            return false;
        }
        
        $query = "SELECT * FROM organization WHERE domain=?;";
        $result=$this->_DB->getFirstRowQuery($query, true, array($domain_name));
        if($result===FALSE){
            $this->errMsg = $this->_DB->errMsg;
            return false;
        }
        return $result;
    }
    
    function getDomainOrganization($id)
    {
        if (!preg_match('/^[[:digit:]]+$/', "$id")) {
            $this->errMsg = "Organization ID is not numeric";
            return false;
        }

        $query = "SELECT domain FROM organization WHERE id=?;";

        $result=$this->_DB->getFirstRowQuery($query, true, array($id));

        if($result===FALSE){
            $this->errMsg = $this->_DB->errMsg;
            return false;
        }
        return $result;
    }

    //recibe como parametros el id de la organizacion y el nombre de la propiedad que se desea obtener
    function getOrganizationProp($id,$key)
    {
        $query = "SELECT value FROM organization_properties WHERE id_organization=? and property=?";
        $result=$this->_DB->getFirstRowQuery($query, false, array($id,$key));
        if($result==FALSE){
            $this->errMsg = $this->_DB->errMsg;
            return false;
        }
        return $result[0];
    }

	function getOrganizationPropByCategory($id,$category)
    {
        $query = "SELECT property,value FROM organization_properties WHERE id_organization=? and category=?";
        $result=$this->_DB->fetchTable($query, true, array($id,$category));
        if($result==FALSE){
            $this->errMsg = $this->_DB->errMsg;
            return false;
        }
        return $result;
    }

    /**
      *  Procedimiento para setear una propiedad de una organizacion, dado el id de la organizacion,
      *  el nombre de la propiedad y el valor de la propiedad
      *  Si la propiedad ya existe actualiza el valor, caso contrario crea el nuevo registro
      *  @param integer $id de la organizacion a la que se le quiere setear la propiedad
      *  @param string $key nombre de la propiedad
      *  @param string $value valor que tomarà la propiedad
      *  @return boolean verdadera si se ejecuta con existo la accion, falso caso contrario
    */
    function setOrganizationProp($id,$key,$value,$category=""){
        $bQuery = "select 1 FROM organization_properties WHERE id_organization=? AND property=?";
        $bResult=$this->_DB->getFirstRowQuery($bQuery,false,array($id,$key));
        if($bResult===false){
            $this->errMsg = $this->_DB->errMsg;
            return false;
        }else{
            if(count($bResult)==0){
                $query="INSERT INTO organization_properties VALUES(?,?,?,?)";
                $arrParams=array($id,$key,$value,$category);
            }else{
                if($bResult[0]=="1"){
                    $query="UPDATE organization_properties SET value=? where id_organization=? and property=?";
                    $arrParams=array($value,$id,$key);
                }
            }
            $result=$this->_DB->genQuery($query, $arrParams);
            if($result==false){
                $this->errMsg = $this->_DB->errMsg;
                return false;
            }else
                return true;
        }
    }

    //esta funcion se usa para setear las propiedades de una organizacion por default que pertenecen a la categoria
    //system y fax. Los valores por default son tomados de los valores configurados en la organizacion principal
    //principal
    private function setDefaultOrganizationProp($idOrganization){
        $Exito=false;
        if (is_null($idOrganization) || !preg_match('/^[[:digit:]]+$/', "$idOrganization")) {
            $this->errMsg = "Invalid ID Organization";
        }
        $query="INSERT INTO organization_properties (id_organization,property,value,category) 
                    SELECT ?,property,value,category FROM organization_properties 
                        WHERE id_organization=? and category IN ('system','fax')";
        $result=$this->_DB->genQuery($query,array($idOrganization,'1'));
        if($result==false){
            return false;
        }
        return true;
    }

    private function getNewPBXCode($domain)
    {
        if(!preg_match("/^(([[:alnum:]-]+)\.)+([[:alnum:]])+$/", $domain)){
            $this->errMsg = _tr("Invalid domain format");
            return false;
        }
        
        $code=str_replace(array("-","."),"",$domain);
        
        $existCode = $this->existPBXCode($code);
        
        if($existCode){
            $this->errMsg = _tr("New domain ($domain) is similar a $existCode, please use another domain name.");
            return false;
        }
        
        return $code;
    }
    
    private function existPBXCode($org_code){
        $query="select domain from organizacion where code=?";
        $result=$this->_DB->getFirstRowQuery($query, false, array($org_code));
        if($result==false){
            return false;
        }else{
            return $result[0];
        }
    }
    
    
    private function getNewIDCode()
    {
        $chars = "abcdefghijkmnpqrstuvwxyz23456789";
        $existCode=false;
        do{
            srand((double)microtime()*1000000);
            $code="";
            // Genero la clave
            while (strlen($code) < 20) {
                    $num = rand() % 33;
                    $tmp = substr($chars, $num, 1);
                    $code .= $tmp;
            }
            $existCode = $this->existIDCode($code);
        }while ($existCode);
        return $code;
    }
    
    private function existIDCode($idcode){
        $query="select 1 from org_hystory_register where org_idcode=?";
        $result=$this->_DB->getFirstRowQuery($query, false, array($idcode));
        if($result==false){
            return false;
        }else{
            return true;
        }
    }


    function getOrganizationCode($domain)
    {
        $query="select code from organization where domain=?";
        $result=$this->_DB->getFirstRowQuery($query,true,array($domain));
        if($result==FALSE)
            $this->errMsg = $this->_DB->errMsg;
        return $result;
    }
    
    
    function getIdOrgByDomain($domain){
        $query="SELECT id from organization where domain=?";
        $result=$this->_DB->getFirstRowQuery($query,true,array($domain));
        if($result===false)
            $this->errMsg=$this->_DB->errMsg;
        elseif(count($result)==0 || empty($result["code"]))
            $this->errMsg=_tr("Organization doesn't exist");
        return $result;
    }
    
    //funcion que crea una entrada en la tabla org_hystory_register haciendo constancia
    //de la creacion o eliminacion de una organizacion dentro del sistema
    //esta tabla solo es escrita dos veces
    //  - al momento de creacion de la organizacion
    //  - al momento que la organizacion es borrada del sistema
    //action string ( create , delete)
    private function orgHistoryRegister($action, $idcode){
        if(empty($idcode)){
            $this->errMsg=_tr("Invalid idcode");
            return false;
        }
            
        //compatible con DATETIME MySQL format
        $date=date("Y-m-d H:i:s");
        
        if($action=="create"){
            $selq="SELECT code,domain from organization where idcode=?";
            $res=$this->_DB->getFirstRowQuery($selq,true,array($idcode));
            if($res==false){
                $this->errMsg=("Invalid idcode at moment to register Organizaion in the system");
                return false;
            }
            $query="INSERT INTO org_history_register (org_domain,org_code,org_idcode,create_date) values(?,?,?,?)";
            $param=array($res["domain"],$res["code"],$idcode,$date);
        }elseif($action=="delete"){
            $query="UPDATE org_history_register SET delete_date=? where org_idcode=?";
            $param=array($date,$idcode);
        }else{
            $this->errMsg=_tr("Invalid action at moment to register Organizaion in the system");
            return false;
        }
        
        $result=$this->_DB->genQuery($query,$param);
        if($result==false){
            $this->errMsg=_tr("Problem had happened to try register the Organization. ").$this->_DB->errMsg;
            return false;
        }else
            return true;
    }
    
    //registra los eventos dentro la organizacion relacionado con la creacion, suspencion del servicio
    //reactivacion del servicio y eliminacion de la organizacion
    function registerEvent($event,$idcode){
        //por ahora los eventos soportados son create,suspend,unsuspend,delete
        if(!($event=="create" || $event=="suspend" || $event=="unsuspend" || $event=="terminate" || $event=="delete")){
            $this->errMsg=_tr("Invalid event");
            return false;
        }
        $date=date("Y-m-d H:i:s");
        $query="INSERT INTO org_history_events (event,org_idcode,event_date) values(?,?,?)";
        $param=array($event,$idcode,$date);
        $result=$this->_DB->genQuery($query,$param);
        if($result==false){
            $this->errMsg=_tr("Problem had happened to try register event in Organization. ").$this->_DB->errMsg;
            return false;
        }else
            return true;
    }
    
    /**
    * Funcion que retorna el estado de una organizacion dado sus id
    * @param $idorg => idOrg
    * @return $orgState => (id => id, state => state , since => since)
    */
    function getOrganizationState($idorg){
        $query="SELECT idcode,state from organization where id=?";
        $result=$this->_DB->getFirstRowQuery($query,true,array($idorg));
        if($result==false){
            $this->errMsg=($result===false)?$this->_DB-errMsg:_tr("Organization doesn't exist");
            return $result;
        }
    
        $query="SELECT max(event_date) from org_history_events where org_idcode=?";
        $event=$this->_DB->getFirstRowQuery($query,false,array($result["idcode"]));
        if($event==false){
            $this->errMsg=($event===false)?$this->_DB-errMsg:_tr("Organization doesn't exist");
            return $event;
        }
        
        $orgState=array("id"=>$idorg,"state"=>$result["state"],"since"=>$event[0]);
        return $orgState; 
    }
    
    /**
    * Funcion que retorna el estado de todas las organizaciones
    * @return $orgState => (id => id, state => state , since => since)
    */
    function getbunchOrganizationState($arrIds=null){
        $where="";
        if(is_array($arrIds)){
            $q=substr(str_repeat("?,",count($arrIds)),0,-1);
            $where="where id in ($q)";
        }
    
        $query="SELECT id,idcode,state from organization $where";
        $result=$this->_DB->fetchTable($query,true,$arrIds);
        if($result==false){
            $this->errMsg=($result===false)?$this->_DB-errMsg:_tr("Organizations don't exist");
            return $result;
        }
    
        $orgState=array();
        foreach($result as $x => $value){
            $query="SELECT max(event_date) from org_history_events where org_idcode=?";
            $event=$this->_DB->getFirstRowQuery($query,false,array($value["idcode"]));
            if($event===false){
                $this->errMsg=$this->_DB->errMsg;
                return false;
            }elseif(!empty($event[0]))
                $orgState[$x]=array("id"=>$value["id"],"state"=>$value["state"],"since"=>$event[0]);
        }
        
        return $orgState; 
    }
    
    
    /**
    * Funcion que cambia el estado de un (unas) organizacion dado
    * su id(s) dentro del servidor
    * en el estado suspendido los miembros de la organizacion no son capaces
    * de loguearse dentro del servidor iperfex, ademas de esto no son
    * capaces de recibir ni realizar llamadas
    * @param $org => array(idOrg1,idOrg) -> id de las organizaciones cuyo estado sera cambiado
    * @param $state => srting -> estado que tomara la organizacion (suspend,unsuspend,terminate) 
    */
    function changeStateOrganization($arrOrg,$state){
        if(!is_array($arrOrg) || count($arrOrg)==0){
            $this->errMsg=_tr("Invalid Organization(s)");
            return false;
        }
        
        if(!($state=="suspend" || $state=="unsuspend" || $state=="terminate")){
            $this->errMsg=_tr("Invalid Organization State");
            return false;
        }
        
        $file=tempnam("/tmp","orgToChange");
        
        //escribimos un archivo que en contiene el id de las organizaciones que deseamos 
        //cambiar de estado, un id por linea
        $validOrg=array();
        foreach($arrOrg as $ids){
            if(preg_match("/^[0-9]+$/",$ids) && $ids!="1"){
                $validOrg[]=$ids."\n";
            }
        }
        
        if(count($validOrg)==0){
            $this->errMsg=_tr("Invalid Organization(s)");
            return false;
        }
        
        if(file_put_contents("$file",$validOrg)===false){
            $this->errMsg=_tr("Couldn't be written file $file");
            return false;
        }
        
        // $sComando = '/usr/bin/iperfex-helper asteriskconfig changeOrgsState '.
            // escapeshellarg($file).' '.escapeshellarg($state).' 2>&1';
        // $output = $ret = NULL;
        // exec($sComando, $output, $ret);
        // if ($ret != 0){
            // $this->errMsg .=implode('',$output);
            // return false;
        // }else
            // return true;
		
		$result = $this->changeStatusOrganization($file, $state);
		if($result)
			return true;
		else
		{
			return false;
		}
    }
	
	function changeStatusOrganization($filename,$state){
		global $arrConf;
		$error="";
		
		if(!($state=="suspend" || $state=="unsuspend" || $state=="terminate")){
			$this->errMsg .="ERR: Invalid Organization State.\n";
			return false;
		}
		
		if(dirname("$filename")!="/tmp"){
			$this->errMsg .="ERR: Invalid File name.\n";
			return false;
		}
		
		//validamos en nombre del archivo para asegurarnos que no sea un path relativo
		if(!preg_match("/^orgToChange/",basename("$filename"))){
			$this->errMsg .="ERR: Invalid File name.\n";
			return false;
		}
		
		$state_org=$state;
		if($state=="unsuspend"){
			$state_org="active";
		}
		
		$arrExito=array();
		
		$arrOrg = file("$filename");
		if($arrOrg === FALSE){
			$this->errMsg .="ERR: failed to load $filename for organization update\n";
		}
		
		//creamos una nueva instanacia de la clase iperfexOrganization
		$pDB=$this->_DB;
		$pOrg=$this;
		$pOrg->_DB->beginTransaction();
		
		foreach($arrOrg as $id){
			//validamos el id de la organizacion
			if(!preg_match("/^[0-9]+$/",$id) || $id=="1"){
				continue;
			}
			//comprobamos que la organizacion exista
			$query="Select idcode,domain,state from organization where id=?";
			$org=$pOrg->_DB->getFirstRowQuery($query,true,array((int)$id));
			if($org!=false){
				if($org["state"]==$state_org){
					continue;
				}
				//cambiamos el estado de la organizacion en la tabla organization
				$query="Update organization set state=? where id=?";
				if(!$pOrg->_DB->genQuery($query,array($state_org,(int)$id))){
					$error=$pOrg->_DB->errMsg;
					break;
				}
				//registramos el evento
				if(!$pOrg->registerEvent($state,$org["idcode"])){
					$error=$pOrg->errMsg;
					break;
				}
				$arrExito[]=$id;
			}else{
				return false;
			}   
		}
		
		if(is_file("$filename"))
			unlink("$filename");
		
		if($error!=""){
			$pOrg->_DB->rollBack();
			$this->errMsg .=$error;
			return false;
		}
		
		if(count($arrExito)!=0){
			// if($this->createExtensionFile("","",$pDB)){
				// if($this->dialplanReload()){
					$pOrg->_DB->commit();
					return true;
				// }else{
					// $pOrg->_DB->rollBack();
					// return false;
				// }
			// }else{
				// $pOrg->_DB->rollBack();
				// return false;
			// }
		}else//no se realizo ninguna transaccion
			$pOrg->_DB->rollBack();
			
		return true;
	}
	
	// function dialplanReload(){
    // $ret = $output = null;
	// exec("/usr/sbin/asterisk -r -x 'dialplan reload' 2>&1",$output,$ret);
	// if($ret!=0){
        // $this->errMsg = "Couldn't be reloaded asterisk dialplan. ".implode('', $output);
        // return false;
    // }
    // return true;
// }

// function isDir($path){
    // if(!is_dir($path)){
        // if(mkdir($path)){
            // $this->changeFilePermission($path, 0775);
        // }else{
            // $this->errMsg .="ERR: failed to create '/etc/asterisk/organizations' directory " . $path;
            // return false;
        // }
    // }
    // return true;
// }

// function createExtensionGlobals($arrDomain){
    // $EXITO=false;
    // $content = "";
    
    // $file="/etc/asterisk/extensions_globals.conf";
    // $source_file="/var/www/iperfexdir/asteriskconf/iperfex_pbx.conf";
    // $content ="[globals]\n";
    // if(is_file($source_file)){
        // if($handler=fopen($source_file,'r')){
            // $content .= fread($handler, filesize($source_file));
        // } 
    // }else{
        // $this->errMsg .="File /var/www/iperfexdir/asteriskconf/iperfex_pbx.conf dosen't exist\n";
        // $content ="\n; BEGIN ELASTIX INCLUDE FILE DO NOT REMOVE THIS LINE\n";
        // $content .="; END ELASTIX INCLUDE FILE DO NOT REMOVE THIS LINE\n";
        // file_put_contents($file, $content);
        // return false;
    // }
    
    // if(count($arrDomain)!=0){
        // $content .="\n; BEGIN ELASTIX INCLUDE FILE DO NOT REMOVE THIS LINE\n";
        // foreach($arrDomain as $value)
        // {
            // if(!empty($value)){
                // //antes de incluir el archivo validamos que el mismo exista
                // //ya que si no existe y lo incluimos esto provocara que asterisk crash
                // //en caso de no existir el archivo se lo inteta crear
                // if(!is_file("/etc/asterisk/organizations/$value/extensions_globals.conf")){
                    // //comprobamos que exista el directorio de archivos de configuracion de la organizacion
                    // if(!$this->isDir("/etc/asterisk/organizations/$value")){
                        // return false;
                    // }
                    // if(file_put_contents("/etc/asterisk/organizations/$value/extensions_globals.conf","")!==false){
                        // $content .="#include organizations/$value/extensions_globals.conf\n";
                        // $this->changeFilePermission("/etc/asterisk/organizations/$value/extensions_globals.conf");
                    // }
                // }else
                    // $content .="#include organizations/extensions_globals.conf\n";
            // }
        // }
        // $content .="; END ELASTIX INCLUDE FILE DO NOT REMOVE THIS LINE\n";  
    // }else{
        // $content .="\n; BEGIN ELASTIX INCLUDE FILE DO NOT REMOVE THIS LINE\n";
        // $content .="; END ELASTIX INCLUDE FILE DO NOT REMOVE THIS LINE\n";
    // }
    
    // if(file_put_contents($file, $content)!==false){
        // $this->changeFilePermission($file);
        // return true;
    // }else{
        // $this->errMsg .="ERR: File $file couldn't be written";
        // return false;
    // } 
// }

// function createExtGeneral(){
    // $file="/etc/asterisk/extensions_general.conf";
    
    // $contenido="\n[from-pstn]\n";
    // $contenido .="include =>from-pstn-custom\n";
    // $contenido .="include =>ext-did\n";
    // $contenido .="include =>ext-did-catchall\n";
    // /*
    // //This dialplan is generated in base to dialplan generated by iperfex
    // ;-------------------------------------------------------------------------------
    // ; from-pstn-e164-us:
    // ;
    // ; The context is designed for providers who send calls in e164 format and is
    // ; biased towards NPA calls, callerid and dialing rules. It will do the following:
    // ;
    // ;  DIDs in an NPA e164 format of +1NXXNXXXXXX will be converted to 10 digit DIDs
    // ;
    // ;  DIDs in any other format will be delivered as they are, including e164 non NPA
    // ;  DIDs which means they will need the full format including the + in the inbound
    // ;  route.
    // ;
    // ;  CallerID(number) presented in e164 NPA format will be trimmed to a 10 digit CID
    // ;
    // ;  CallerID(number) presented in e164 non-NPA (country code other than 1) will be
    // ;  reformated from: +<CountryCode><Number> to 011<CountryCode><Number>
    // ;
    // [from-pstn-e164-us]
    // exten => _+1NXXNXXXXXX/_+1NXXNXXXXXX,1,Set(CALLERID(number)=${CALLERID(number):2})
    // exten => _+1NXXNXXXXXX/_NXXNXXXXXX,2,Goto(from-pstn,${EXTEN:2},1)
    // exten => _+1NXXNXXXXXX/_+X.,1,Set(CALLERID(number)=011${CALLERID(number):1})
    // exten => _+1NXXNXXXXXX/_011X.,n,Goto(from-pstn,${EXTEN:2},1)
    // exten => _+1NXXNXXXXXX,1,Goto(from-pstn,${EXTEN:2},1)
    // exten => _[0-9+]./_+1NXXNXXXXXX,1,Set(CALLERID(number)=${CALLERID(number):2})
    // exten => _[0-9+]./_NXXNXXXXXX,n,Goto(from-pstn,${EXTEN},1)
    // exten => _[0-9+]./_+X.,1,Set(CALLERID(number)=011${CALLERID(number):1})
    // exten => _[0-9+]./_011X.,n,Goto(from-pstn,${EXTEN},1)
    // exten => _[0-9+].,1,Goto(from-pstn,${EXTEN},1)
    // exten => s/_+1NXXNXXXXXX,1,Set(CALLERID(number)=${CALLERID(number):2})
    // exten => s/_NXXNXXXXXX,n,Goto(from-pstn,${EXTEN},1)
    // exten => s/_+X.,1,Set(CALLERID(number)=011${CALLERID(number):1})
    // exten => s/_011X.,n,Goto(from-pstn,${EXTEN},1)
    // exten => s,1,Goto(from-pstn,${EXTEN},1)
     // ;-------------------------------------------------------------------------------*/
    // $arrExt=array();
    // $arrExt[]=new iperfexExtensions("_+1NXXNXXXXXX/_+1NXXNXXXXXX",new ext_set('CALLERID(number)','${CALLERID(number):2}'),1);
    // $arrExt[]=new iperfexExtensions("_+1NXXNXXXXXX/_NXXNXXXXXX",new ext_goto('1','${EXTEN:2}',"from-pstn"),2);
    // $arrExt[]=new iperfexExtensions("_+1NXXNXXXXXX/_+X.",new ext_set('CALLERID(number)','011${CALLERID(number):1}'),"1");
    // $arrExt[]=new iperfexExtensions("_+1NXXNXXXXXX/_011X.",new ext_goto('1','${EXTEN:2}',"from-pstn"));
    // $arrExt[]=new iperfexExtensions("_+1NXXNXXXXXX",new ext_goto('1','${EXTEN:2}',"from-pstn"),1);
    // $arrExt[]=new iperfexExtensions("_[0-9+]./_+1NXXNXXXXXX",new ext_set('CALLERID(number)','${CALLERID(number):2}'),1);
    // $arrExt[]=new iperfexExtensions("_[0-9+]./_NXXNXXXXXX",new ext_goto('1','${EXTEN}',"from-pstn"));
    // $arrExt[]=new iperfexExtensions("_[0-9+]./_+X.",new ext_set('CALLERID(number)','011${CALLERID(number):1}'),"1");
    // $arrExt[]=new iperfexExtensions("_[0-9+]./_011X.",new ext_goto('1','${EXTEN}',"from-pstn"));
    // $arrExt[]=new iperfexExtensions("_[0-9+].",new ext_goto('1','${EXTEN}',"from-pstn"),1);
    // $arrExt[]=new iperfexExtensions("s/_+1NXXNXXXXXX",new ext_set('CALLERID(number)','${CALLERID(number):2}'),1);
    // $arrExt[]=new iperfexExtensions("s/_NXXNXXXXXX",new ext_goto('1','${EXTEN}',"from-pstn"));
    // $arrExt[]=new iperfexExtensions("s/_+X.",new ext_set('CALLERID(number)','011${CALLERID(number):1}'),1);
    // $arrExt[]=new iperfexExtensions("s/_011X.",new ext_goto('1','${EXTEN}',"from-pstn"));
    // $arrExt[]=new iperfexExtensions("s",new ext_goto('1','${EXTEN}',"from-pstn"),1);
    // $contenido .="\n[from-pstn-e164-us]\n";
    // $contenido .="include =>from-pstn-e164-us-custom\n";
    // if(is_array($arrExt)){
        // foreach($arrExt as $extension){
            // if(!is_null($extension) && is_object($extension))
                // $contenido .=$extension->data."\n";
        // }
    // }
    

// /*  ;-------------------------------------------------------------------------------
    // ; from-pstn-to-did
    // ;
    // ; The context is designed for providers who send the DID in the TO: SIP header
    // ; only. The format of this header is:
    // ;
    // ; To: <sip:2125551212@172.31.74.25>
    // ;
    // ; So the DID must be extracted between the sip: and the @, which this does
    // ;
    // [from-pstn-toheader]
    // exten => _.,1,Goto(from-pstn,${CUT(CUT(SIP_HEADER(To),@,1),:,2)},1)
    // ;-------------------------------------------------------------------------------
    // */
    // $arrExt=array();
    // $arrExt[]=new iperfexExtensions("_.",new ext_goto('1','${CUT(CUT(SIP_HEADER(To),@,1),:,2)}',"from-pstn"),1);
    // $contenido .="\n[from-pstn-to-did]\n";
    // $contenido .="include =>from-pstn-to-did-custom\n";
    // if(is_array($arrExt)){
        // foreach($arrExt as $extension){
            // if(!is_null($extension) && is_object($extension))
                // $contenido .=$extension->data."\n";
        // }
    // }
    
    // $arrExt=array();
    // $arrExt[]=new iperfexExtensions("_X.",new ext_set('ORG_CODE',''),"1");
    // $arrExt[]=new iperfexExtensions("_X.",new ext_set('ORG_DOMAIN',''));
    // $arrExt[]=new iperfexExtensions("_X.",new ext_set('ARRAY(ORG_CODE,__ORG_DOMAIN)','${DID_EXISTDID(${EXTEN})}'));
    // $arrExt[]=new iperfexExtensions("_X.",new ext_gotoif('$["${ORG_CODE}"=""]','ext-did-catchall,s,1'));
    // $arrExt[]=new iperfexExtensions("_X.",new ext_noop('Reciving call to organization with domain ${ORG_DOMAIN}'));
    // $arrExt[]=new iperfexExtensions("_X.",new ext_set('CDR(fromout)','1'));
    
    // $arrExt[]=new iperfexExtensions("_X.",new ext_set('CDR(organization_domain)','${ORG_DOMAIN}'));
    // $arrExt[]=new iperfexExtensions("_X.",new ext_goto("1",'${EXTEN}','${ORG_CODE}-from-pstn'));
    // $arrExt[]=new iperfexExtensions("_X.",new ext_macro('${ORG_CODE}-Hangupcall'));
    // $contenido .="\n[ext-did]\n";
    // $contenido .="include =>ext-did-custom\n";
    // if(is_array($arrExt)){
        // foreach($arrExt as $extension){
            // if(!is_null($extension) && is_object($extension))
                // $contenido .=$extension->data."\n";
        // }
    // }
    
    // //contexto ext-did-catchall
    // $arrExt=array();
    // $arrExt[]=new iperfexExtensions("s",new ext_noop('No DID or CID Match'),"1");
    // $arrExt[]=new iperfexExtensions("s",new ext_answer(),"n","a2");
    // $arrExt[]=new iperfexExtensions("s",new ext_wait(2));
    // $arrExt[]=new iperfexExtensions("s",new ext_playback("ss-noservice"));
    // $arrExt[]=new iperfexExtensions("s",new ext_sayalpha('${FROM_DID}'));
    // $arrExt[]=new iperfexExtensions("s",new ext_hangup());
    // $arrExt[]=new iperfexExtensions("_.",new ext_set('__FROM_DID','${EXTEN}'),1);
    // $arrExt[]=new iperfexExtensions("_.",new ext_noop('Received an unknown call with DID set to ${EXTEN}'));
    // $arrExt[]=new iperfexExtensions("_.",new ext_goto('a2','s'));
    // $arrExt[]=new iperfexExtensions("h",new ext_hangup(),1);
    // $contenido .="\n[ext-did-catchall]\n";
    // $contenido .="include =>ext-did-catchall-custom\n";
    // if(is_array($arrExt)){
        // foreach($arrExt as $extension){
            // if(!is_null($extension) && is_object($extension))
                // $contenido .=$extension->data."\n";
        // }
    // }
    
    // // contexto salida-check
    // // se creo para verificar que llamadas realizadas de una compañia a otra compañia
    // // que pertenezcan al mismo servidor no salgan por la truncal
    // // ${ARG1}=ORGANIZATION_CODE
    // // ${ARG2}=ORGANIZATION_DOMAIN
    // // ${ARG3}=DIAL_NUMBER ; numero a marcar por la truncal si añadir el OUTPREFIX
    // // ${ARG4}=TRUNNK_CHANNEL ; 
    // $arrExt=array();
    // $arrExt[]=new iperfexExtensions("s",new ext_set('_REDIRECCIONAR',''),"1");
    // $arrExt[]=new iperfexExtensions("s",new ext_set('ORG_CODE','${ARG1}'));
    // $arrExt[]=new iperfexExtensions("s",new ext_set('_REDIRECCIONAR','${DID_INFODID(${ARG3},${ARG2})}')); 
    // $arrExt[]=new iperfexExtensions("s",new ext_gotoif('$["${REDIRECCIONAR}" = "1"]','indial'));
    // $arrExt[]=new iperfexExtensions("s",new ext_set('outtrunk','continue'));
    // $arrExt[]=new iperfexExtensions("s",new ext_return('${outtrunk}'));
    // // b options sera efectiva en asterisk 11
    // $arrExt[]=new iperfexExtensions("s",new ext_dial('Local/${ARG3}@from-pstn/n','60,${DIAL_TRUNK_OPTIONS}f(${CALLERID(all)})'),"n","indial");
    // $arrExt[]=new iperfexExtensions("s",new ext_noop('TRUNK Dialed with ${DIALSTATUS} HANGUPCAUSE: ${HANGUPCAUSE}'));
    // $arrExt[]=new iperfexExtensions("s",new ext_hangup());
    // $arrExt[]=new iperfexExtensions("h",new ext_macro('${ORG_CODE}-hangupcall'),"1");
    // $contenido .="\n[salida-check]\n";
    // $contenido .="include =>salida-check-custom\n";
    // if(is_array($arrExt)){
        // foreach($arrExt as $extension){
            // if(!is_null($extension) && is_object($extension))
                // $contenido .=$extension->data."\n";
        // }
    // }
    
    // // en asterisk 11 puede ser usado este contexto
    // $arrExt=array();
    // $arrExt[]=new iperfexExtensions("s",new ext_set('CDR(intraforward)','${ARG1}'),"1");
    // $contenido .="\n[intraforward-call]\n";
    // $contenido .="include =>intraforward-call-custom\n";
    // if(is_array($arrExt)){
        // foreach($arrExt as $extension){
            // if(!is_null($extension) && is_object($extension))
                // $contenido .=$extension->data."\n";
        // }
    // }
    
    // // contexto allow-out
    // // este contexto se creo para aegurarnos que solos las organizaciones 
    // // autorizadas por el superadmin podran realizar llamdas a traves de la 
    // // truncal con el id pasado como parametro
    // // ${ARG1}=ORGANIZATION_DOMAIN
    // // ${ARG2}=TRUNK_ID
    // $arrExt=array();
    // $arrExt[]=new iperfexExtensions("s",new ext_noop('TRUNK ${OUT_${ARG2}} Organization: ${ARG1}'),"1");
    // $arrExt[]=new iperfexExtensions("s",new ext_set('ORG_PERMIT',''));
    // $arrExt[]=new iperfexExtensions("s",new ext_set('ORG_PERMIT','${TRUNK_INFOORG(${ARG1},${ARG2})}'));
    // $arrExt[]=new iperfexExtensions("s",new ext_execif('$["${ORG_PERMIT}"!="1"]','Set','ORG_PERMIT=noallow'));
    // $arrExt[]=new iperfexExtensions("s",new ext_return('${ORG_PERMIT}'));
    // $contenido .="\n[allow-out]\n";
    // $contenido .="include =>allow-out-custom\n";
    // if(is_array($arrExt)){
        // foreach($arrExt as $extension){
            // if(!is_null($extension) && is_object($extension))
                // $contenido .=$extension->data."\n";
        // }
    // }
    
    // //contexto from-analog
    // //a este contexto llegan la llamadas provenientes de los puertos analogicos
    // $arrExt=array();
    // $arrExt[]=new iperfexExtensions("_X.",new ext_setvar("DID",'${EXTEN}'),"1");
    // $arrExt[]=new iperfexExtensions("_X.",new ext_goto("1",'s'));
    // $arrExt[]=new iperfexExtensions("s",new ext_noop('Entering from-analog with DID == ${DID}'),"1");
    // $arrExt[]=new iperfexExtensions("s",new ext_ringing());
    // $arrExt[]=new iperfexExtensions("s",new ext_setvar("DID",'${IF($["${DID}"= "]?s:${DID})}'));
    // $arrExt[]=new iperfexExtensions("s",new ext_noop('DID is now ${DID}'));
    // $arrExt[]=new iperfexExtensions("s",new ext_gotoif('$["${CHANNEL:0:5}"="DAHDI"]','dahdiok','checkzap'));
    // $arrExt[]=new iperfexExtensions("s",new ext_gotoif('$["${CHANNEL:0:3}"="Zap"]','zapok','neither'),"n","checkzap");
    // $arrExt[]=new iperfexExtensions("s",new ext_gosub(1,'${DID}'),"n","neither");
    // $arrExt[]=new iperfexExtensions("s",new ext_hangup());
    // $arrExt[]=new iperfexExtensions("s",new ext_noop('Is a DAHDI Channel'),"n","dahdiok");
    // $arrExt[]=new iperfexExtensions("s",new ext_setvar("CHAN",'${CHANNEL:6}'));
    // $arrExt[]=new iperfexExtensions("s",new ext_setvar("CHAN",'${CUT(CHAN,-,1)}'));
    // $arrExt[]=new iperfexExtensions("s",new ext_macro('analog-did','${CHAN}'));
    // $arrExt[]=new iperfexExtensions("s",new ext_noop('Returned from Macro analog-did'));
    // $arrExt[]=new iperfexExtensions("s",new ext_goto(1,'${DID}',"from-pstn"));
    // $arrExt[]=new iperfexExtensions("s",new ext_noop('Is a Zaptel Channel'),"n",'zapok');
    // $arrExt[]=new iperfexExtensions("s",new ext_setvar("CHAN",'${CHANNEL:4}'));
    // $arrExt[]=new iperfexExtensions("s",new ext_setvar("CHAN",'${CUT(CHAN,-,1)}'));
    // $arrExt[]=new iperfexExtensions("s",new ext_macro('analog-did','${CHAN}'));
    // $arrExt[]=new iperfexExtensions("s",new ext_noop('Returned from Macro analog-did'));
    // $arrExt[]=new iperfexExtensions("s",new ext_goto(1,'${DID}',"from-pstn"));
    
    // $contenido .="\n[from-analog]\n";
    // $contenido .="include =>from-analog-custom\n";
    // if(is_array($arrExt)){
        // foreach($arrExt as $extension){
            // if(!is_null($extension) && is_object($extension))
                // $contenido .=$extension->data."\n";
        // }
    // }
    
    // // macro analog-did
    // // este contexto se utiliza para setear un did a las llamadas provenientes desde puertos analogicos
    // // en contexto de llegada de esos puertos debe ser from analog
    // // ${ARG1}=PORT_ID
    // $arrExt=array();
    // $arrExt[]=new iperfexExtensions("s",new ext_noop('Entering to macro analog-did from port_id: ${ARG1} with DID : ${DID}'),"1");
    // $arrExt[]=new iperfexExtensions("s",new ext_set('RETDID',''));
    // $arrExt[]=new iperfexExtensions("s",new ext_set('RETDID','${DID_ANALOGDID(${ARG1},${ARG2})}'));
    // $arrExt[]=new iperfexExtensions("s",new ext_execif('$["${RETDID}"=""]','MacroExit'));
    // $arrExt[]=new iperfexExtensions("s",new ext_setvar("__FROM_DID",'${RETDID}'));
    // $arrExt[]=new iperfexExtensions("s",new ext_goto("1",'${RETDID}','from-pstn'));
    // $contenido .="\n[macro-analog-did]\n";
    // $contenido .="include =>macro-analog-did-custom\n";
    // if(is_array($arrExt)){
        // foreach($arrExt as $extension){
            // if(!is_null($extension) && is_object($extension))
                // $contenido .=$extension->data."\n";
        // }
    // }
        
    // //im-sip
    // //useado para enviar mensajes de chat
    // //ARG1 -> ORG_CODE
    // //ARG2 -> DEVICE a que se le envia el mensaje
    // $arrExt=array();
    // $arrExt[]=new iperfexExtensions("im",new ext_noop('Start SIP MESSAGE to ${MESSAGE(to)} from ${MESSAGE(from)}'),"1");
    // //si no se envia la lista de dispositivos alos cuales enviar el mensaje no se puede continuar
    // $arrExt[]=new iperfexExtensions("im",new ext_execif('$["${ARG2}" = ""]','Return'));
    // $arrExt[]=new iperfexExtensions("im",new ext_set('FROM_PEER','${CUT(MESSAGE(from),:,2)}'));
    // $arrExt[]=new iperfexExtensions("im",new ext_set('FROM_PEER','${CUT(FROM_PEER,@,1)}'));
    // //obtenemos el alias del del device dentro del sistema, si no llegase a tener entonces usamos solamente el nombre del dispositivo
    // $arrExt[]=new iperfexExtensions("im",new ext_set('FROM_PEER_ALIAS','${DB(DEVICE/${ARG1}/${FROM_PEER}/alias)}'));
    // $arrExt[]=new iperfexExtensions("im",new ext_execif('$["${FROM_PEER_ALIAS}" = ""]','SET','FROM_PEER_ALIAS=${FROM_PEER}'));
    // $arrExt[]=new iperfexExtensions("im",new ext_set('FROM_PEER_NAME','${SIPPEER(${FROM_PEER},callerid_name)}'));
    // $arrExt[]=new iperfexExtensions("im",new ext_set('TO_PEER_ORG','${CUT(MESSAGE(to),:,2)}'));
    // $arrExt[]=new iperfexExtensions("im",new ext_set('TO_PEER_ORG','${CUT(TO_PEER_ORG,@,1)}'));
    
    // $arrExt[]=new iperfexExtensions("im",new ext_set('GROUP_MSG_STATUS','FAIL'));
    // $arrExt[]=new iperfexExtensions("im",new ext_while('$["${SET(TO_PEER=${SHIFT(ARG2,&)})}" != ""]'));
    // $arrExt[]=new iperfexExtensions("im",new ext_set('TO_PEER_NAME','${SIPPEER(${TO_PEER},callerid_name)}'));
    // $arrExt[]=new iperfexExtensions("im",new ext_set('FROM_REPLACE','${STRREPLACE(MESSAGE(from),${FROM_PEER},${FROM_PEER_ALIAS})}'));
    // $arrExt[]=new iperfexExtensions("im",new ext_messageSend('sip:${TO_PEER}','${FROM_REPLACE}'));
    // $arrExt[]=new iperfexExtensions("im",new ext_noop('Send status is ${MESSAGE_SEND_STATUS}'));
    // $arrExt[]=new iperfexExtensions("im",new ext_execif('$["${MESSAGE_SEND_STATUS}" = "SUCCESS"]','SET','GROUP_MSG_STATUS=SUCCESS'));
    // $arrExt[]=new iperfexExtensions("im",new extension('EndWhile'));
    // $arrExt[]=new iperfexExtensions("im",new ext_gotoif('$["${GROUP_MSG_STATUS}"!="SUCCESS"]','sendfailedmsg'));
    // $arrExt[]=new iperfexExtensions("im",new ext_hangup());
    // $arrExt[]=new iperfexExtensions("im",new ext_noop('Sending error to user'),"n",'sendfailedmsg');
    // $arrExt[]=new iperfexExtensions("im",new ext_set('MESSAGE(body)','[${STRFTIME(${EPOCH},,%d/%m/%Y-%H:%M:%S)}] Your message to ${TO_PEER_NAME} has failed. Sending when available'));
    // $arrExt[]=new iperfexExtensions("im",new ext_messageSend('sip:${FROM_PEER}','"${TO_PEER_NAME}" <${MESSAGE(to)}>'));
    // $arrExt[]=new iperfexExtensions("im",new ext_noop('Send status is ${MESSAGE_SEND_STATUS}'));
    // $arrExt[]=new iperfexExtensions("im",new ext_hangup());
    // $contenido .="\n[im-sip]\n";
    // $contenido .="include =>im-sip-custom\n";
    // if(is_array($arrExt)){
        // foreach($arrExt as $extension){
            // if(!is_null($extension) && is_object($extension))
                // $contenido .=$extension->data."\n";
        // }
    // }
    
    // if(file_put_contents("$file", $contenido)===false){
        // $this->errMsg="ERR: Couldn't be written file\n";
        // return false;
    // }else{
        // $this->changeFilePermission($file);
    // }
    // return true;
// }

// function changeFilePermission($file, $newmask = 0664)
// {
	// $oldmask = umask(0);
	// chown($file,"asterisk");
	// chgrp($file,"asterisk");
	// chmod($file, $newmask);
	// umask($oldmask);
	// return true;
// }


    private function assignResource($idOrganization){
        $rInsert=true;
        $recurso=array();
        $query="INSERT INTO organization_resource (id_organization, id_resource) ".
                    "SELECT ?,re.id FROM acl_resource re WHERE re.organization_access='yes'";
        $result=$this->_DB->genQuery($query,array($idOrganization));
        if($result==false){
            $this->errMsg="An error has occurred trying to assign resources to the organization. ".$this->_DB->errMsg;
            return false;
        }else{
            //creamos los grupos de la organizacion y asignamos los permisos por default de estos grupos
            if($this->createAllGroupOrganization($idOrganization)){
                return true;
            }else
                return false;
        }
    }

    private function createAllGroupOrganization($idOrganization){
        $gExito = false;
        $pACL = new iperfexACL($this->_DB);

        //creamos los grupos 
        $query="INSERT INTO acl_group (description,name,id_organization) ".
                "SELECT description,name,? FROM acl_group WHERE id_organization=1 AND name IN ('administrator', 'supervisor', 'end_user')";
        $exito=$this->_DB->genQuery($query,array($idOrganization));
        if($exito==false){
            $this->errMsg=_tr("An error has ocurred trying to create organizaion's group");
            return false;
        }
        
        //obtenemos los grupos recien insertados a la organizacion
        $grpOrga=$pACL->getGroups(null,$idOrganization);
        if($grpOrga==false){
            $this->errMsg=_tr("An error has ocurred trying to create organizaion's group");
            return false;
        }
        
        //asignamos los recursos a los grupos recien creados
        //la asignacion de recursos se obtiene de la asignacion que existe a los grupos 
        // 'administrator', 'supervisor', 'end_user' de la organizacion por default
        // que tiene id 1. 
        //Los grupos antes mencionados no deberian ser borrados del sistema
        $query="INSERT INTO group_resource_action (id_group,id_resource_action) " .
                    "SELECT ?,gract.id_resource_action FROM ".
                        "(SELECT or1.id_resource FROM organization_resource or1 
                            WHERE or1.id_organization=?) as or_re ".
                    "JOIN ".
                        "(SELECT gr.id_resource_action,ract.id_resource FROM resource_action ract 
                            JOIN group_resource_action gr ON ract.id=gr.id_resource_action 
                            JOIN acl_group g ON g.id=gr.id_group 
                                WHERE g.name=? AND g.id_organization=1) as gract ".
                    "ON or_re.id_resource=gract.id_resource";
        foreach($grpOrga as $value){
            //$value[0]=id
            //$value[1]=name
            $result=$this->_DB->genQuery($query,array($value[0],$idOrganization,$value[1]));
            if($result==false){
                $this->errMsg = _tr("An error has ocurred trying to assign group resources");
                return false;
            }
        }
        return true;
    }
    

    function createOrganization($name,$domain,$country,$city,$address,$country_code,$area_code,$max_num_user,$admin_password, $email_contact, $channels)
    {
        global $arrConf;
        $pEmail=new iperfexEmail($this->_DB);
        $flag=false;
        $error_domain=$error="";
        $address=isset($address)? $address : "";
        //contrumios la nueva entidad
        //antes que todo debemos validar que no exista el dominio que queremos crear en el sistema
        $resOrgz=$this->getOrganizationByDomain_Name($domain);
        if(array($resOrgz) && count($resOrgz)==0){
            $this->_DB->beginTransaction();
            //obtenemos el pbxcode de la organizacion que sera usado como unico identificador dentro de asterisk
            //se valida que el dominio de la organizacion tenga un formato valido dentro de la funcion getNewPBXCode
            $pbxcode = $domain;
            /*$pbxcode=$this->getNewPBXCode($domain);
            if(!$pbxcode){
                // El error fue escrito dentro de la función getNewPBXCode
                return false;
            }*/
            
            //obtenemos el idcode de la organizacion. Este es unico en el sistema y no puede existir o haber 
            //existido otra organizacion dentro del sistema con el mismo codgo
            $idcode=$this->getNewIDCode();

            //creamos la organizacion dentro del sistema
            if (!$this->_DB->genQuery(
                'INSERT INTO organization (name,domain,code,idcode,country,city,address,state, email_contact) '.
                'VALUES (?,?,?,?,?,?,?,?,?)',
                array($name, $domain, $pbxcode, $idcode, $country, $city, $address, 'active', $email_contact))) {
                $this->_DB->rollBack();
                $this->errMsg = $this->_DB->errMsg;
            }else{
                if(!$this->orgHistoryRegister("create",$idcode))
                    return false;
                if(!$this->registerEvent("create",$idcode))
                    return false;
                //obtenemos la organizacion recien creada
                $resultOrgz=$this->getOrganizationByDomain_Name($domain);
                //seteamos los valores de organization_properties por default tomados de la organizacion 1
                $proExito=$this->setDefaultOrganizationProp($resultOrgz['id']);
                //seteamos las demas propiedades de la organization
                $cExito=$this->setOrganizationProp($resultOrgz['id'],"country_code",$country_code,"fax");
                $aExito=$this->setOrganizationProp($resultOrgz['id'],"area_code",$area_code,"fax");
                $cExito=$this->setOrganizationProp($resultOrgz['id'],"max_num_user",$max_num_user,"limit");
                $chExito=$this->setOrganizationProp($resultOrgz['id'],"channels",$channels,"dialer");
                
                if($proExito && $cExito && $aExito){
                    //se asignan los recursos a la organizacion
                    //se crean los grupos
                    //se asignan los recursos a los grupos
                    $gExito=$this->assignResource($resultOrgz['id']);
                    if($gExito==false){
                        $error=$this->errMsg;
                        $this->_DB->rollBack();
                    }
                    else{
                        //procedo a crear el nuevo dominio
                       if(!($this->createDomain($domain))){
                           $error=$this->errMsg;
                           //no se puede crear el dominio
                           $this->_DB->rollBack(); //desasemos los cambios en la base
                       }else{
                            //creamos al usuario administrador de las organizacion
                            $user=$this->createAdminUserOrg($email_contact,$resultOrgz['id'],$domain,$name,$admin_password,$country_code,$area_code,true);
                            if($user){
								// $this->createOrganizationAsterisk($domain);
                                $this->_DB->commit();
                                return true;
                            }else{
                                $error=$this->errMsg;
                                // print"<pre>";print_r($error);print"</pre>";die;
                                //revertimos los cambios realizados
                                $this->_DB->rollBack(); //desasemos los cambios en la base
                            }
                       }
                    }
                }else{
                    $error=_tr("An Error has ocurred to set organization properties").$this->errMsg;
                    $this->_DB->rollBack();
                }
            }
        }else{
            $error=_tr("Already exist other organization with the same domain");
        }

        $this->errMsg=$error;

        return $flag;
    }
	
	
    
    //esta funcion es usada para crear al usuario administrado de la organizacion 
    //una vez que la organizacion ha sido creada
    private function createAdminUserOrg($email_contact,$idOrg,$domain,$CompanyName,$password,$country_code,$area_code){
        $md5password=md5($password);
        $pACL=new iperfexACL($this->_DB);
        $idGrupo=$pACL->getIdGroup("administrator",$idOrg);
        $exito=$this->createUserOrganization($idOrg,"admin", "Administrator", $md5password, $password, $idGrupo, "100", "200",$country_code, $area_code, "200", "admin", $lastid,false);
        if($exito){
            //mostramos el mensaje para crear los archivos de configuracion dentro de asterisk
         
           // $pAstConf->setReloadDialplan($domain,true);
//            //enviamos un email a la nueva organizacion creada
           // if($sendEmail==true){
               if(!$this->sendEmail($password,$CompanyName,$domain,$email_contact,"create",$error)){
                   $this->errMsg="<br />"._tr("Mail to new admin user couldn't be sent. ").$error;
               }else
                   $this->errMsg="<br />"._tr("A email with the password for admin@$domain user has been sent to ").$email_contact;
           // }
            return true;
        }else{
            //mensaje en caso de que no se pueda crear el usuario administrador de la organizaion
            $this->errMsg="<br />Error: ".$this->errMsg;
        }
        return false;
    }

    //a una entidad no se le puede editar el dominio
    function setOrganization($id,$name,$country,$city,$address,$country_code,$area_code,$quota,$max_num_user,$max_num_exten,$max_num_queues,$userLevel1,$channels)
    {
        if (!preg_match('/^[[:digit:]]+$/', "$id") || $id=="1") {
            $this->errMsg = "Invalid ID Organizaion";
            return false;
        }

        $query="SELECT domain from organization where id=?";
        $res=$this->_DB->getFirstRowQuery($query,true,array($id));
        if($res==false){
            $this->errMsg=_tr("Organization doesn't exist. ").$this->_DB->errMsg;
            return false;
        }
        $domain=$res["domain"];

        if($userLevel1=="superadmin"){
            $numUser=$this->getNumUserByOrganization($id);
            if($max_num_user!=0){
                if($max_num_user<$numUser){
                    $this->errMsg=_tr("Max. # of User Accounts")._tr(" must be greater than current numbers of users "). "($numUser)";
                    return false;
                }
            }
            //obtenemos el total de extensiones y colas creadas
            if($max_num_exten!=0){
                $query="SELECT count(id) from extension where organization_domain=?";
                $res=$this->_DB->getFirstRowQuery($query,false,array($domain));
                if($max_num_exten<$res[0]){
                    $this->errMsg=_tr("Max. # of exten")._tr(" must be greater than current numbers of exten ")."($res[0])";
                    return false;
                }
            }
            if($max_num_queues!=0){
                $query="SELECT count(name) from extension where organization_domain=?";
                $res=$this->_DB->getFirstRowQuery($query,false,array($domain));
                if($res!==false){
                    if($max_num_queues<$res[0]){
                        $this->errMsg=_tr("Max. # of queues")._tr(" must be greater than current numbers of queues "). "($res[0])";
                        return false;
                    }    
                }
            }
        }

        $flag=false;$cExito=false;$aExito=false;$qExito=false;
        $address=isset($address)? $address : "";
        $query="UPDATE organization set name=?,country=?,city=?,address=? where id=?;";
        $arr_params=array($name,$country,$city,$address,$id);
		$this->_DB->beginTransaction();
        $result=$this->_DB->genQuery($query,$arr_params);
        if($result==FALSE){
            $this->errMsg=$this->_DB->errMsg;
            $this->_DB->rollBack();
        }else{
            $cExito=$this->setOrganizationProp($id,"country_code",$country_code,"fax");
            $aExito=$this->setOrganizationProp($id,"area_code",$area_code,"fax");
            $qExito=$this->setOrganizationProp($id,"email_quota",$quota,"email");
            
            if($userLevel1=="superadmin"){
                $muExito=$this->setOrganizationProp($id,"max_num_user",$max_num_user,"limit");
                //$meExito=$this->setOrganizationProp($id,"max_num_exten",$max_num_exten,"limit");
                //$mqExito=$this->setOrganizationProp($id,"max_num_queues",$max_num_queues,"limit");
            }else{
                $muExito=$meExito=$mqExito=true;
            }
            
            $chExito=$this->setOrganizationProp($id,"channels",$channels,"dialer");

            if($cExito!=false && $aExito!=false && $qExito!=false && $muExito!=false /*&& $meExito!=false && $mqExito!=false*/){
                $flag=true;
                $this->_DB->commit();
            }else{
                $this->_DB->rollBack();
            }
        }
        return $flag;
    }
    
    /**
        funcion que elimina de iperfex un conjunto de organizacion
        @param $arrOrg array arreglo unidimensional que contiene el id de
                             las organizaciones que se van a eliminar
    */
    function deleteOrganization($arrOrg){
        if(!is_array($arrOrg)){
            $arrOrg=array($arrOrg);
        }
        
        $pEmail=new iperfexEmail($this->_DB);
        $flag=true;
        $arrDelOrg=$arrIdCode=array();
        $exito=$error="";
        
        foreach($arrOrg as $idOrg){
            if(preg_match("/^[0-9]+$/",$idOrg) && $idOrg!=1){
                //se borra tosod los registros de la organizacion de la base de datos
                //se elimina los correos y los faxes de los usuarios
                if($this->deleteOrganizationDB($idOrg,$idcode)){
                    $arrIdCode[]=$idcode;
                    $arrDelOrg[]=$this->errMsg;
                }else{
                    $error .=$this->errMsg."<br />";
                    $flag=false;
                }
            }
        }
        
        if(count($arrDelOrg)!=0){
            $exito=_tr("The organizations with the followings domains where deleted from database: ").implode(",",$arrDelOrg)."<br /><br />";
        }else{
            //ninguna de las organizaciones dada pudo ser elminada
            //regresamos y mostramos los errores
            $this->errMsg=$error;
            return false;
        }
        
        //***************************************************
        //reescribimos los archivos extensions.conf, extensions_globals.conf chan_dahdi_additional.conf con las configuraciones correctas
//        $astError="";
//      
//        if(!$pAstConf->writeExtesionConfFile()){
//            $astError=_tr("Error has ocurred to try rewriting asterisk configs file. ").$pAstConf->errMsg."<br />";
//            $flag=false;
//        }
//
//        $sComando = "/usr/bin/iperfex-helper asteriskconfig createFileDahdiChannelAdd 2>&1";
//        $output = $ret = NULL;
//        exec($sComando, $output, $ret);
//        if ($ret != 0){
//            $astError .=_tr("Error has ocurred to try rewriting asterisk config file extensions_additional_dahdi.conf").implode('', $output)."<br />";
//            $flag=false;
//        }
//        if($astError!="")
//            $astError ="<br />".$astError;
            
        //***************************************************
        
        //***************************************************
        //reescribimos archivos /var/spool/hylafax/faxDispatch y /etc/init/iperfex_fax
        //estos manejan los envios de los faxes al mail y la creacion de la lineas tty para los modems
        //***************************************************
        $fError="";
        // if(!$pFax->writeFilesFax()){
            // $fError=_tr("Error has ocurred to try rewriting fax config file. ").$pFax->errMsg."<br />";
            // $flag=false;
        // }
        //***************************************************
        
        //***************************************************
        //reescribimos el archivo /etc/postfix/main.cf que contiene los dominios creados en el sistema
        if(!$pEmail->writePostfixMain()){
            $fError=_tr("Error has ocurred to try rewriting email config file. ").$pEmail->errMsg."<br />";
            $flag=false;
        }
        //***************************************************
        
        //********************************************************************
        //elminamos los archivos de audio,grabaciones,faxes, etc relacionados con la organizacion
        // $dError="";
        // foreach($arrIdCode as $idcode){
            // if(!$this->deleteFilesOrganization($idcode)){
                // $dError .= $this->errMsg;
                // $flag=false;
            // }
        // }
        // if($dError!="")
            // $dError = "<br />"._tr("Error has ocurred to try delete organizations data:")."<br />".$dError;
        //***************************************************
        
        //***************************************************
        //recargamos lo servicios de fax,email y asterisk para que los cambios hechos en los archivos de 
        //configuracion tomen efecto
//        $reError="";
//        if(!$this->reloadServices()){
//            $reError .= "<br />"._tr("Error has ocurred to try reloading Iperfex services:")."<br />";
//            $reError .=$this->errMsg;
//            $flag=false;
//        }
        //***************************************************
        $this->errMsg=$exito.$error.$fError.$dError;
        return $flag;
    }
    
   // private function deleteFilesOrganization($idcode){
       // global $arrConf;
    // if(!preg_match("/^[[:alnum:]]+$/",$idcode)){
         // $this->errMsg.="ERR: Invalid Organization.\n";
		 // return false;
    // }

    // $pathlib="/var/lib/asterisk/";
    // $pathspool="/var/spool/asterisk/";
    // $pathiperfexdir="/var/www/iperfexdir/";
    // $pathAsterisk="/etc/asterisk/";
    
    // $arrDir[] = array($pathspool."monitor/",false,"monitor"); //grabaciones llamadas 
    // $arrDir[] = array($pathspool."meetme/",false,"meetme"); //grabaciones llamadas meetme
    // $arrDir[] = array($pathspool."tmp/",false,"tmp");
    // $arrDir[] = array($pathlib."sounds/",true,"sounds"); //recordings
    // $arrDir[] = array($pathlib."moh/",true,"moh"); //musica en espera
    // $arrDir[] = array($pathAsterisk."organizations/",false,"asteriskconfs"); //directorio dentro de asterisk que contiene los archivos de configuracion de la organizacion
    
    // $arrDir[]=array($pathiperfexdir."faxdocs/",true,"faxdocs"); //faxes recibidos y enviados
    // $arrDir[]=array($pathiperfexdir."backup/",true,"backup"); //backup del sistema
    
    // $pDB = $this->_DB;
    // //obtenemos los datos de la organizacion eliminada de la tabla org_history_register
    // $query="SELECT org_code,org_domain FROM org_history_register WHERE org_idcode = ?";
    // $orgData=$pDB->getFirstRowQuery($query,true,array($idcode));
    // if($orgData==false){
        // $this->errMsg.="Err: Couldn't get information about organization with idcode: $idcode";
		// return false;
    // }else{
        // $code=$orgData["org_code"];
        // $domain=$orgData["org_domain"];
    // }
    
    // //comprobamos que la organizacion ya haya sido borrada de la base
    // $query="SELECT 1 FROM organization WHERE idcode=?";
    // $exist=$pDB->getFirstRowQuery($query,true,array($idcode));
    // if(count($exist)>0){
        // $this->errMsg.="Err: Action can be done because this organization hasn't be deleted from database. Domain: $domain";
		// return false;
    // }
    
    // $error="";
    // //carpeta que contendra la data de la organizacion que no pudo ser eliminada
    // $repOrg=$pathiperfexdir."oldOrganizations/$idcode";
    // if(!is_dir($pathiperfexdir."oldOrganizations")){
        // mkdir($pathiperfexdir."oldOrganizations");
        // chmod($pathiperfexdir."oldOrganizations", 0755);
    // }else{
        // //comprobamos permisos de escritura del directorio
        // if(!is_writable($pathiperfexdir."oldOrganizations")){
            // chmod($pathiperfexdir."oldOrganizations", 0755);
        // }
    // }
    // if(!is_dir($repOrg)){
        // mkdir($repOrg);
        // chmod($repOrg, 0755);
    // }
    
    // foreach($arrDir as $value){
        // if(is_dir($value["0"].$domain)){
            // if(!$this->_delTree($value["0"].$domain,$value["1"])){
                // rename($value["0"].$domain,"$repOrg/$value[2]_$domain");
                // $error .="\nFailed to delete: ".$value["0"].$domain;
            // }
        // }
    // }
    
    // //borramos los voicemail de la organizacion
    // $vmdirs = glob($pathspool."voicemail/$code*");
    // foreach($vmdirs as $file){
        // if(!_delTree($file,true)){
            // if(!is_dir("$repOrg/voicemail"))
                // mkdir("$repOrg/voicemail");
            // $nfile=strpos($pathspool."voicemail",$file);
            // $error .="\nFailed to delete voicemail directory: $file";
            
            // if(!rename($file,"$repOrg/voicemail/$nfile"))
                // $error .="\nFailed to move voicemail directory: $file";
        // }
    // }
    
    // if($error=="" && is_dir($repOrg)){
        // rmdir($repOrg);
    // }
    
    // if($error!=""){
        // $this->errMsg.= $error;
		// return false;
    // }else
        // return true;
   // }
    
// //    private function cleanFailCreation($domain){
// //        $sComando = "/usr/bin/iperfex-helper asteriskconfig cleanFailCreation ".
// //            escapeshellarg($domain)." 2>&1";
// //        $output = $ret = NULL;
// //        exec($sComando, $output, $ret);
// //        if ($ret != 0){
// //            $this->errMsg = implode('', $output);
// //            return false;
// //        }else
// //            return true;
// //    }

function _delTree($dir,$callback=false) {
    $files = array_diff(scandir($dir), array('.','..')); 
    foreach ($files as $file) {
        if(is_dir("$dir/$file")){
            if($callback)
                $this->_delTree("$dir/$file",$callback);
        }else{
            unlink("$dir/$file");
        }
    } 
    return rmdir($dir); 
}

    private function deleteOrganizationDB($id,&$idcode){
		$dGroup=true;
		$pACL=new iperfexACL($this->_DB);
		$error="";
        
        if(!preg_match("/^[0-9]+$/",$id)){
            $this->errMsg=_tr("Inavlid Organization");
            return false;
        }elseif($id==1){
            //la organization con id 1 corresponde a la organizacion que viene por default en asterisk
            //esta no puede ser borrada
            $this->errMsg=_tr("Inavlid Organization");
            return false;
        }
        
        $numUsers=$this->getNumUserByOrganization($id);
        $arrOrgz=$this->getOrganizationById($id);

        if(is_array($arrOrgz) && count($arrOrgz)>0){
            $name=$arrOrgz['name'];
            $domain=$arrOrgz['domain'];
			$code=$arrOrgz['code'];
			$idcode=$arrOrgz['idcode'];
			$error=_tr("Organization domain: ")."$domain Err:";
            if($numUsers===false){ //ahi un error en la conexion
                $this->errMsg = $error."ct".$this->_DB->errMsg;
				return false;
            }else{
                if($arrOrgz['state']!="terminate"){
                    $this->errMsg =$error._tr("Organization state != 'Terminate'");
                    return false;
                }
                
                $this->_DB->beginTransaction();
                
                //registramos en el servidor que la organizacion ha sido borrada
                if(!$this->orgHistoryRegister("delete", $arrOrgz['idcode'])){
                    $this->errMsg =$error.$this->errMsg;
                    $this->_DB->rollBack();
                    return false;
                }
                
                //registramos en el servidor que la organizacion ha sido borrada
                if(!$this->registerEvent("delete", $arrOrgz['idcode'])){
                    $this->errMsg =$error.$this->errMsg;
                    $this->_DB->rollBack();
                    return false;
                }
                
                // //borramos los archivos del configuracion de faxes de los usuarios pertenecientes a la organizacion
                // $bExito =$this->deleteFaxsByOrg($id);
                // if (!$bExito){
                    // $this->errMsg=$error._tr("Faxes couldn't be deleted.")." ".$this->errMsg;
                    // $this->_DB->rollBack();
                    // return false;
                // }
                //borramos la organizacion de asterisk
              
               //TODO: setear backup de astDB de la organizaiona ntes de proseguir para
               //poder restaurar estos valores en caso de que algo salga mal
               // if(!$pAstConf->deleteOrganizationPBX($domain,$code)){
                   // $this->errMsg .=$error.$pAstConf->errMsg." ".$this->errMsg;
                   // $this->_DB->rollBack();
                   // return false;
               // }

               // se borra la organización en kamailio
               // if (!$this->_DB->genQuery(
                   // 'DELETE FROM kamailio.domain WHERE domain = ?',
                   // array($domain))) {

                   // $this->errMsg =$error.$this->_DB->errMsg;
                   // $this->_DB->rollBack();
                   // return false;
               // }
                
                //borramos la organization
                //la base esta en mysql y todas las tablas relacionadas a la organizacion
                //tiene referencia a la tabla organization y tienen un constraint delete cascade
                $query="DELETE FROM organization WHERE id = ?";
                $result=$this->_DB->genQuery($query,array($id));
                if($result==FALSE){ //no se puede eliminar la organizacion
                    $this->errMsg =$error.$this->_DB->errMsg;
                    $this->_DB->rollBack();
                    return false;
                }
                
                //borramos los buzones de correo de los usuarios pertencientes a la organizacion
                //esto se hace al ultimo porque en caso de que algo salga mal no tener que restaurar lso correos
                // $bExito = $this->deleteAccountByDomain($domain);
                // if (!$bExito){
                    // $this->errMsg=_tr("Mailbox couldn't be deleted.")." ".$this->errMsg;
                    // $this->_DB->rollBack();
                    // return false;
                // }else{
                    $this->_DB->commit();
                    $this->errMsg .=$domain; //regresa el dominio de la organizacion que se elimino
                    return true;
                // }
            }
		}else{
			$this->errMsg=_tr("Organization doesn't exist. Id: ").$id;
			return false;
		}
    }
    
    /**
    * Procedimiento que elimina todos los faxes asociados con una organizacion
    * recibe como parametros el id de la organizacion
    *
    * @return bool VERDADERO en caso de éxito, FALSO en error
    */
//    private function deleteFaxsByOrg($idOrg)
//    {
//        if(!preg_match("/^[0-9]+$/",$idOrg)){
//            $this->errMsg=_tr("Invalid Organization");
//            return false;
//        }
//
//        $sComando = '/usr/bin/iperfex-helper faxconfig deleteFaxsByOrg '.escapeshellarg($idOrg).'  2>&1';
//        $output = $ret = NULL;
//        exec($sComando, $output, $ret);
//        if ($ret != 0) {
//            $this->errMsg = implode('', $output);
//            return FALSE;
//        }
//        return TRUE;
//    }
    
    //*****Email section - Esatas funciones son usadas dentro de esta libreria********
    //para crear o eliminar los dominios al momento de crear o elimanr una organizacion
    //respectivamente
    /**
    * Procedimiento que crea un dominio dentro del sistema
    * esta funcion solo debe ser llamada al momento de crear una organizacion
    *
    * @param string    $domain_name       nombre para el dominio
    * @return bool     VERDADERO si el dominio se crea correctamente, FALSO en error
    */
    private function createDomain($domain){
        if(!preg_match("/^(([[:alnum:]-]+)\.)+([[:alnum:]])+$/", $domain)){
            $error=_tr("Invalid domain format");
            return false;
        }
        
        // $sComando = '/usr/bin/iperfex-helper email_account --createdomain '.
            // escapeshellarg($domain).' 2>&1';
        // exec($sComando, $output, $retval);
        // if ($retval != 0) {
            // foreach ($output as $s) {
                // $regs = NULL;
                // if (preg_match('/^ERR: (.+)$/', trim($s), $regs)) {
                    // $this->errMsg = $regs[1];
                // }
            // }
            // if ($this->errMsg == '')
                // $this->errMsg = implode('<br/>', $output);
            // return FALSE;
        // }
        // return TRUE;
		
		$sNewDomain = $domain;
		if (is_null($sNewDomain)) {
			$this->errMsg = "ERR: --createdomain: no domain specified.\n";
			return FALSE;
		}
		if (!preg_match("/^(([[:alnum:]-]+)\.)+([[:alnum:]])+$/", $sNewDomain)) {
			$this->errMsg = "ERR: --createdomain: invalid domain.\n";
			return FALSE;
		}

		// Check for existing domain,
		try {
			$domainList = $this->_DB->getFirstRowQuery(
            'SELECT 1 FROM organization WHERE domain = ?',
            true, array($sNewDomain));
			if (count($domainList[1]) > 0) {
				$this->errMsg = "ERR: Domain name already exists\n";
				return FALSE;
			}
		} catch (PDOException $e) {
			$this->errMsg = "ERR: failed to check domain - ".$e->getMessage()."\n";
			return FALSE;
		}

		// Add the new domain to the required key in main.cf
		$this->add_domain_postfix($sNewDomain, TRUE);

		return TRUE;
    }
	
	function add_domain_postfix($sDomain)
{
    $sDomainKey = 'virtual_mailbox_domains';
    $postfixConf = file('/etc/postfix/main.cf');
    if ($postfixConf === FALSE) {
        $this->errMsg = "ERR: failed to load /etc/postfix/main.cf for domain update\n";
    }
    $bUpdated = FALSE;
    $bKeyExists = FALSE;
    foreach (array_keys($postfixConf) as $i) {
        $regs = NULL;
        if (preg_match('/^(\w+)\s*=\s*(.*)/', rtrim($postfixConf[$i]), $regs)) {
            if ($regs[1] == $sDomainKey) {
                $bKeyExists = TRUE;
                $oldDomainList = array_unique(preg_split('/,\s*/', $regs[2]));

                $newDomainList =  array_unique(array_merge($oldDomainList, array($sDomain)));

                $postfixConf[$i] = $sDomainKey.' = '.implode(',', $newDomainList)."\n";
                $bUpdated = (count($oldDomainList) != count($newDomainList));
            }
        }
    }
    if (!$bKeyExists) {
        $postfixConf[] = "$sDomainKey = $sDomain\n";
        $bUpdated = TRUE;
    }

    if ($bUpdated) {
        if (FALSE === file_put_contents('/etc/postfix/main.cf', $postfixConf)) {
            $this->errMsg = "ERR: failed to write /etc/postfix/main.cf for domain update\n";
        }
        $retval = NULL;
        system('/usr/sbin/postfix reload', $retval);
        if ($retval != 0) {
            $this->errMsg = "ERR: failed to reload postfix after domain update ($retval)\n";
        }
    }
}
    
    /**
    * Procedimiento para borrar del sistema el dominio asociado a una 
    * organizacion. Se borran tambien todas las lista de mail y mailboxs
    * asociados a la organizacion
    *
    * @param string    $domain_name       nombre para el dominio
    *
    * @return bool     VERDADERO si el dominio se borra correctamente, FALSO en error
    */
    private function deleteAccountByDomain($domain_name)
    {
        $this->errMsg = '';
        $output = $retval = NULL;
        $sComando = '/usr/bin/iperfex-helper email_account --deleteAccountByDomain '.
            escapeshellarg($domain_name).' 2>&1';
        
        exec($sComando, $output, $retval);
        if ($retval != 0) {
            foreach ($output as $s) {
                $regs = NULL;
                if (preg_match('/^ERR: (.+)$/', trim($s), $regs)) {
                    $this->errMsg = $regs[1];
                }
            }
            if ($this->errMsg == '')
                $this->errMsg = implode('<br/>', $output);
            return FALSE;
        }
        return TRUE;
    }
    //*****End Email section ********
    
//    private function reloadServices(){
//        $pFax = new iperfexFax($this->_DB);
//        $pEmail = new iperfexEmail($this->_DB);
//        $flag=true;
//
//        if(!$pFax->restartService()){
//            $this->errMsg .= $pFax->errMsg;
//            $flag=false;
//        }
//
//        if(!$pEmail->reloadPostfix()){
//            $this->errMsg .= $pEmail->errMsg;
//            $flag=false;
//        }
//
//        $sComando = '/usr/bin/iperfex-helper asteriskconfig reload 2>&1';
//        $output = $ret = NULL;
//        exec($sComando, $output, $ret);
//        if ($ret != 0){
//            $this->errMsg = implode('', $output);
//            $flag=false;
//        }
//        return $flag;
//    }

    
    //funcion usada para enviar un email de respuesta desde el servidor iperfex 
    //al email_contact de una organizacion, al momento de que la organizacion es creada, 
    //suspendida o terminada
   private function sendEmail($password ,$org_name, $org_domain, $email_contact, $category, &$error)
   {
       global $arrConf;
       require_once("{$arrConf['iperfex']}/libs/phpmailer/class.phpmailer.php");

       if (!preg_match(
           '/^[a-z0-9]+([\._\-]?[a-z0-9]+[_\-]?)*@[a-z0-9]+([\._\-]?[a-z0-9]+)*(\.[a-z0-9]{2,4})+$/',
           $email_contact)) {
           $error = 'Email address for notification is invalid or not set';
           return false;
       }
       if ($category == 'create' && empty($password)){
           $error = _tr("User Password can't be empty");
           return false;
       }

       // Configuración por omisión de parámetros del envío de email
       $default_content = array(
           'create'    =>  "Your entity {COMPANY_NAME}, associated with the domain {DOMAIN} has been created.\n".
                           "To configure you Iperfex server, please go to https://{HOST_IP} and login into Iperfex with the following credentials:\n".
                           "Username: admin@{DOMAIN}\n".
                           "Password: {USER_PASSWORD}",
           'suspend'   =>  "Your entity {COMPANY_NAME}, associated with the domain {DOMAIN} has been suspended.\n",
           'delete'    =>  "Your entity {COMPANY_NAME}, associated with the domain {DOMAIN} has been deleted.\n",
       );
       if (!isset($default_content[$category])) {
           $error = _tr("Invalid category");
           return false;
       }
       $default_conf_email = array(
           'subject'       =>  'Iperfex Notification',
           'from_email'    =>  'iperfex@example.com',  //quien envia el email
           'from_name'     =>  'Iperfex Admin',        //nombre de quien envia el email
           'content'       =>  $default_content[$category],
           'host_ip'       =>  '',
           'host_domain'   =>  '', // no se usa ahora
           'host_name'     =>  '', // no se usa ahora
       );

       // obtenemos los parametros de configuracion para mandar mail de acuredo a la categoria
       $conf_email = $this->_DB->getFirstRowQuery(
           'SELECT * FROM org_email_template where category = ?',
           true, array($category));
       foreach (array_keys($default_conf_email) as $k) {
       	if (empty($conf_email[$k])) $conf_email[$k] = $default_conf_email[$k];
       }

       // El siguiente código obtiene la IP pública para este servidor
       if (empty($conf_email['host_ip'])){
           $output = NULL;
           exec("curl ifconfig.me", $output);
           if (isset($output[0])) $conf_email['host_ip'] = $output[0];
       }

       $mail = new PHPMailer();
       $mail->CharSet = 'UTF-8';
       $mail->From = $conf_email['from_email'];
       $mail->FromName = $conf_email['from_name'];
       $mail->AddAddress($email_contact);
       $mail->WordWrap = 70;                                 // set word wrap to 70 characters
       $mail->IsHTML(false);                                  // set email format to TEXT

       $mail->Subject = $conf_email['subject'];
       $mail->Body    = str_replace(
           array('{COMPANY_NAME}', '{DOMAIN}', '{USER_PASSWORD}', '{HOST_IP}'),
           array($org_name, $org_domain, $password, $conf_email['host_ip']),
           $conf_email['content']);

       // envio del mensaje
       if ($mail->Send()){
           $error = "Se envio correctamenete el mail";
           return true;
       }else{
           $error = "Error al enviar el mail".$mail->ErrorInfo;
           return false;
       }
   }

    function setParameterUserExtension($domain,$type,$exten,$secret,$fullname,$email)
    {
//        $pDevice=new iperfexDevice($domain,$type,$this->_DB);
//        if($pDevice->errMsg!=""){
//            $this->errMsg=_tr("Error getting settings from extension user").$pDevice->errMsg;
//            return false;
//        }
//        $pGPBX = new iperfexGlobalsPBX($this->_DB,$domain);
        
        $arrProp["iperfex_user"]=strstr($email, '@', true);
        
        $arrProp=array();
        $arrProp["fullname"]=$fullname;
        //$arrProp["iperfex_user"]=strstr($email, '@', true);
        //en un futuro se tiene pensado usar como name para el dispositivo de usario su username
        //$arrProp["name"]=$exten;
        $arrProp["name"]=strstr($email, '@', true);
        $arrProp["exten"]=$exten;
        $arrProp['secret']= $secret;
        $arrProp["vmpassword"]= $exten;
        $arrProp["vmemail"]=$email;
        $arrProp["record_in"]="on_demand";
        $arrProp["record_out"]="on_demand";
        $arrProp["callwaiting"]="no";
//        $arrProp["rt"]=$pGPBX->getGlobalVar("RINGTIMER");
//        $arrProp["create_vm"]=$pGPBX->getGlobalVar("CREATE_VM");
//        $result=$pDevice->tecnologia->getDefaultSettings($domain);
//        $arrOpt=array_merge($result,$arrProp);
        if(empty($arrOpt["context"]))
            $arrOpt["context"]="from-internal";
        if(empty($arrOpt["host"]))
            $arrOpt["host"]="dynamic";
            
        $arrOpt["create_iperfexweb_device"]="yes"; //a esto se le agrega el codigo de la organizacion
        $arrOpt["alias"]=strstr($email, '@', true);
        //$arrOpt["alias"]=$exten;
        return $arrOpt;
    }

    /**
        Este procedimiento se encarga de crear un usuario que pertenece a una organizacion,
        al usuario se le crea una cuenta de correo dentro de la organizacion
        una extension telefonica dentro de asterisk
        un fax con hylafax y la extension para el fax dentro de asterisk
    */
    function createUserOrganization($idOrganization, $username, $name, $md5password, $password, $idGroup, $extension, $fax_extension,$countryCode, $areaCode, $clidNumber, $cldiName, &$lastId,$transaction=true)
    {
//        require_once "apps/general_settings/libs/iperfexGlobalsPBX.class.php";
        
        $pACL=new iperfexACL($this->_DB);
        $pEmail = new iperfexEmail($this->_DB);
//        $pFax = new iperfexFax($this->_DB);
        $continuar=true;
        $Exito = false;
        $error="";

        // 1) valido que la organizacion exista
        // 2) trato de crea el usuario en la base -- aqui se hacen validaciones con respecto al usuario
        //		--Se valida que no exista otro usuario con el mismo username
        //		--Se valida que no exista otro usuario dentro de la misma organizacion con la misma sip_extension
        //		--Se valida que no exista otro usuario dentro de la misma organizacion con la misma fax_extension
        //      --Que no se supere el maximo numeros de usuarios por organizacion de existir esa propiedad
        // 3) creo la cuenta de fax
        // 4) creo la cuenta de mail
        // 5) se crea la extension dentro del plan de marcado para el usuario

        if($name=="")
            $name=$username;

        $arrOrgz=$this->getOrganizationById($idOrganization);
        if(is_array($arrOrgz) && count($arrOrgz)>0){ // 1)
            $emailUser = $username;
            $username  = $emailUser."@".$arrOrgz["domain"];
//            $peer_name = $emailUser."_".$arrOrgz["code"];
//            $peer_fax  = $fax_extension."_".$arrOrgz["code"];
            
            //validamos que no exista otro usuario con la misma sip_extension
            //validamos que no exista otro usuario con la misma fax_extension
            //TODO: en un futuro las extensiones podran ser sip o iax, eso lo define el administrador entre las
            //opciones generales y habra que preguntar que tipo de extension se va a crear
//            if($fax_extension==$extension){
//                $this->errMsg=_tr("Extension number and Fax number can not be equal");
//                return false;
//            }

//            $pDevice=new iperfexDevice($arrOrgz["domain"],"sip",$this->_DB);
//            if($pDevice->existDevice($extension,$peer_name,"sip")==true){
//                $this->errMsg="Error Extension Number. ".$pDevice->errMsg;
//                return false;
//            }

//            //las extensiones usadas para el fax siempre son de tipo iax
//            if($pDevice->existDevice($fax_extension,$peer_fax,"iax2")==true){
//                $this->errMsg="Error Extension Number. ".$pDevice->errMsg;
//                return false;
//            }
            
            $max_num_user=$this->getOrganizationProp($idOrganization,"max_num_user");
            if(ctype_digit($max_num_user)){
                if($max_num_user!=0){
                    $numUser=$this->getNumUserByOrganization($idOrganization);
                    if($numUser>=$max_num_user){
                        $this->errMsg=_tr("Err: You can't create new users because you have reached the max numbers of users permitted")." ($max_num_user). "._tr("Contact with the server's admin");
                        return false;
                    }
                }
            }
            
            if($transaction) $this->_DB->beginTransaction();
            if(($pACL->createUser($username, $name, $md5password, $idGroup,$extension,$fax_extension, $idOrganization))){//creamos usuario
                //seteamos los registros en la tabla user_properties
                if($countryCode=="" || $countryCode==null) $countryCode= $this->getOrganizationProp($idOrganization,"country_code");
                if($areaCode=="" || $areaCode==null) $areaCode= $this->getOrganizationProp($idOrganization,"area_code");
                if($clidNumber=="" || $clidNumber==null) $clidNumber = $fax_extension;
                if($cldiName=="" || $cldiName==null) $cldiName = $name;
//                $fax_subject=$this->getOrganizationProp($idOrganization,"fax_subject");
//                $fax_content=$this->getOrganizationProp($idOrganization,"fax_content");
//                $fax_subject = (empty($fax_subject))?"Fax attached (ID: {NAME_PDF})":$fax_subject;
//                $fax_content = (empty($fax_content))?"Fax sent from '{COMPANY_NAME_FROM}'. The phone number is {COMPANY_NUMBER_FROM}. \n This email has a fax attached with ID {NAME_PDF}.":$fax_content;
                
                //obtenemos el id del usuario que acabmos de crear
                $idUser = $pACL->getIdUser($username);
                $lastId=$idUser;

//                if($quota=="" || $quota==null) $quota = $this->getOrganizationProp($idOrganization,"email_quota");
//                //seteamos la quota
//                if($quota!==false && $continuar){
//                    if(!$pACL->setUserProp($idUser,"email_quota",$quota,"email")){
//                        $error= _tr("Error setting quota").$pACL->errMsg;
//                        if($transaction) $this->_DB->rollBack();
//                        $continuar=false;
//                    }
//                }else{
//                    $error= _tr("Property quota is not set").$this->errMsg;
//                    $continuar=false;
//                }

                $arrSysProp = $this->getOrganizationPropByCategory($idOrganization,"system");
                if(is_array($arrSysProp) && $continuar){
                    foreach($arrSysProp as $tmp){
                        if(!$pACL->setUserProp($idUser,$tmp["property"],$tmp["value"],"system")){
                            $error= _tr("Error setting user properties").$pACL->errMsg;
                            if($transaction) $this->_DB->rollBack();
                            $continuar=false;
                            break;
                        }
                    }
                }

                if($continuar){
                    //creamos la extension del usuario
                    $arrProp=$this->setParameterUserExtension($arrOrgz["domain"],"sip",$extension,$password,$name,$username,$this->_DB);
                    if($arrProp==false){
                        $error=$this->errMsg;
                        if($transaction) $this->_DB->rollBack();
                        $continuar=false;
                    }
//                    else{
//                        if($pDevice->createNewDevice($arrProp,"sip")==false){
//                            $error=$pDevice->errMsg;
//                            if($transaction) $this->_DB->rollBack();
//                            $pDevice->deleteAstDBExt($extension,"sip");
//                            $continuar=false;
//                        }
//                    }
                }

                //creamos fax y el email del usuario
                if($continuar){
                    $Exito=true;
                    //$idUser,$countryCode,$areaCode,$cldiName,$clidNumber
//                    if($pFax->createFaxToUser(array("idUser"=>$idUser, "country_code"=>$countryCode, "area_code"=>$areaCode,"clid_name"=>$cldiName, "clid_number"=>$clidNumber, "fax_content"=>$fax_content,"fax_subject"=>$fax_subject))){//si se crea exitosamente el fax creamos el email
                       // if($pEmail->createAccount($arrOrgz["domain"],$emailUser,$password)){
                           // $Exito=true;
                           // if($transaction) $this->_DB->commit();
                           // // $pFax->restartService();
                       // }else{
                           // $error=_tr("Error trying create email_account").$pEmail->errMsg;
                           // // $devId=$pACL->getUserProp($idUser,"dev_id");
                           // if($transaction) $this->_DB->rollBack();
                           // // $pDevice->deleteAstDBExt($extension,"sip");
                           // // $pFax->deleteFaxConfiguration($devId);
                       // }
//                    }else{
//                        $error=_tr("Error trying create new fax").$pFax->errMsg;
//                        $pDevice->deleteAstDBExt($extension,"sip");
//                        if($transaction) $this->_DB->rollBack();
//                    }
                }
            }else{
                $error=_tr("User couldn't be created").". ".$pACL->errMsg;
                if($transaction) $this->_DB->rollBack();
            }
        }else{
            $error=_tr("Invalid Organization").$this->errMsg;
        }
        $this->errMsg=$error;
        return $Exito;
    }

    function updateUserSuperAdmin($idUser, $name, $md5password, $password1, $userLevel1){
        $pACL=new iperfexACL($this->_DB);
        $arrUser=$pACL->getUsers($idUser);
        if($arrUser===false || count($arrUser)==0 || !isset($idUser)){
            $this->errMsg=_tr("User dosen't exist");
            return false;
        }

        $this->_DB->beginTransaction();
        //actualizamos la informacion de usuario que esta en la tabla acl_user
        if($pACL->updateUserName($idUser, $name)){
//            if($pACL->setUserProp($idUser,"email_contact")){
//                //actualizamos el password del usuario
               if($password1!==""){
                   if($pACL->changePassword($idUser,$md5password, $password1)){
                       $this->_DB->commit();
                       return true;
                   }else{
                       $error=_tr("Password couldn't be updated")." ".$pACL->errMsg;
                       $this->_DB->rollBack();
                       return false;
                   }
               }else{
                   $this->_DB->commit();
                   return true;
               }
//            }else{
//                $error=_tr("Can't set email contact.")." ".$pACL->errMsg;
//                $this->_DB->rollBack();
//                return false;
//            }
        }else{
            $error=_tr("User couldn't be update.")." ".$pACL->errMsg;
            $this->_DB->rollBack();
            return false;
        }
    }

    function updateUserOrganization($idUser, $name, $md5password, $password1, $extension, $fax_extension,$countryCode, $areaCode, $clidNumber, $cldiName, $idGrupo, $quota, $userLevel1){
       $pACL=new iperfexACL($this->_DB);
       
        $continuar=true;
        $Exito = false;
        $error="";
        $cExten=false;
        $cFExten=false;
        $arrBackup=array();
        $editFax=false;
        $faxProperties=array();
        
        $arrUser=$pACL->getUsers2($idUser);
        if($arrUser===false || count($arrUser)==0 || !isset($idUser)){
            $this->errMsg=_tr("User dosen't exist");
            return false;
        }

        if($pACL->isUserSuperAdmin($arrUser[0]['username'])){
            $this->errMsg=_tr("Invalid Action");
            return false;
        }

        $arrOrgz=$this->getOrganizationById($arrUser[0]['id_organization']);

        $username=$arrUser[0]['username'];
        $oldExten=$arrUser[0]['extension'];
        $oldFaxExten=$arrUser[0]['fax_extension'];
        
        
        
        if($name=="")
            $name=$username;

        if($userLevel1=="other"){
            $extension=$arrUser[0]['extension'];
            // $fax_extension=$arrUser[0]['fax_extension'];
            $quota=$pACL->getUserProp($idUser,"email_quota");
            $idGrupo=$arrUser[0]['id_group'];
            $modificarExts=false;
        }else{
           
            //poder crear las extensiones con la clave correcta
            if($cExten || $cFExten){
                if(is_null($md5password) || $md5password=="" || is_null($password1) || $password1==""){
                    $this->errMsg=_tr("Please set a password");
                    return false;
                }
            }
        }
        
      
                
        $this->_DB->beginTransaction();
        //actualizamos la informacion de usuario que esta en la tabla acl_user
        if($pACL->updateUser($idUser, $name, $extension, $fax_extension)){
            //actualizamos el grupo al que pertennece el usuario
            if($pACL->addToGroup($idUser, $idGrupo)){

                $old_quota=$pACL->getUserProp($idUser,"email_quota");
                if($old_quota===false){
                    $old_quota=1;
                }
                //actualizamos la quota de correo
                if(isset($quota) && $quota!="" && $continuar){
                    // if($pEmail->updateQuota($old_quota*1024,$quota*1024,$username)){
                        if(!$pACL->setUserProp($idUser,"email_quota",$quota,"email")){
                            $error= _tr("Error setting email quota").$pACL->errMsg;
                            // $pEmail->updateQuota($quota,$old_quota);
                            $this->_DB->rollBack();
                            $continuar=false;
                        }
                   
                }

                if($continuar){
                    if($cExten && $userLevel1!="other"){
                        if(!$this->modificarExtensionUsuario($arrOrgz["domain"],$oldExten,$extension,$password1,$name,$username,$arrBackup)){
                            $error="Couldn't updated user extension. ".$this->errMsg;
                            $continuar=false;
                        }
                    }
                }
                
                //actualizamos el password del usuario
                if($password1!=="" && $continuar){
                    if($pACL->changePassword($idUser,$md5password)){
                       
                        //debemos actualizar el password en las variable de session
                        if($continuar && $_SESSION['iperfex_user'] == $username){
                            $_SESSION['iperfex_pass'] = $md5password;
                            $_SESSION['iperfex_pass2'] = $password1;
                        }
                    }else{
                        $error=_tr("Password couldn't be updated")." ".$pACL->errMsg;
                        $continuar=false;
                    }
                }else{
                    //editamos la configuracion del fax
                    /*if($continuar){
                        if($cFExten  && $userLevel1!="other"){
                            //cuando se cambia el patron de marcado asociado al fax del usuario 
                            //es necesario incluir el parametro oldFaxExten entre los parametros para
                            //la actualizacion correcta de los datos
                            if(!$pFax->editFaxToUser(array("idUser"=>$idUser,"oldFaxExten"=>$oldFaxExten, "country_code"=>$countryCode, "area_code"=>$areaCode,"clid_name"=>$cldiName, "clid_number"=>$clidNumber))){
                                    $error="Couldn't updated user fax. ".$pFax->errMsg;
                                    $continuar=false;
                                }
                        }else{
                            if(!$pFax->editFaxToUser(array("idUser"=>$idUser, "country_code"=>$countryCode, "area_code"=>$areaCode,"clid_name"=>$cldiName, "clid_number"=>$clidNumber))){
                                $error="Couldn't updated user fax. ".$pFax->errMsg;
                                $continuar=false;
                            }
                        }
                    }*/
                }

                if($continuar){
                    $Exito=true;
                    $this->_DB->commit();
                  
                }else{
                    $this->_DB->rollBack();
                   
                }
            }else{
                $error=_tr("Failed Updated Group")." ".$pACL->errMsg;
                $this->_DB->rollBack();
            }
        }else{
            $error=_tr("User couldn't be update")." ".$pACL->errMsg;
            $this->_DB->rollBack();
        }


        $this->errMsg=$error." ".$this->errMsg;
        return $Exito;
    }

    /**
     * Procedimiento que actualiza los passwords de un usuario dentro de iperfex
     * La calve ingresada sera configurada para la cuenta de interfaz web, para su cuenta
     * de email, su secret en el caso de las extensiones sip e iax
     */
    function changeUserPassword($username,$password){
        $pEmail = new iperfexEmail($this->_DB);
        $pFax = new iperfexFax($this->_DB);
        $pACL=new iperfexACL($this->_DB);
        
        //comprobamos que la calve este seteada y sea una clave fuerte
        //verificamos que la nueva contraseña sea fuerte
        if(!isStrongPassword($password)){
            $this->errMsg = _tr("The new password can not be empty. It must have at least 10 characters and contain digits, uppers and little case letters");
            return false;
        }
        //obtenemos la conversion md5 de la clave
        $md5_password=md5($password);
        
        //verficamos que el usuario exista
        $idUser = $pACL->getIdUser($username);
        if($idUser==false){
            $this->errMsg=($pACL->errMsg=='')?_tr("User does not exist"):_tr("DATABASE ERROR");
            return false;
        }
        
        //obtenemos los datos del usuario
        //extension de fax y de telefonia
        $arrUser=$pACL->getUsers($idUser);
        if($arrUser==false){
            $this->errMsg=($arrUser===false)?_tr("DATABASE ERROR"):_tr("User dosen't exist");
            return false;
        }
        
        $this->_DB->beginTransaction();
        if($pACL->isUserSuperAdmin($username)){
            //si es superadmin solo se cambia la clave de interfaz administrativa
            //cambiamos la clave en la insterfax administrativa
            if(!$pACL->changePassword($idUser,$md5_password)){
                $this->_DB->rollBack();
                $this->errMsg=$pACL->errMsg;
                return false;
            }else{
                $this->_DB->commit();
                return true;
            }
        }else{
            //obtenemos el dominio al cual pertenece el usuario
            $arrOrgz=$this->getOrganizationById($arrUser[0][4]);
            if($arrOrgz==false){
                $this->errMsg=_tr("An error has ocurred to retrieve organization data");
                return false;
            }
            
            $domain=$arrOrgz['domain'];
            $extension=$arrUser[0][5];
            $fax_extension=$arrUser[0][6];
            
            $pDevice=new iperfexDevice($domain,"sip",$this->_DB);
            $arrExtUser=$pDevice->getExtension($extension);
            $listFaxs=$pFax->getFaxList(array("exten"=>$fax_extension,"organization_domain"=>$domain));
            $faxUser=$listFaxs[0];
            
            //cambiamos la clave en la insterfax administrativa
            if(!$pACL->changePassword($idUser,$md5_password)){
                $this->_DB->rollBack();
                $this->errMsg=$pACL->errMsg;
                return false;
            }
            //cambiamos la clave en la extension telefonica
            if(!$pDevice->changePasswordExtension($password,$extension)){
                $this->_DB->rollBack();
                $this->errMsg=_tr("Extension password couldn't be updated").$pDevice->errMsg;
                return false;
            }
            
            //cambiamos la clave para el fax (peer, archivos de configuracion)
            if(!$pFax->editFaxToUser(array("idUser"=>$idUser, "country_code"=>$faxUser['country_code'], "area_code"=>$faxUser['area_code'],"clid_name"=>$faxUser['clid_name'], "clid_number"=>$faxUser['clid_number']))){
                $this->_DB->rollBack();
                $this->errMsg=_tr("Fax Extension password couldn't be updated").$pFax->errMsg;
                return false;
            }
            
            //cambiamos la clave en el correo
            if(!$pEmail->setAccountPassword($username,$password)){
                $this->_DB->rollBack();
                $this->errMsg=_tr("Error to update email account password");
                //reestauramos la configuracion anterior en los archivos de fax
                $pFax->editFaxFileConfig($faxUser['dev_id'],$faxUser['country_code'],$faxUser['area_code'],$faxUser['clid_name'],$faxUser['clid_number'],$arrUser[0][3],0,$arrOrgz['domain']);
                return false;
            }else{
                $this->_DB->commit();
                //recargamos la configuracion en realtime de los dispositivos para que tomen efectos los cambios
                $pDevice->tecnologia->prunePeer($arrExtUser["device"],$arrExtUser["tech"]);
                $pDevice->tecnologia->loadPeer($arrExtUser["device"],$arrExtUser["tech"]);
                if(!empty($arrExtUser["iperfexweb_device"])){
                    $pDevice->tecnologia->prunePeer($arrExtUser["iperfexweb_device"],$arrExtUser["tech"]);
                    $pDevice->tecnologia->loadPeer($arrExtUser["iperfexweb_device"],$arrExtUser["tech"]);
                }
                
                //se recarga la faxextension del usuario por los cambios que pudo haber
                $pDevice->tecnologia->prunePeer($faxUser["device"],$faxUser["tech"]);
                $pDevice->tecnologia->loadPeer($faxUser["device"],$faxUser["tech"]);  
                $pFax->restartService();
                return true;
            } 
        }
    }
    
    private function modificarExtensionUsuario($domain,$oldExten,$extension,$password,$name,$username,&$arrBackup){
        $continuar=true;
        $pDevice=new iperfexDevice($domain,"sip",$this->_DB);
        $error="";

        //1.- Tomar un backup de las entradas en la base astDB para dicha extension
        //2.- Eliminar la extension anterior
        //3.- Crear la nueva extension

        //borramos la extension anterior 
        $arrBackup=$pDevice->backupAstDBEXT($oldExten);
        //borramos la extension anterior
        if(!$pDevice->deleteExtension($oldExten)){
            $this->errMsg=_tr("Old extension can't be deleted").$pDevice->errMsg;
            return false;
        }

        //creamos una extension nueva
        $arrProp=$this->setParameterUserExtension($domain,"sip",$extension,$password,$name,$username);
        if($arrProp==false){
            $error=$this->errMsg;
            $continuar=false;
        }else{
            if($pDevice->createNewDevice($arrProp,"sip")==false){
                //si no se pude crear la extension anterior se restaura los valores anteriores en la base astDB
                $pDevice->restoreBackupAstDBEXT($arrBackup);
                $error=$pDevice->errMsg;
                $continuar=false;
            }
        }

        $this->errMsg=$error;
        return $continuar;
    }


    function deleteUserOrganization($idUser){
        $pACL=new iperfexACL($this->_DB);
        $pEmail = new iperfexEmail($this->_DB);
        $Exito=false;

        //1)se comprueba de que el ID de USUARIO se un numero
        //2)se verifica que exista dicho usuario
        //3)se recompila los datos del usuario de las tablas acl_user y user_properties
        //4)se elimina al usuario de la base
        //5)se elimina la extension de uso del usuario y la extension de fax
        //6)se trata de eliminar la cuenta de fax
        //7)se elimina el buzon de correo
        if (!preg_match('/^[[:digit:]]+$/', "$idUser")) {
            $this->errMsg = _tr("User ID is not numeric");
            return false;
        }else{
            $arrUser=$pACL->getUsers($idUser);
            if($arrUser===false || count($arrUser)==0){
                $this->errMsg=_tr("User dosen't exist");
                return false;
            }
        }

        $idDomain=$arrUser[0][4];
        $query="Select domain from organization where id=?";
        $getDomain=$this->_DB->getFirstRowQuery($query, false, array($idDomain));
        if($getDomain==false){
            $this->errMsg=$this->_DB->errMsg;
            return false;
        }
        
        $this->_DB->beginTransaction();
        //tomamos un backup de las extensiones que se van a eliminar de la base astDB por si algo sale mal
        //y ahi que restaurar la extension
		if($pACL->deleteUser($idUser)){
			$Exito=true;
			$this->_DB->commit();
		}else{
			$this->errMsg=$pACL->errMsg;
			$this->_DB->rollBack();
		}
        return $Exito;
    }

    function countAssignedChannels($id=null)
    {
        $arrWhere=array();
        $arrParam=array();

        $arrWhere[]='property=?';
        $arrParam[]='channels';

        if (!is_null($id))
        {
            $arrWhere[]='id_organization!=?';
            $arrParam[]=$id;
        }

        $query = "SELECT SUM(value) total FROM organization_properties WHERE ".implode(' AND ',$arrWhere);
        $result=$this->_DB->getFirstRowQuery($query, true, $arrParam);
        if($result==FALSE){
            $this->errMsg = $this->_DB->errMsg;
            return false;
        }
        return $result['total'];
    }

    function getOrganizationsChannels()
    {
        $query = "SELECT SUM(value) sum FROM `organization_properties` WHERE property='channels'";
        $result=$this->_DB->fetchTable($query, true);
        if($result==FALSE){
            $this->errMsg = $this->_DB->errMsg;
            return false;
        }else
            return $result[0]['sum'];
    }
}
?>
