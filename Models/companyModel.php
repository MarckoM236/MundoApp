<?php 
include_once('Core/baseModel.php');
    class CompanyModel extends BaseModel{

        private $code;
        private $name;
        private $nit;
        private $rent;
        private $address;
        private $pbx;
        private $mobile;

        public function __construct() {
            $table="EMPRESA";
            parent::__construct($table);
        }

        //getters
        public function setCode($val){
            $this->code = $val;
        }
        public function setName($val){
            $this->name = $val;
        }
        public function setNit($val){
            $this->nit = $val;
        }
        public function setRent($val){
            $this->rent = $val;
        }
        public function setAddress($val){
            $this->address = $val;
        }
        public function setPbx($val){
            $this->pbx = $val;
        }
        public function setMobile($val){
            $this->mobile = $val;
        }

        //setters
        public function getCode(){
            return $this->code;
        } 
        public function getName(){
            return $this->name;
        }
        public function getNit(){
            return $this->nit;
        }
        public function getRent(){
            return $this->rent;
        }
        public function getAddress(){
            return $this->address;
        }
        public function getPbx(){
            return $this->pbx;
        }
        public function getMobile(){
            return $this->mobile;
        }

        public function insert(){

            $data=array();
            $res=0;
            $sql = "BEGIN  pkgEmpresa.insertarEmpresa(:cod_empresa,:nombre_empresa,:nit_empresa,:rent_empresa,:direccion_empresa,:pbx_empresa,:celular_empresa,:res); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            oci_bind_by_name($stid, ':cod_empresa',$this->code);
            oci_bind_by_name($stid, ':nombre_empresa',$this->name);
            oci_bind_by_name($stid, ':nit_empresa',$this->nit);
            oci_bind_by_name($stid, ':rent_empresa',$this->rent);
            oci_bind_by_name($stid, ':direccion_empresa',$this->address);
            oci_bind_by_name($stid, ':pbx_empresa',$this->pbx);
            oci_bind_by_name($stid, ':celular_empresa',$this->mobile);
            oci_bind_by_name($stid, ':res',$res);
            @$res=oci_execute($stid);
            $res=1;

             if($res>0){
                 $data['status'] = 'ok';
                 $data['result'] = 'Registro exitoso';
             }
             else{
                 $data['status'] = 'fail';
                 $data['result'] = 'No se pudo insertar';
             }
    
            return $data;
            
        }
    
    }

?>