<?php 
/* It receives data from the controller and queries the database, returning the result. */
@include_once('../Core/baseModel.php');
    class BloqdetaModel extends BaseModel{

        protected $code="";
        private $codeLiqu="";
        private $idtraveler="";
        private $nomTraveler="";
        private $apeTraveler="";
        private $dateFenaTraveler="";
        private $respuesta= array();

/*         public function __construct() {
            
        }
 */
         public function __construct($cod,$codLiq,$idTra,$nomTra,$apeTra,$fecnaTra) {
            $table="bloqdeta";
            parent::__construct($table);
            $this->code=$cod;
            $this->codeLiqu=$codLiq;
            $this->idTraveler=$idTra;
            $this->nomTraveler=$nomTra;
            $this->apeTraveler=$apeTra;
            $this->dateFenaTraveler=$fecnaTra;
        }

        //getters
        public function setCode($val){
            $this->code = $val;
        }
        public function setCodeLiqu($val){
            $this->codeLiqu = $val;
        }
        public function setIdTraveler($val){
            $this->idTraveler = $val;
        }
        public function setNomTraveler($val){
            $this->nomTraveler = $val;
        }
        public function setApeTraveler($val){
            $this->apeTraveler = $val;
        }
        public function setDateFenaTraveler($val){
            $this->dateFenaTraveler = $val;
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
        public function getIdTraveler(){
            return $this->idTraveler;
        }
        public function getNomTraveler(){
            return $this->nomTraveler;
        }
        public function getApeTraveler(){
            return $this->apeTraveler;
        }
        public function getDateFenaTraveler(){
            return $this->dateFenaTraveler;
        }

        public function getRespuesta(){
            return $this->respuesta;
        }
        
        public  function show(){
            $sql = "BEGIN  pkgBloqueDeta.consultaBloqueDeta(:cod_bloqueo,:res); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            $cursor= oci_new_cursor($conex);
            oci_bind_by_name($stid, ':cod_bloqueo',$this->code);
            oci_bind_by_name($stid, ":res", $cursor, -1, OCI_B_CURSOR);
            oci_execute($stid);
            oci_execute($cursor);

            $foo = array();
            while (($row = oci_fetch_array($cursor)) != false) {            
                
                $foo[] = new BloqdetaModel($row[0],$row[1],$row[2],$row[3],$row[4],$row[5]);
            }
            
            return $foo;
        }

        public function insert(){

            $data=array();
            $sql = "BEGIN  pkgBloqueDeta.insertarBloqueDeta(:cod_bloqueo,:cod_liqu,:id_user,:nom_traveler,:ape_traveler,:fecna_traveler); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            oci_bind_by_name($stid, ':cod_bloqueo',$this->code);
            oci_bind_by_name($stid, ':cod_liqu',$this->codeLiqu);
            oci_bind_by_name($stid, ':id_user',$this->idTraveler);
            oci_bind_by_name($stid, ':nom_traveler',$this->nomTraveler);
            oci_bind_by_name($stid, ':ape_traveler',$this->apeTraveler);
            oci_bind_by_name($stid, ':fecna_traveler',$this->dateFenaTraveler);
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
            $sql = "BEGIN  pkgConcepto.actualizarConcepto(:cod_bloqueo,:cod_liqu,:id_user,:nom_traveler,:ape_traveler,:fecna_traveler); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            oci_bind_by_name($stid, ':cod_bloqueo',$this->code);
            oci_bind_by_name($stid, ':cod_liqu',$this->codeLiqu);
            oci_bind_by_name($stid, ':id_user',$this->idTraveler);
            oci_bind_by_name($stid, ':nom_traveler',$this->nomTraveler);
            oci_bind_by_name($stid, ':ape_traveler',$this->apeTraveler);
            oci_bind_by_name($stid, ':fecna_traveler',$this->dateFenaTraveler);
            @$res=oci_execute($stid);
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