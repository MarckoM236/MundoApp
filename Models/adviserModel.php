<?php 
/* It receives data from the controller and queries the database, returning the result. */
@include_once('../Core/baseModel.php');
    class AdviserModel extends BaseModel{

        protected $id="";
        private $name="";
        private $lastName="";
        private $status="";
        private $respuesta= array();

/*         public function __construct() {
            
        }
 */
         public function __construct($id,$name,$lname,$status) {
            $table="asesor";
            parent::__construct($table);
            $this->id=$id;
            $this->name=$name;
            $this->lastName=$lname;
            $this->status=$status;
        }

        //getters
        public function setId($val){
            $this->id = $val;
        }
        public function setName($val){
            $this->name = $val;
        }
        public function setLastName($val){
            $this->lastName = $val;
        }
        public function setStatus($val){
            $this->status = $val;
        }
        
        public function setRespuesta($val){
            $this->respuesta=$val;
        }

        //setters
        public function getId(){
            return $this->id;
        } 
        public function getName(){
            return $this->name;
        }
        public function getLastName(){
            return $this->lastName;
        }
        public function getStatus(){
            return $this->status;
        }

        public function getRespuesta(){
            return $this->respuesta;
        }
        
        public  function show(){
            $sql = "BEGIN  pkgAsesor.consultaAsesor(:id_asesor,:nomb_asesor,:apel_asesor,:res); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            $cursor= oci_new_cursor($conex);
            oci_bind_by_name($stid, ':id_asesor',$this->id);
            oci_bind_by_name($stid, ':nomb_asesor',$this->name);
            oci_bind_by_name($stid, ':apel_asesor',$this->lastName);
            oci_bind_by_name($stid, "res", $cursor, -1, OCI_B_CURSOR);
            oci_execute($stid);
            oci_execute($cursor);

            $foo = array();
            while (($row = oci_fetch_array($cursor)) != false) {            
                
                $foo[] = new AdviserModel($row[0],$row[1],$row[2],$row[3]);
            }
            
            return $foo;
        }

        public function insert(){

            $data=array();
            $sql = "BEGIN  pkgAsesor.insertarAsesor(:id_asesor,:nomb_asesor,:apel_asesor,:est_asesor); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            oci_bind_by_name($stid, ':id_asesor',$this->id);
            oci_bind_by_name($stid, ':nomb_asesor',$this->name);
            oci_bind_by_name($stid, ':apel_asesor',$this->lastName);
            oci_bind_by_name($stid, ':est_asesor',$this->status);
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
            $sql = "BEGIN  pkgAsesor.actualizarAsesor(:id_asesor,:nomb_asesor,:apel_asesor,:est_asesor); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            oci_bind_by_name($stid, ':id_asesor',$this->id);
            oci_bind_by_name($stid, ':nomb_asesor',$this->name);
            oci_bind_by_name($stid, ':apel_asesor',$this->lastName);
            oci_bind_by_name($stid, ':est_asesor',$this->status);
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
            $ide=$this->id;
            $res= parent::deleteByCode($ide);

            return $res;
        }

        
    
    }

?>