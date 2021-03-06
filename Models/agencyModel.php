<?php 
/* It receives data from the controller and queries the database, returning the result. */
@include_once('../Core/baseModel.php');
    class AgencyModel extends BaseModel{

        protected $code="";
        private $name="";
        private $address="";
        private $phone="";
        private $mobile="";
        private $email="";
        private $status="";
        private $respuesta= array();

/*         public function __construct() {
            
        }
 */
         public function __construct($cod,$name,$address,$phone,$mobile,$email,$status) {
            $table="agencia";
            parent::__construct($table);
            $this->code=$cod;
            $this->name=$name;
            $this->address=$address;
            $this->phone=$phone;
            $this->mobile=$mobile;
            $this->email=$email;
            $this->status=$status;
        }

        //getters
        public function setCode($val){
            $this->code = $val;
        }
        public function setName($val){
            $this->name = $val;
        }
        public function setAddress($val){
            $this->address = $val;
        }
        public function setPhone($val){
            $this->phone = $val;
        }
        public function setMobile($val){
            $this->mobile = $val;
        }
        public function setEmail($val){
            $this->email = $val;
        }
        public function setStatus($val){
            $this->status = $val;
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
        public function getAddress(){
            return $this->address;
        }
        public function getPhone(){
            return $this->phone;
        }
        public function getMobile(){
            return $this->mobile;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getStatus(){
            return $this->status;
        }

        public function getRespuesta(){
            return $this->respuesta;
        }
        
        public  function show(){
            $sql = "BEGIN  pkgAgencia.consultaAgencia(:cod_agencia,:nomb_agencia,:res); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            $cursor= oci_new_cursor($conex);
            oci_bind_by_name($stid, ':cod_agencia',$this->code);
            oci_bind_by_name($stid, ':nomb_agencia',$this->name);
            oci_bind_by_name($stid, "res", $cursor, -1, OCI_B_CURSOR);
            oci_execute($stid);
            oci_execute($cursor);

            $foo = array();
            while (($row = oci_fetch_array($cursor)) != false) {            
                
                $foo[] = new AgencyModel($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6]);
            }
            
            return $foo;
        }

        public function insert(){

            $data=array();
            $sql = "BEGIN  pkgAgencia.insertarAgencia(:cod_agencia,:nomb_agencia,:dir_agencia,:tel_agencia,:cel_agencia,:email_agencia,:est_agencia); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            oci_bind_by_name($stid, ':cod_agencia',$this->code);
            oci_bind_by_name($stid, ':nomb_agencia',$this->name);
            oci_bind_by_name($stid, ':dir_agencia',$this->address);
            oci_bind_by_name($stid, ':tel_agencia',$this->phone);
            oci_bind_by_name($stid, ':cel_agencia',$this->mobile);
            oci_bind_by_name($stid, ':email_agencia',$this->email);
            oci_bind_by_name($stid, ':est_agencia',$this->status);
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
            $sql = "BEGIN  pkgAgencia.actualizarAgencia(:cod_agencia,:nomb_agencia,:dir_agencia,:tel_agencia,:cel_agencia,:email_agencia,:est_agencia); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            oci_bind_by_name($stid, ':cod_agencia',$this->code);
            oci_bind_by_name($stid, ':nomb_agencia',$this->name);
            oci_bind_by_name($stid, ':dir_agencia',$this->address);
            oci_bind_by_name($stid, ':tel_agencia',$this->phone);
            oci_bind_by_name($stid, ':cel_agencia',$this->mobile);
            oci_bind_by_name($stid, ':email_agencia',$this->email);
            oci_bind_by_name($stid, ':est_agencia',$this->status);
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