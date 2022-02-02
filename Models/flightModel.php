<?php 
/* It receives data from the controller and queries the database, returning the result. */
@include_once('../Core/baseModel.php');
    class FlightModel extends BaseModel{

        protected $num="";
        private $route="";
        private $status="";
        private $codAeroline="";
        private $aeroline="";
        private $respuesta= array();

/*         public function __construct() {
            
        }
 */
         public function __construct($codAeroline,$num,$route,$sta,$aer) {
            $table="vuelo";
            parent::__construct($table);
            $this->num=$num;
            $this->route=$route;
            $this->status=$sta;
            $this->codAeroline=$codAeroline;
            $this->aeroline=$aer;
        }

        //getters
        public function setNum($val){
            $this->num = $val;
        }
        public function setRoute($val){
            $this->route = $val;
        }
        public function setStatus($val){
            $this->status = $val;
        }
        public function setCodAeroline($val){
            $this->codAeroline = $val;
        }
        
        public function setRespuesta($val){
            $this->respuesta=$val;
        }

        //setters
        public function getNum(){
            return $this->num;
        } 
        public function getRoute(){
            return $this->route;
        }
        public function getStatus(){
            return $this->status;
        }
        public function getCodAeroline(){
            return $this->codAeroline;
        }
        public function getAeroline(){
            return $this->aeroline;
        }

        public function getRespuesta(){
            return $this->respuesta;
        }
        
        
        public  function show(){
            $sql = "BEGIN  pkgVuelo.consultaVuelo(:num_vuelo,:ruta_vuelo,:res); END;";
            $conex = $this->db();
            $stnum = oci_parse($conex, $sql);
            $cursor= oci_new_cursor($conex);
            oci_bind_by_name($stnum, ':num_vuelo',$this->num);
            oci_bind_by_name($stnum, ':ruta_vuelo',$this->route);
            oci_bind_by_name($stnum, "res", $cursor, -1, OCI_B_CURSOR);
            oci_execute($stnum);
            oci_execute($cursor);

            $foo = array();
            while (($row = oci_fetch_array($cursor)) != false) {            
                
                $foo[] = new FlightModel($row[0],$row[1],$row[2],$row[3],$row[4]);
                
            }
            return $foo;
        }

        public function insert(){

            $data=array();
            $sql = "BEGIN  pkgVuelo.insertarVuelo(:cod_aeroline,:num_vuelo,:ruta_vuelo,:est_vuelo); END;";
            $conex = $this->db();
            $stnum = oci_parse($conex, $sql);
            oci_bind_by_name($stnum, ':cod_aeroline',$this->codAeroline);
            oci_bind_by_name($stnum, ':num_vuelo',$this->num);
            oci_bind_by_name($stnum, ':ruta_vuelo',$this->route);
            oci_bind_by_name($stnum, ':est_vuelo',$this->status);            
            @$res=oci_execute($stnum);

             if($res){
                 $data['status'] = 'ok';
                 $data['result'] = 'Registro exitoso';
             }
             else{
                 $data['status'] = 'fail';
                 $data['result'] = 'No se pudo insertar';
             }

             oci_free_statement($stnum);
    
            return $data;
            
        }
         
        function update(){
            $data=array();
            $sql = "BEGIN  pkgVuelo.actualizarVuelo(:cod_aeroline,:num_vuelo,:ruta_vuelo,:est_vuelo); END;";
            $conex = $this->db();
            $stnum = oci_parse($conex, $sql);
            oci_bind_by_name($stnum, ':cod_aeroline',$this->codAeroline);
            oci_bind_by_name($stnum, ':num_vuelo',$this->num);
            oci_bind_by_name($stnum, ':ruta_vuelo',$this->route);
            oci_bind_by_name($stnum, ':est_vuelo',$this->status);  
            @$res=oci_execute($stnum);

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
            $num=$this->num;
            $res= parent::deleteByCode($num);

            return $res;
        }

        
    
    }

?>