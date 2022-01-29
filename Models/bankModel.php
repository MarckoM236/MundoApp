<?php 
/* It receives data from the controller and queries the database, returning the result. */
@include_once('../Core/baseModel.php');
    class BankModel extends BaseModel{

        protected $code="";
        private $name="";
        private $tiAccount="";
        private $numAccount="";
        private $respuesta= array();

/*         public function __construct() {
            
        }
 */
         public function __construct($cod,$name,$tiAcc,$numAcc) {
            $table="banco";
            parent::__construct($table);
            $this->code=$cod;
            $this->name=$name;
            $this->tiAccount=$tiAcc;
            $this->numAccount=$numAcc;
        }

        //getters
        public function setCode($val){
            $this->code = $val;
        }
        public function setName($val){
            $this->name = $val;
        }
        public function setTiAccount($val){
            $this->tiAccount = $val;
        }
        public function setNumAccount($val){
            $this->numAccount = $val;
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
        public function getTiAccount(){
            return $this->tiAccount;
        }
        public function getNumAccount(){
            return $this->numAccount;
        }

        public function getRespuesta(){
            return $this->respuesta;
        }
        
        public  function show(){
            $sql = "BEGIN  pkgBanco.consultaBanco(:cod_banco,:nom_banco,:numcu_banco,:res); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            $cursor= oci_new_cursor($conex);
            oci_bind_by_name($stid, ':cod_banco',$this->code);
            oci_bind_by_name($stid, ':nom_banco',$this->name);
            oci_bind_by_name($stid, ':numcu_banco',$this->numAccount);
            oci_bind_by_name($stid, "res", $cursor, -1, OCI_B_CURSOR);
            oci_execute($stid);
            oci_execute($cursor);

            $foo = array();
            while (($row = oci_fetch_array($cursor)) != false) {            
                
                $foo[] = new BankModel($row[0],$row[1],$row[2],$row[3]);
            }
            
            return $foo;
        }

        public function insert(){

            $data=array();
            $sql = "BEGIN  pkgBanco.insertarBanco(:cod_banco,:nom_banco,:ticu_banco,:numcu_banco); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            oci_bind_by_name($stid, ':cod_banco',$this->code);
            oci_bind_by_name($stid, ':nom_banco',$this->name);
            oci_bind_by_name($stid, ':ticu_banco',$this->tiAccount);
            oci_bind_by_name($stid, ':numcu_banco',$this->numAccount);
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
            $sql = "BEGIN  pkgBanco.actualizarBanco(:cod_banco,:nom_banco,:ticu_banco,:numcu_banco); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            oci_bind_by_name($stid, ':cod_banco',$this->code);
            oci_bind_by_name($stid, ':nom_banco',$this->name);
            oci_bind_by_name($stid, ':ticu_banco',$this->tiAccount);
            oci_bind_by_name($stid, ':numcu_banco',$this->numAccount);
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