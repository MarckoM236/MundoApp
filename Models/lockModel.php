<?php 
/* It receives data from the controller and queries the database, returning the result. */
@include_once('../Core/baseModel.php');
    class LockModel extends BaseModel{

        protected $code="";
        private $origen="";
        private $destination="";
        private $dateIn="";
        private $dateFi="";
        private $aeroline="";
        private $flightI="";
        private $flightR="";
        private $amount="";
        private $amountFree="";
        private $balance="";
        private $tariff="";
        private $user="";
        private $respuesta= array();

/*         public function __construct() {
            
        }
 */
         public function __construct($cod,$ori,$dest,$di,$df,$aer,$fliI,$fliR,$amo,$amoF,$bal,$tar,$us) {
            $table="bloqueo";
            parent::__construct($table);
            $this->code=$cod;
            $this->origen=$ori;
            $this->destination=$dest;
            $this->dateIn=$di;
            $this->dateFi=$df;
            $this->aeroline=$aer;
            $this->flightI=$fliI;
            $this->flightR=$fliR;
            $this->amount=$amo;
            $this->amountFree=$amoF;
            $this->balance=$bal;
            $this->tariff=$tar;
            $this->user=$us;

        }

        //getters
        public function setCode($val){
            $this->code = $val;
        }
        public function setOrigen($val){
            $this->origen = $val;
        }
        public function setDestination($val){
            $this->destination = $val;
        }
        public function setDateIn($val){
            $this->dateIn = $val;
        }
        public function setDateFi($val){
            $this->dateFi = $val;
        }
        public function setAeroline($val){
            $this->aeroline = $val;
        }
        public function setFlightI($val){
            $this->flightI = $val;
        }
        public function setFlightR($val){
            $this->flightR = $val;
        }
        public function setAmount($val){
            $this->amount = $val;
        }
        public function setAmountFree($val){
            $this->amountFree = $val;
        }
        public function setBalance($val){
            $this->balance = $val;
        }
        public function setTariff($val){
            $this->tariff = $val;
        }
        public function setUser($val){
            $this->user = $val;
        }
        
        public function setRespuesta($val){
            $this->respuesta=$val;
        }

        //setters
        public function getCode(){
            return $this->code;
        } 
        public function getOrigen(){
            return $this->origen;
        }
        public function getDestination(){
            return $this->destination;
        }
        public function getDateIn(){
            return $this->dateIn;
        }
        public function getDateFi(){
            return $this->dateFi;
        }
        public function getAeroline(){
            return $this->aeroline;
        }
        public function getFlightI(){
            return $this->flightI;
        }
        public function getFlightR(){
            return $this->flightR;
        }
        public function getAmount(){
            return $this->amount;
        }
        public function getAmountFree(){
            return $this->amountFree;
        }
        public function getBalance(){
            return $this->balance;
        }
        public function getTariff(){
            return $this->tariff;
        }
        public function getUser(){
            return $this->user;
        }

        public function getRespuesta(){
            return $this->respuesta;
        }
        
        public  function show(){
            $sql = "BEGIN  pkgBloqueo.consultaBloqueo(:cod_aeroline,:cod_origen,:res); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            $cursor= oci_new_cursor($conex);
            oci_bind_by_name($stid, ':cod_aeroline',$this->aeroline);
            oci_bind_by_name($stid, ':cod_origen',$this->origen);
            oci_bind_by_name($stid, "res", $cursor, -1, OCI_B_CURSOR);
            oci_execute($stid);
            oci_execute($cursor);

            $foo = array();
            while (($row = oci_fetch_array($cursor)) != false) {            
                
                $foo[] = new LockModel($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9],$row[10],$row[11],$row[12]);
            }
            
            return $foo;
        }

        public function insert(){

            $data=array();
            $sql = "BEGIN  pkgBloqueo.insertarBloqueo(:cod_bloqueo, :orig_bloqueo, :dest_bloqueo, :fein_bloqueo, :fefi_bloqueo, :aero_bloqueo, :vuid_bloqueo, :vure_bloqueo, :cant_bloqueo, :cadi_bloqueo, :sald_bloqueo, :tari_bloqueo, :user_bloqueo); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            oci_bind_by_name($stid, ':cod_bloqueo',$this->code);
            oci_bind_by_name($stid, ':orig_bloqueo',$this->origen);
            oci_bind_by_name($stid, ':dest_bloqueo',$this->destination);
            oci_bind_by_name($stid, ':fein_bloqueo',$this->dateIn);
            oci_bind_by_name($stid, ':fefi_bloqueo',$this->dateFi);
            oci_bind_by_name($stid, ':aero_bloqueo',$this->aeroline);
            oci_bind_by_name($stid, ':vuid_bloqueo',$this->flightI);
            oci_bind_by_name($stid, ':vure_bloqueo',$this->flightR);
            oci_bind_by_name($stid, ':cant_bloqueo',$this->amount);
            oci_bind_by_name($stid, ':cadi_bloqueo',$this->amountFree);
            oci_bind_by_name($stid, ':sald_bloqueo',$this->balance);
            oci_bind_by_name($stid, ':tari_bloqueo',$this->tariff);
            oci_bind_by_name($stid, ':user_bloqueo',$this->user);
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
            $sql = "BEGIN  pkgBloqueo.actualizarBloqueo(:cod_bloqueo, :orig_bloqueo, :dest_bloqueo, :fein_bloqueo, :fefi_bloqueo, :aero_bloqueo, :vuid_bloqueo, :vure_bloqueo, :cant_bloqueo, :cadi_bloqueo, :sald_bloqueo, :tari_bloqueo, :user_bloqueo); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            oci_bind_by_name($stid, ':cod_bloqueo',$this->code);
            oci_bind_by_name($stid, ':orig_bloqueo',$this->origen);
            oci_bind_by_name($stid, ':dest_bloqueo',$this->destination);
            oci_bind_by_name($stid, ':fein_bloqueo',$this->dateIn);
            oci_bind_by_name($stid, ':fefi_bloqueo',$this->dateFi);
            oci_bind_by_name($stid, ':aero_bloqueo',$this->aeroline);
            oci_bind_by_name($stid, ':vuid_bloqueo',$this->flightI);
            oci_bind_by_name($stid, ':vure_bloqueo',$this->flightR);
            oci_bind_by_name($stid, ':cant_bloqueo',$this->amount);
            oci_bind_by_name($stid, ':cadi_bloqueo',$this->amountFree);
            oci_bind_by_name($stid, ':sald_bloqueo',$this->balance);
            oci_bind_by_name($stid, ':tari_bloqueo',$this->tariff);
            oci_bind_by_name($stid, ':user_bloqueo',$this->user);
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