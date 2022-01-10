<?php
/* session_name("herpo");
session_start(); */

class Conectar
{
    private $_oLinkId; //objeto resource que indicara si se ha conectado
    private $_sServidor;
    private $_sNombreBD;
    private $_sUsuario;
    private $_sClave;
    private $_sPuerto;
    public static $sMensaje;
    private static $_oSelf = null; //Almacenara un objeto de tipo Conexion


	public function __construct() {

        $this->_sServidor = 'MMARIN';
        $this->_sNombreBD = 'ONCE';
        $this->_sUsuario = 'mundo';
        $this->_sClave = 'mundo';
        $this->_sPuerto = '1521';

    }
	  public static function getInstancia() {

        if (!self::$_oSelf instanceof self) {
            $instancia = new self(); //new self ejecuta __construct()
            self::$_oSelf = $instancia;
            if (!is_resource($instancia->conecta())) {
                self::$_oSelf = null;
            }
        }

        $conex = self::$_oSelf;
        return $conex->_oLinkId; //Se devuelve el link a la conexion
    }

	 private function conecta() {

        $this->_oLinkId = null;
        $intentos = 0;
        while (!is_resource($this->_oLinkId) && $intentos < 20) {
            $intentos++;
            $this->_oLinkId =
                    oci_connect($this->_sUsuario, $this->_sClave, "(DESCRIPTION = (LOAD_BALANCE = yes)
                            (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP) (HOST = {$this->_sServidor}) (PORT = 1521) ) )
                            (CONNECT_DATA = (FAILOVER_MODE = (TYPE = select) (METHOD = basic) (RETRIES = 180) (DELAY = 5) )
                            (SERVICE_NAME = {$this->_sNombreBD}) ) )");
        }

        if (is_resource($this->_oLinkId)) {
            self::$sMensaje = "";//"Conexion exitosa!<br/>"
			$consul= "alter session set NLS_NUMERIC_CHARACTERS = ',.'";
           $stmt = oci_parse($this->_oLinkId, $consul);
           oci_execute($stmt);
		   oci_commit($this->_oLinkId);

        } else {
            self::$sMensaje = "ERROR: No se puede conectar a la base de datos..!<br/>";
        }
        echo self::$sMensaje;
        return $this->_oLinkId;
    }
	  function get_client_ip() {
			$ipaddress = '';
			if (getenv('HTTP_CLIENT_IP'))
				$ipaddress = getenv('HTTP_CLIENT_IP');
			else if(getenv('HTTP_X_FORWARDED_FOR'))
				$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
			else if(getenv('HTTP_X_FORWARDED'))
				$ipaddress = getenv('HTTP_X_FORWARDED');
			else if(getenv('HTTP_FORWARDED_FOR'))
				$ipaddress = getenv('HTTP_FORWARDED_FOR');
			else if(getenv('HTTP_FORWARDED'))
			   $ipaddress = getenv('HTTP_FORWARDED');
			else if(getenv('REMOTE_ADDR'))
				$ipaddress = getenv('REMOTE_ADDR');
			else
				$ipaddress = 'UNKNOWN';
			return $ipaddress;
		}

	public function ruta()
	{
	  /*$ip=$this->get_client_ip();
	  $ip2 = explode(".",$ip);
	  $ipF=$ip2[0];
     //die($ipF);

	  if($ipF==192){
	   $ruta="http://localhost/compras/";
	  }else{*/
	    $ruta="http://localhost/AppMundo/";
	 // }
	 // die($ruta);
	  return  $ruta;


	}


}
 ?>