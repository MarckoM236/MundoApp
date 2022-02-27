<?php 
/* It receives data from the controller and queries the database, returning the result. */
@include_once('../Core/baseModel.php');
    class LiquDetaModel extends BaseModel{

        private $codeLiqu="";
        private $codeAeroline="";
        private $codeFlight="";
        private $routeFlight="";
        private $dateFlight="";
        private $horExFlight="";
        private $horArrFlight="";
        private $obsFlight="";
        private $nameTraveler="";
        private $lastNameTraveler="";
        private $idtraveler="";
        private $datBirTraveler="";
        private $inclusio="";
        private $notInclusio="";
        private $concept="";
        private $valUnConcept="";
        private $quanConcept="";
        private $totConcept="";
        private $baseDesc="";
        private $valDesc="";
        private $respuesta= array();

/*         public function __construct() {
            
        }
 */
         public function __construct($cl,$ca,$cf,$rf,$df,$hef,$haf,$of,$nt,$lnt,$it,$dbt,$in,$nin,$co,$vuco,$qco,$tco,$bdes,$vdes) {
            $table="liquidac";
            parent::__construct($table);
            $this->codeLiqu=$cl;
            $this->codeAeroline=$ca;
            $this->codeFlight=$cf;
            $this->routeFlight=$rf;
            $this->dateFlight=$df;
            $this->horExFlight=$hef;
            $this->horArrFlight=$haf;
            $this->obsFlight=$of;
            $this->nameTraveler=$nt;
            $this->lastNameTraveler=$lnt;
            $this->idTraveler=$it;
            $this->datBirTraveler=$dbt;
            $this->inclusio=$in;
            $this->notInclusio=$nin;
            $this->concept=$co;
            $this->valUnConcept=$vuco;
            $this->quanConcept=$qco;
            $this->totConcept=$tco;
            $this->baseDesc=$bdes;
            $this->valDesc=$vdes;
        }

        //getters
        public function setCodeLiqu($val){
            $this->codeLiqu = $val;
        }
        public function setCodeAeroline($val){
            $this->codeAeroline = $val;
        }
        public function setCodeFlight($val){
            $this->codeFlight = $val;
        }
        public function setRouteFlight($val){
            $this->routeFlight = $val;
        }
        public function setDateFlight($val){
            $this->dateFlight = $val;
        }
        public function setHorExFlight($val){
            $this->horExFlight = $val;
        }
        public function setHorArrFlight($val){
            $this->horArrFlight = $val;
        }
        public function setObsFlight($val){
            $this->obsFlight = $val;
        }
        public function setNameTraveler($val){
            $this->nameTraveler = $val;
        }
        public function setLastNameTraveler($val){
            $this->lastNameTraveler = $val;
        }
        public function setIdTraveler($val){
            $this->idTraveler = $val;
        }
        public function setDatBirTraveler($val){
            $this->datBirTraveler = $val;
        }
        public function setInclusio($val){
            $this->inclusio = $val;
        }
        public function setNotInclusio($val){
            $this->notInclusio = $val;
        }
        public function setConcept($val){
            $this->concept = $val;
        }
        public function setValUnConcept($val){
            $this->valUnConcept = $val;
        }
        public function setQuanConcept($val){
            $this->quanConcept = $val;
        }
        public function setTotConcept($val){
            $this->totConcept = $val;
        }
        public function setBaseDesc($val){
            $this->baseDes = $val;
        }
        public function setValDesc($val){
            $this->valDesc = $val;
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

        public function getRespuesta(){
            return $this->respuesta;
        }
        
        public  function show(){
            $sql = "BEGIN  pkgInclusio.consultaInclusio(:cod_liquDeta,:nomb_liquDeta,:res); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            $cursor= oci_new_cursor($conex);
            oci_bind_by_name($stid, ':cod_liquDeta',$this->code);
            oci_bind_by_name($stid, ':nomb_liquDeta',$this->name);
            oci_bind_by_name($stid, "res", $cursor, -1, OCI_B_CURSOR);
            oci_execute($stid);
            oci_execute($cursor);

            $foo = array();
            while (($row = oci_fetch_array($cursor)) != false) {            
                
                $foo[] = new InclusioModel($row[0],$row[1]);
            }
            
            return $foo;
        }


        public function insert(){

            $data=array();
            $sql = "BEGIN  pkgLiquDeta.insertarLiquDeta(:cod_liquDeta ,:aero_liquDeta ,:vuel_liquDeta ,:ruta_liquDeta ,:fevu_liquDeta ,:hs_liquDeta ,:hll_liquDeta ,:obs_liquDeta ,:nomvi_liquDeta ,:apevi_liquDeta ,:idvi_liquDeta ,:fenavi_liquDeta ,:in_liquDeta ,:nin_liquDeta ,:conc_liquDeta ,:valu_liquDeta ,:cant_liquDeta ,:tot_liquDeta ,:bade_liquDeta ,:vade_liquDeta); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            oci_bind_by_name($stid, ':cod_liquDeta',$this->codeLiqu);
            oci_bind_by_name($stid, ':aero_liquDeta',$this->codeAeroline);
            oci_bind_by_name($stid, ':vuel_liquDeta',$this->codeFlight);
            oci_bind_by_name($stid, ':ruta_liquDeta',$this->routeFlight);
            oci_bind_by_name($stid, ':fevu_liquDeta',$this->dateFlight);
            oci_bind_by_name($stid, ':hs_liquDeta',$this->horExFlight);
            oci_bind_by_name($stid, ':hll_liquDeta',$this->horArrFlight);
            oci_bind_by_name($stid, ':obs_liquDeta',$this->obsFlight);
            oci_bind_by_name($stid, ':nomvi_liquDeta',$this->nameTraveler);
            oci_bind_by_name($stid, ':apevi_liquDeta',$this->lastNameTraveler);
            oci_bind_by_name($stid, ':idvi_liquDeta',$this->idTraveler);
            oci_bind_by_name($stid, ':fenavi_liquDeta',$this->datBirTraveler);
            oci_bind_by_name($stid, ':in_liquDeta',$this->inclusio);
            oci_bind_by_name($stid, ':nin_liquDeta',$this->notInclusio);
            oci_bind_by_name($stid, ':conc_liquDeta',$this->concept);
            oci_bind_by_name($stid, ':valu_liquDeta',$this->valUnConcept);
            oci_bind_by_name($stid, ':cant_liquDeta',$this->quanConcept);
            oci_bind_by_name($stid, ':tot_liquDeta',$this->totConcept);
            oci_bind_by_name($stid, ':bade_liquDeta',$this->baseDesc);
            oci_bind_by_name($stid, ':vade_liquDeta',$this->valDesc);
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
            $sql = "BEGIN  pkgInclusio.actualizarInclusio(:cod_liquDeta,:nomb_liquDeta); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            oci_bind_by_name($stid, ':cod_liquDeta',$this->code);
            oci_bind_by_name($stid, ':nomb_liquDeta',$this->name);
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