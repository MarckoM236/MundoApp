<?php 
/* It receives data from the controller and queries the database, returning the result. */
@include_once('../Core/baseModel.php');
    class UtilityModel extends BaseModel{

        protected $code="";
        private $codeLiqu="";
        private $dateUtil="";
        private $userUtil="";
        private $respuesta= array();

/*         public function __construct() {
            
        }
 */
         public function __construct($cod,$codLi,$du,$us) {
            $table="utilidad";
            parent::__construct($table);
            $this->code=$cod;
            $this->codeLiqu=$codLi;
            $this->dateUtil=$du;
            $this->userUtil=$us;
        }

        //getters
        public function setCode($val){
            $this->code = $val;
        }
        public function setCodeLiqu($val){
            $this->codeLiqu = $val;
        }
        public function setDateUtil($val){
            $this->dateUtil = $val;
        }
        public function setUserUtil($val){
            $this->userUtil = $val;
        }

        public function setRespuesta($val){
            $this->respuesta=$val;
        }

        //setters
        public function getCode(){
            return $this->code;
        } 
        public function getCodeLiqu(){
            return $this->codeLiqu;
        }
        public function getDateUtil(){
            return $this->dateUtil;
        }
        public function getUserUtil(){
            return $this->userUtil;
        }
        
        public function getRespuesta(){
            return $this->respuesta;
        }
        
        
        public  function show(){
            $sql = "BEGIN  pkgUtilidad.consultaUtilidad(:cod_liqu,:res); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            $cursor= oci_new_cursor($conex);
            oci_bind_by_name($stid, ':cod_liqu',$this->codeLiqu);
            oci_bind_by_name($stid, "res", $cursor, -1, OCI_B_CURSOR);
            oci_execute($stid);
            oci_execute($cursor);

            $foo = array();
            while (($row = oci_fetch_array($cursor)) != false) {            
                
                $foo[] = new UtilityModel($row[0],$row[1],$row[2],$row[3]);
            }
            
            return $foo;
        }

        public  function showUltimate(){
            $sql = "BEGIN  pkgUtilidad.consultaUltimaUtilidad(:res); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            $cursor= oci_new_cursor($conex);
            oci_bind_by_name($stid, "res", $cursor, -1, OCI_B_CURSOR);
            oci_execute($stid);
            oci_execute($cursor);

            $foo = "";
            while (($row = oci_fetch_array($cursor)) != false) { 
                $foo=$row[0];
            }
            
            return $foo;
        }


        public function insert(){

            $data=array();
            $sql = "BEGIN  pkgUtilidad.insertarUtilidad(:cod_utilidad,:num_liquidacion,:fec_generacion,:user_utilidad); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            oci_bind_by_name($stid, ':cod_utilidad',$this->code);
            oci_bind_by_name($stid, ':num_liquidacion',$this->codeLiqu);
            oci_bind_by_name($stid, ':fec_generacion',$this->dateUtil);
            oci_bind_by_name($stid, ':user_utilidad',$this->userUtil);
            @$res=oci_execute($stid);

             if($res){
                 $data['status'] = 'ok';
                 $data['result'] = 'Registro exitoso';
             }
             else{
                 $data['status'] = 'fail';
                 $data['result'] = 'No se pudo insertar';
             }

             oci_free_statement($stid);
    
            return $data;
            
        }
         
        function update(){
            $data=array();
            $sql = "BEGIN  pkgHotel.actualizarHotel(:cod_utilidad,:cod_liqu,:fec_generacion,:user_utilidad); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            oci_bind_by_name($stid, ':cod_utilidad',$this->code);
            oci_bind_by_name($stid, ':cod_liqu',$this->codeLiqu);
            oci_bind_by_name($stid, ':fec_generacion',$this->dateUtil);
            oci_bind_by_name($stid, ':user_utilidad',$this->userUtil);
            @$res=oci_execute($stid);

             if($res){
                 $data['status'] = 'ok';
                 $data['result'] = 'Registro actualizado';
             }
             else{
                 $data['status'] = 'fail';
                 $data['result'] = 'No se pudo actualizar';
             }
    
            return $data;
        }

        function delete(){
            $cod=$this->code;
            $res= parent::deleteByCode($cod);

            return $res;
        }

        
    
    }

?>