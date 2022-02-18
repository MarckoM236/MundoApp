<?php 
/* It receives data from the controller and queries the database, returning the result. */
@include_once('../Core/baseModel.php');
    class TravelerModel extends BaseModel{

        protected $id="";
        private $name="";
        private $lastName="";
        private $birthDate="";
        private $respuesta= array();

/*         public function __construct() {
            
        }
 */
         public function __construct($id,$name,$lastName,$birthDate) {
            $table="viajero";
            parent::__construct($table);
            $this->id=$id;
            $this->name=$name;
            $this->lastName=$lastName;
            $this->birthDate=$birthDate;
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
        public function setBirthDate($val){
            $this->birthDate = $val;
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
        public function getBirthDate(){
            return $this->birthDate;
        }

        public function getRespuesta(){
            return $this->respuesta;
        }
        
        public  function show(){
            $sql = "BEGIN  pkgViajero.consultaViajero(:id_viajero,:nomb_viajero,:res); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            $cursor= oci_new_cursor($conex);
            oci_bind_by_name($stid, ':id_viajero',$this->id);
            oci_bind_by_name($stid, ':nomb_viajero',$this->name);
            oci_bind_by_name($stid, "res", $cursor, -1, OCI_B_CURSOR);
            oci_execute($stid);
            oci_execute($cursor);

            $foo = array();
            //$foo[] = new TravelerModel("1144063427","MARCO","MARCO","26/07/1993");
            while (($row = oci_fetch_array($cursor)) != false) {            
                
                $foo[] = new TravelerModel($row[0],$row[1],$row[2],$row[3]);
                
            }
            
            return $foo;
        }

        public function insert(){

            $data=array();
            //$sql = "BEGIN  pkgViajero.actualizarViajero(12,'TARA','VELASCO','25/05/2015'); END;";
            $sql = "BEGIN  pkgViajero.insertarViajero(:id_viajero,:nomb_viajero,:ape_viajero,:fecNa); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            oci_bind_by_name($stid, ':id_viajero',$this->id);
            oci_bind_by_name($stid, ':nomb_viajero',$this->name);
            oci_bind_by_name($stid, ':ape_viajero',$this->lastName);
            oci_bind_by_name($stid, ':fecNa',$this->birthDate);
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
            $sql = "BEGIN  pkgViajero.actualizarViajero(:id_viajero,:nomb_viajero,:ape_viajero,:fecNa); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            oci_bind_by_name($stid, ':id_viajero',$this->id);
            oci_bind_by_name($stid, ':nomb_viajero',$this->name);
            oci_bind_by_name($stid, ':ape_viajero',$this->lastName);
            oci_bind_by_name($stid, ':fecNa',$this->birthDate);
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
            $id=$this->id;
            $res= parent::deleteByCode($id);

            return $res;
        }

        
    
    }

?>