<?php 
/* It receives data from the controller and queries the database, returning the result. */
@include_once('../Core/baseModel.php');
    class SystemModel extends BaseModel{

        protected $code="";
        private $name="";
        private $value="";
        private $feIn="";
        private $feFi="";
        private $respuesta= array();

/*         public function __construct() {
            
        }
 */
         public function __construct($cod,$name,$val,$fein,$fefi) {
            $table="sistema";
            parent::__construct($table);
            $this->code=$cod;
            $this->name=$name;
            $this->value=$val;
            $this->feIn=$fein;
            $this->feFi=$fefi;
        }

        //getters
        public function setCode($val){
            $this->code = $val;
        }
        public function setName($val){
            $this->name = $val;
        }
        public function setValue($val){
            $this->value = $val;
        }
        public function setFeIn($val){
            $this->feIn = $val;
        }
        public function setFeFi($val){
            $this->feFi = $val;
        }
        
        public function setRespuesta($val){
            $this->respuesta=$val;
        }

        //setters
        public function getCode(){
            return $this->code;
        } 
        public function getName(){
            return $this->name;
        }
        public function getValue(){
            return $this->value;
        }
        public function getFeIn(){
            return $this->feIn;
        }
        public function getFeFi(){
            return $this->feFi;
        }

        public function getRespuesta(){
            return $this->respuesta;
        }
        
        public  function show(){
            $sql = "BEGIN  pkgSistema.consultaSistema(:cod_sistema,:nomb_sistema,:res); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            $cursor= oci_new_cursor($conex);
            oci_bind_by_name($stid, ':cod_sistema',$this->code);
            oci_bind_by_name($stid, ':nomb_sistema',$this->name);
            oci_bind_by_name($stid, "res", $cursor, -1, OCI_B_CURSOR);
            oci_execute($stid);
            oci_execute($cursor);

            $foo = array();
            while (($row = oci_fetch_array($cursor)) != false) {            
                
                $foo[] = new SystemModel($row[0],$row[1],$row[2],$row[3],$row[4]);
            }
            
            return $foo;
        }

        public function insert(){

            $data=array();
            $sql = "BEGIN  pkgSistema.insertarSistema(:cod_sistema,:nomb_sistema,:val_sistema,:fein_sistema,:fefi_sistema); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            oci_bind_by_name($stid, ':cod_sistema',$this->code);
            oci_bind_by_name($stid, ':nomb_sistema',$this->name);
            oci_bind_by_name($stid, ':val_sistema',$this->value);
            oci_bind_by_name($stid, ':fein_sistema',$this->feIn);
            oci_bind_by_name($stid, ':fefi_sistema',$this->feFi);
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
            $sql = "BEGIN  pkgSistema.actualizarSistema(:cod_sistema,:nomb_sistema,:val_sistema,:fein_sistema,:fefi_sistema); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            oci_bind_by_name($stid, ':cod_sistema',$this->code);
            oci_bind_by_name($stid, ':nomb_sistema',$this->name);
            oci_bind_by_name($stid, ':val_sistema',$this->value);
            oci_bind_by_name($stid, ':fein_sistema',$this->feIn);
            oci_bind_by_name($stid, ':fefi_sistema',$this->feFi);
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