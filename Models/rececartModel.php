<?php 
/* It receives data from the controller and queries the database, returning the result. */
@include_once('../Core/baseModel.php');
    class RececartModel extends BaseModel{

        protected $codOperator="";
        private $receptivo="";
        private $codHotel="";
        private $zona="";
        private $hoinDiu="";
        private $hofiDiu="";
        private $hoinNoc="";
        private $hofiNoc="";
        private $diurno="";
        private $nocturno="";
        private $value="";
        private $user="";
        private $respuesta= array();

/*         public function __construct() {
            
        }
 */
         public function __construct($co,$re,$ch,$zo,$hid,$hfd,$hin,$hfn,$di,$no,$val,$us) {
            $table="rececart";
            parent::__construct($table);
            $this->codOperator=$co;
            $this->receptivo=$re;
            $this->codHotel=$ch;
            $this->zona=$zo;
            $this->hoinDiu=$hid;
            $this->hofiDiu=$hfd;
            $this->hoinNoc=$hin;
            $this->hofiNoc=$hfn;
            $this->diurno=$di;
            $this->nocturno=$no;
            $this->value=$val;
            $this->user=$us;
        }

        //Setters
        public function setCodOperator($val){
            $this->codOperator = $val;
        }
        public function setReceptivo($val){
            $this->receptivo = $val;
        }
        public function setCodHotel($val){
            $this->codHotel = $val;
        }
        public function setZona($val){
            $this->zona = $val;
        }
        public function setInicioDiurno($val){
            $this->hoinDiu = $val;
        }
        public function setFinDiurno($val){
            $this->hofiDiu = $val;
        }
        public function setInicioNocturno($val){
            $this->hoinNoc = $val;
        }
        public function setFinNocturno($val){
            $this->hofiNoc = $val;
        }
        public function setDiurno($val){
            $this->diurno = $val;
        }
        public function setNocturno($val){
            $this->nocturno = $val;
        }
        public function setValue($val){
            $this->value = $val;
        }
        public function setUser($val){
            $this->user = $val;
        }
        

        public function setRespuesta($val){
            $this->respuesta=$val;
        }

        //Getters
        public function getCodHotel(){
            return $this->codHotel;
        } 
        public function getCodOperator(){
            return $this->codOperator;
        }
        public function getReceptivo(){
            return $this->receptivo;
        }
        public function getZona(){
            return $this->zona;
        }
        public function getInicioDiurno(){
            return $this->hoinDiu;
        }
        public function getFinDiurno(){
            return $this->hofiDiu;
        }
        public function getInicioNocturno(){
            return $this->hoinNoc;
        }
        public function getFinNocturno(){
            return $this->hofiNoc;
        }
        public function getDiurno(){
            return $this->diurno;
        }
        public function getNocturno(){
            return $this->nocturno;
        }
        public function getValue(){
            return $this->value;
        }
        public function getUser(){
            return $this->user;
        }
        

        public function getRespuesta(){
            return $this->respuesta;
        }
        
        
        public  function show(){
            $sql = "BEGIN  pkgReceCart.consultaReceCart(:cod_oper,:receptivo,:res); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            $cursor= oci_new_cursor($conex);
            oci_bind_by_name($stid, ':cod_oper',$this->codOperator);
            oci_bind_by_name($stid, ':receptivo',$this->receptivo);
            oci_bind_by_name($stid, "res", $cursor, -1, OCI_B_CURSOR);
            oci_execute($stid);
            oci_execute($cursor);

            $foo = array();
            while (($row = oci_fetch_array($cursor)) != false) {            
                
                $foo[] = new RececartModel($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9],$row[10],$row[11]);
            }
            
            return $foo;
        }

        

        public function insert(){

            $data=array();
            $sql = "BEGIN  pkgReceCart.insertarReceCart(:cod_oper,:receptivo,:cod_hotel,:zona,:hoin_diurno,:hofi_diurno,:hoin_nocturno,:hofi_nocturno,:diurno,:nocturno,:val_rececart,:user_rececart); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            oci_bind_by_name($stid, ':cod_oper',$this->codOperator);
            oci_bind_by_name($stid, ':receptivo',$this->receptivo);
            oci_bind_by_name($stid, ':cod_hotel',$this->codHotel);
            oci_bind_by_name($stid, ':zona',$this->zona);
            oci_bind_by_name($stid, ':hoin_diurno',$this->hoinDiu);
            oci_bind_by_name($stid, ':hofi_diurno',$this->hofiDiu);
            oci_bind_by_name($stid, ':hoin_nocturno',$this->hoinNoc);
            oci_bind_by_name($stid, ':hofi_nocturno',$this->hofiNoc);
            oci_bind_by_name($stid, ':diurno',$this->diurno);
            oci_bind_by_name($stid, ':nocturno',$this->nocturno);
            oci_bind_by_name($stid, ':val_rececart',$this->value);
            oci_bind_by_name($stid, ':user_rececart',$this->user);
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
            $sql = "BEGIN  pkgReceCart.actualizarReceCart(:cod_oper,:receptivo,:cod_hotel,:zona,:hoin_diurno,:hofi_diurno,:hoin_nocturno,:hofi_nocturno,:diurno,:nocturno,:val_rececart,:user_rececart); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            oci_bind_by_name($stid, ':cod_oper',$this->codOperator);
            oci_bind_by_name($stid, ':receptivo',$this->receptivo);
            oci_bind_by_name($stid, ':cod_hotel',$this->codHotel);
            oci_bind_by_name($stid, ':zona',$this->zona);
            oci_bind_by_name($stid, ':hoin_diurno',$this->hoinDiu);
            oci_bind_by_name($stid, ':hofi_diurno',$this->hofiDiu);
            oci_bind_by_name($stid, ':hoin_nocturno',$this->hoinNoc);
            oci_bind_by_name($stid, ':hofi_nocturno',$this->hofiNoc);
            oci_bind_by_name($stid, ':diurno',$this->diurno);
            oci_bind_by_name($stid, ':nocturno',$this->nocturno);
            oci_bind_by_name($stid, ':val_rececart',$this->value);
            oci_bind_by_name($stid, ':user_rececart',$this->user);
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
            $cod1=$this->codOperator;
            $cod2=$this->receptivo;
            $res= parent::deleteByCodeTwo($cod1,$cod2,"oper","receptivo");

            return $res;
        }

        
    
    }

?>