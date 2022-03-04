<?php 
/* It receives data from the controller and queries the database, returning the result. */
@include_once('../Core/baseModel.php');
    class LiquidacModel extends BaseModel{

        protected $tipoLiqu="";
        private $fecSis="";
        private $codeLiqu="";
        private $codeAgency="";
        private $codeSeller="";
        private $codeAdviser="";
        private $codeDestination="";
        private $codeHotel="";
        private $codeAlim="";
        private $codePlan="";
        private $codeAcomodac="";
        private $valTotTraveler="";
        private $valDes="";
        private $valIvaLiqu="";
        private $valIcaLiqu="";
        private $valRtfLiqu="";
        private $valTotEmp="";
        private $pl50Liqu="";
        private $pl100Liqu="";
        private $idUser="";
        private $numRes="";
        private $respuesta= array();

/*         public function __construct() {
            
        }
 */
         public function __construct($tl,$fs,$cl,$ca,$cs,$cad,$cd,$ch,$cal,$cp,$cac,$vt,$vd,$vi,$vic,$vrt,$ve,$p50,$p100,$idu,$nr) {
            $table="liquidac";
            parent::__construct($table);
            $this->tipoLiqu=$tl;
            $this->fecSis=$fs;
            $this->codeLiqu=$cl;
            $this->codeAgency=$ca;
            $this->codeSeller=$cs;
            $this->codeAdviser=$cad;
            $this->codeDestination=$cd;
            $this->codeHotel=$ch;
            $this->codeAlim=$cal;
            $this->codePlan=$cp;
            $this->codeAcomodac=$cac;
            $this->valTotTraveler=$vt;
            $this->valDes=$vd;
            $this->valIvaLiqu=$vi;
            $this->valIcaLiqu=$vic;
            $this->valRtfLiqu=$vrt;
            $this->valTotEmp=$ve;
            $this->pl50Liqu=$p50;
            $this->pl100Liqu=$p100;
            $this->idUser=$idu;
            $this->numRes=$nr;
        }

        //getters
        public function setTipoLiqu($val){
            $this->tipoLiqu = $val;
        }
        public function setFecSis($val){
            $this->fecSis = $val;
        }
        public function setCodeLiqu($val){
            $this->codeLiqu = $val;
        }
        public function setCodeAgency($val){
            $this->codeAgency = $val;
        }
        public function setCodeSeller($val){
            $this->codeSeller = $val;
        }
        public function setCodeAdviser($val){
            $this->codeAdviser = $val;
        }
        public function setCodeDestination($val){
            $this->codeDestination = $val;
        }
        public function setCodeHotel($val){
            $this->codeHotel = $val;
        }
        public function setCodeAlim($val){
            $this->codeAlim = $val;
        }
        public function setCodePlan($val){
            $this->codePlan = $val;
        }
        public function setCodeAcomodac($val){
            $this->codeAcomodac = $val;
        }
        public function setValTotTraveler($val){
            $this->valTotTraveler = $val;
        }
        public function setValDes($val){
            $this->valDes = $val;
        }
        public function setValIvaLiqu($val){
            $this->valIvaLiqu = $val;
        }
        public function setValRtfLiqu($val){
            $this->valRtfLiqu = $val;
        }
        public function setValIcaLiqu($val){
            $this->valIcaLiqu = $val;
        }
        public function setValTotEmp($val){
            $this->valTotEmp = $val;
        }
        public function setPl50Liqu($val){
            $this->pl50Liqu = $val;
        }
        public function setPl100Liqu($val){
            $this->pl100Liqu = $val;
        }
        public function setIdUser($val){
            $this->idUser = $val;
        }
        
        public function setRespuesta($val){
            $this->respuesta=$val;
        }
        public function setNumRes($val){
            $this->numRes=$val;
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
            $sql = "BEGIN  pkgInclusio.consultaInclusio(:cod_liquidac,:nomb_liquidac,:res); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            $cursor= oci_new_cursor($conex);
            oci_bind_by_name($stid, ':cod_liquidac',$this->code);
            oci_bind_by_name($stid, ':nomb_liquidac',$this->name);
            oci_bind_by_name($stid, "res", $cursor, -1, OCI_B_CURSOR);
            oci_execute($stid);
            oci_execute($cursor);

            $foo = array();
            while (($row = oci_fetch_array($cursor)) != false) {            
                
                $foo[] = new InclusioModel($row[0],$row[1]);
            }
            
            return $foo;
        }

        public  function showUltimate(){
            $sql = "BEGIN  pkgLiquidac.consultaUltimoLiquidac(:res); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            $cursor= oci_new_cursor($conex);
            oci_bind_by_name($stid, "res", $cursor, -1, OCI_B_CURSOR);
            oci_execute($stid);
            oci_execute($cursor);

            $foo = "";
            while (($row = oci_fetch_array($cursor)) != false) {            
                
                $foo=$row[0];
            }
            
            return $foo;
        }

        public function insert(){

            $data=array();
            $sql = "BEGIN  pkgLiquidac.insertarLiquidac(:cod_liquidac,:tipo_liquidac,:fech_liquidac,:agen_liquidac,:vend_liquidac,:dest_liquidac,:hote_liquidac ,:tipoAlim_liquidac ,:plan_liquidac ,:acom_liquidac ,:descu_liquidac ,:valPa_liquidac ,:iva_liquidac ,:ica_liquidac ,:rtf_liquidac ,:valEm_liquidac ,:pl50_liquidac ,:pl100_liquidac ,:usua_liquidac,:numRes_liquidac); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            oci_bind_by_name($stid, ':cod_liquidac',$this->codeLiqu);
            oci_bind_by_name($stid, ':tipo_liquidac',$this->tipoLiqu);
            oci_bind_by_name($stid, ':fech_liquidac',$this->fecSis);
            oci_bind_by_name($stid, ':agen_liquidac',$this->codeAgency);
            oci_bind_by_name($stid, ':vend_liquidac',$this->codeSeller);
            oci_bind_by_name($stid, ':dest_liquidac',$this->codeDestination);
            oci_bind_by_name($stid, ':hote_liquidac',$this->codeHotel);
            oci_bind_by_name($stid, ':tipoAlim_liquidac',$this->codeAlim);
            oci_bind_by_name($stid, ':plan_liquidac',$this->codePlan);
            oci_bind_by_name($stid, ':acom_liquidac',$this->codeAcomodac);
            oci_bind_by_name($stid, ':descu_liquidac',$this->valDes);
            oci_bind_by_name($stid, ':valPa_liquidac',$this->valTotTraveler);
            oci_bind_by_name($stid, ':iva_liquidac',$this->valIvaLiqu);
            oci_bind_by_name($stid, ':ica_liquidac',$this->valIcaLiqu);
            oci_bind_by_name($stid, ':rtf_liquidac',$this->valRtfLiqu);
            oci_bind_by_name($stid, ':valEm_liquidac',$this->valTotEmp);
            oci_bind_by_name($stid, ':pl50_liquidac',$this->pl50Liqu);
            oci_bind_by_name($stid, ':pl100_liquidac',$this->pl100Liqu);
            oci_bind_by_name($stid, ':usua_liquidac',$this->idUser);
            oci_bind_by_name($stid, ':numRes_liquidac',$this->numRes);
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
            $sql = "BEGIN  pkgInclusio.actualizarInclusio(:cod_liquidac,:nomb_liquidac); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            oci_bind_by_name($stid, ':cod_liquidac',$this->code);
            oci_bind_by_name($stid, ':nomb_liquidac',$this->name);
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