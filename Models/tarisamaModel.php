<?php 
/* It receives data from the controller and queries the database, returning the result. */
@include_once('../Core/baseModel.php');
    class TarisamaModel extends BaseModel{

        protected $codHotel="";
        private $codTipAlim="";
        private $codAcom="";
        private $feinVig="";
        private $fefiVig="";
        private $feinExe="";
        private $fefiExe="";
        private $value="";
        private $user="";
        private $respuesta= array();

/*         public function __construct() {
            
        }
 */
         public function __construct($ch,$cta,$ca,$fiv,$ffv,$fie,$ffe,$val,$us) {
            $table="tarisama";
            parent::__construct($table);
            $this->codHotel=$ch;
            $this->codTipAlim=$cta;
            $this->codAcom=$ca;
            $this->feinVig=$fiv;
            $this->fefiVig=$ffv;
            $this->feinExe=$fie;
            $this->fefiExe=$ffe;
            $this->value=$val;
            $this->user=$us;
        }

        //getters
        public function setCodHotel($val){
            $this->codHotel = $val;
        }
        public function setCodTipAlim($val){
            $this->codTipAlim = $val;
        }
        public function setCodAcom($val){
            $this->codAcom = $val;
        }
        public function setFeinVig($val){
            $this->feinVig = $val;
        }
        public function setFefiVig($val){
            $this->fefiVig = $val;
        }
        public function setFeinExe($val){
            $this->feinExe = $val;
        }
        public function setFefiExe($val){
            $this->fefiExe = $val;
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

        //setters
        public function getCodHotel(){
            return $this->codHotel;
        } 
        public function getCodTipAlim(){
            return $this->codTipAlim;
        }
        public function getCodAcom(){
            return $this->codAcom;
        }
        public function getFeinVig(){
            return $this->feinVig;
        }
        public function getFefiVig(){
            return $this->fefiVig;
        }
        public function getFeinExe(){
            return $this->feinExe;
        }
        public function getFefiExe(){
            return $this->fefiExe;
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
            $sql = "BEGIN  pkgTariSama.consultaTariSama(:cod_hotel,:res); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            $cursor= oci_new_cursor($conex);
            oci_bind_by_name($stid, ':cod_hotel',$this->codHotel);
            oci_bind_by_name($stid, "res", $cursor, -1, OCI_B_CURSOR);
            oci_execute($stid);
            oci_execute($cursor);

            $foo = array();
            while (($row = oci_fetch_array($cursor)) != false) {            
                
                $foo[] = new TarisamaModel($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8]);
            }
            
            return $foo;
        }

        

        public function insert(){

            $data=array();
            $sql = "BEGIN  pkgTariSama.insertarTariSama(:cod_hotel,:cod_tipAlim,:cod_acom,:fein_vig,:fefi_vig,:fein_exe,:fefi_exe,:val_tariandr,:user_tariandr); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            oci_bind_by_name($stid, ':cod_hotel',$this->codHotel);
            oci_bind_by_name($stid, ':cod_tipAlim',$this->codTipAlim);
            oci_bind_by_name($stid, ':cod_acom',$this->codAcom);
            oci_bind_by_name($stid, ':fein_vig',$this->feinVig);
            oci_bind_by_name($stid, ':fefi_vig',$this->fefiVig);
            oci_bind_by_name($stid, ':fein_exe',$this->feinExe);
            oci_bind_by_name($stid, ':fefi_exe',$this->fefiExe);
            oci_bind_by_name($stid, ':val_tariandr',$this->value);
            oci_bind_by_name($stid, ':user_tariandr',$this->user);
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
            $sql = "BEGIN  pkgTariSama.actualizarTariSama(:cod_hotel,:cod_tipAlim,:cod_Acom,:fein_vig,:fefi_vig,:fein_exe,:fefi_exe,:val_tariandr,:user_tariandr); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            oci_bind_by_name($stid, ':cod_hotel',$this->codhotel);
            oci_bind_by_name($stid, ':cod_tipAlim',$this->codTipAlim);
            oci_bind_by_name($stid, ':val_Acom',$this->codAcom);
            oci_bind_by_name($stid, ':fein_vig',$this->feinVig);
            oci_bind_by_name($stid, ':fefi_vig',$this->fefiVig);
            oci_bind_by_name($stid, ':fein_exe',$this->feinExe);
            oci_bind_by_name($stid, ':fefi_exe',$this->fefiExe);
            oci_bind_by_name($stid, ':val_tariandr',$this->value);
            oci_bind_by_name($stid, ':user_tariandr',$this->user);
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