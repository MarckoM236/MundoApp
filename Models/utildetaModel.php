<?php 
/* It receives data from the controller and queries the database, returning the result. */
@include_once('../Core/baseModel.php');
    class UtildetaModel extends BaseModel{

        protected $codeUtility="";
        private $valLiqu="";
        private $valTicket="";
        private $valHotel="";
        private $valAsisMed="";
        private $valReceptivo="";
        private $valUtility="";
        private $respuesta= array();

/*         public function __construct() {
            
        }
 */
         public function __construct($codU,$valL,$valT,$valH,$valAM,$valR,$valU) {
            $table="utildeta";
            parent::__construct($table);
            $this->codeUtility=$codU;
            $this->valLiqu=$valL;
            $this->valTicket=$valT;
            $this->valHotel=$valH;
            $this->valAsisMed=$valAM;
            $this->valReceptivo=$valR;
            $this->valUtility=$valU;
        }

        //setters
        public function setCodeUtility($val){
            $this->codeUtility = $val;
        }
        public function setValLiqu($val){
            $this->valLiqu = $val;
        }
        public function setValTicket($val){
            $this->valTicket = $val;
        }
        public function setValHotel($val){
            $this->valHotel = $val;
        }
        public function setValAsisMed($val){
            $this->valAsisMed = $val;
        }
        public function setValReceptivo($val){
            $this->valReceptivo = $val;
        }
        public function setValUtility($val){
            $this->valUtility = $val;
        }

        public function setRespuesta($val){
            $this->respuesta=$val;
        }

        //getters
        public function getCodeUtility(){
            return $this->codeUtility;
        } 
        public function getValLiqu(){
            return $this->valLiqu;
        }
        public function getValTicket(){
            return $this->valTicket;
        }
        public function getValHotel(){
            return $this->valHotel;
        }
        public function getValAsisMed(){
            return $this->valAsisMed;
        }
        public function getValReceptivo(){
            return $this->valReceptivo;
        }
        public function getValUtility(){
            return $this->valUtility;
        }
        
        public function getRespuesta(){
            return $this->respuesta;
        }
        
        
        public  function show(){
            $sql = "BEGIN  pkgUtildeta.consultaUtildeta(:cod_utilidad,:res); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            $cursor= oci_new_cursor($conex);
            oci_bind_by_name($stid, ':cod_utilidad',$this->codeUtility);
            oci_bind_by_name($stid, "res", $cursor, -1, OCI_B_CURSOR);
            oci_execute($stid);
            oci_execute($cursor);

            $foo = array();
            while (($row = oci_fetch_array($cursor)) != false) {            
                
                $foo[] = new UtildetaModel($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6]);
            }
            
            return $foo;
        }


        public function insert(){

            $data=array();
            $sql = "BEGIN  pkgUtildeta.insertarUtildeta(:cod_utilidad,:val_liquidacion,:val_tiquetes,:val_hotel,:val_asisMedica,:val_receptivos,:val_utilidad); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            oci_bind_by_name($stid, ':cod_utilidad',$this->codeUtility);
            oci_bind_by_name($stid, ':val_liquidacion',$this->valLiqu);
            oci_bind_by_name($stid, ':val_tiquetes',$this->valTicket);
            oci_bind_by_name($stid, ':val_hotel',$this->valHotel);
            oci_bind_by_name($stid, ':val_asisMedica',$this->valAsisMed);
            oci_bind_by_name($stid, ':val_receptivos',$this->valReceptivo);
            oci_bind_by_name($stid, ':val_utilidad',$this->valUtility);
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
            $sql = "BEGIN  pkgUtildeta.actualizarUtildeta(:cod_utilidad,:val_liquidacion,:val_tiquetes,:val_hotel,:val_asisMedica,:val_receptivos,:val_utilidad); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            oci_bind_by_name($stid, ':cod_utilidad',$this->codeUtility);
            oci_bind_by_name($stid, ':val_liquidacion',$this->valLiqu);
            oci_bind_by_name($stid, ':val_tiquetes',$this->valTicket);
            oci_bind_by_name($stid, ':val_hotel',$this->valHotel);
            oci_bind_by_name($stid, ':val_asisMedica',$this->valAsisMed);
            oci_bind_by_name($stid, ':val_receptivos',$this->valReceptivo);
            oci_bind_by_name($stid, ':val_utilidad',$this->valUtility);
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
            $cod=$this->codeUtility;
            $res= parent::deleteByCode($cod);

            return $res;
        }

        
    
    }

?>