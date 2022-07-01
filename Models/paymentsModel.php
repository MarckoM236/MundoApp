<?php 
/* It receives data from the controller and queries the database, returning the result. */
@include_once('../Core/baseModel.php');
    class PaymentsModel extends BaseModel{

        protected $code="";
        private $codeLiqu="";
        private $valuePay="";
        private $datePay="";
        private $userPay="";
        private $typePay="";
        private $bankPay="";
        private $respuesta= array();

/*         public function __construct() {
            
        }
 */
         public function __construct($cod,$codLi,$val,$date,$us,$ty,$ba) {
            $table="pago";
            parent::__construct($table);
            $this->code=$cod;
            $this->codeLiqu=$codLi;
            $this->valuePay=$val;
            $this->datePay=$date;
            $this->typePay=$ty;
            $this->userPay=$us;
            $this->bankPay=$ba;
        }

        //getters
        public function setCode($val){
            $this->code = $val;
        }
        public function setCodeLiqu($val){
            $this->codeLiqu = $val;
        }
        public function setValuePay($val){
            $this->valuePay = $val;
        }
        public function setDatePay($val){
            $this->datePay = $val;
        }
        public function setTypePay($val){
            $this->typePay = $val;
        }
        public function setUserPay($val){
            $this->userPay = $val;
        }
        public function setBankPay($val){
            $this->bankPay = $val;
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
        public function getValuePay(){
            return $this->valuePay;
        }
        public function getDatePay(){
            return $this->datePay;
        }
        public function getTypePay(){
            return $this->typePay;
        }
        public function getUserPay(){
            return $this->userPay;
        }
        public function getBankPay(){
            return $this->bankPay;
        }
        

        public function getRespuesta(){
            return $this->respuesta;
        }
        
        
        public  function show(){
            $sql = "BEGIN  pkgPago.consultaPago(:cod_liqu,:cod_pago,:res); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            $cursor= oci_new_cursor($conex);
            oci_bind_by_name($stid, ':cod_liqu',$this->codeLiqu);
            oci_bind_by_name($stid, ':cod_pago',$this->code);
            oci_bind_by_name($stid, "res", $cursor, -1, OCI_B_CURSOR);
            oci_execute($stid);
            oci_execute($cursor);

            $foo = array();
            while (($row = oci_fetch_array($cursor)) != false) {            
                
                $foo[] = new PaymentsModel($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6]);
            }
            
            return $foo;
        }

        public  function showUltimate(){
            $sql = "BEGIN  pkgPago.consultaUltimoPago(:res); END;";
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
            $sql = "BEGIN  pkgPago.insertarPago(:cod_pago,:cod_liqu,:val_pago,:fech_pago,:user_pago,:tipo_pago,:banco_pago); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            oci_bind_by_name($stid, ':cod_pago',$this->code);
            oci_bind_by_name($stid, ':cod_liqu',$this->codeLiqu);
            oci_bind_by_name($stid, ':val_pago',$this->valuePay);
            oci_bind_by_name($stid, ':fech_pago',$this->datePay);
            oci_bind_by_name($stid, ':user_pago',$this->userPay);
            oci_bind_by_name($stid, ':tipo_pago',$this->typePay);
            oci_bind_by_name($stid, ':banco_pago',$this->bankPay);
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
            $sql = "BEGIN  pkgHotel.actualizarHotel(:cod_hotel,:nomb_hotel,:nit_hotel,:dire_hotel,:tel_hotel,:est_hotel,:email_hotel,:celu_hotel); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            oci_bind_by_name($stid, ':cod_hotel',$this->code);
            oci_bind_by_name($stid, ':nomb_hotel',$this->name);
            oci_bind_by_name($stid, ':nit_hotel',$this->nit);
            oci_bind_by_name($stid, ':dire_hotel',$this->address);
            oci_bind_by_name($stid, ':tel_hotel',$this->phone);
            oci_bind_by_name($stid, ':est_hotel',$this->status);
            oci_bind_by_name($stid, ':email_hotel',$this->email);
            oci_bind_by_name($stid, ':celu_hotel',$this->mobile);
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