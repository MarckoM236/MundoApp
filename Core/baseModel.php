<?php  
    @include_once('db.php');
    class BaseModel{

        private $table;
        private $db;
        private $conectar;
    
        public function __construct($table) {
            $this->table=(string) $table;
            
            
            $this->conectar=new Conectar();
            $this->db=$this->conectar->getInstancia();
        }
        
        public function getConetar(){
            return $this->conectar;
        }
        
        public function db(){
            return $this->db;
        }
        
        
        

        public function deleteByCode($code){
            $sql = "BEGIN  pkgEmpresa.eliminar".$this->table."(:cod_empresa); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            oci_bind_by_name($stid, ':cod_empresa',$this->code);
            @$res=oci_execute($stid);

             if($res>0){
                 $data['status'] = 'ok';
                 $data['result'] = 'Registro eliminado exitosamente';
             }
             else{
                 $data['status'] = 'fail';
                 $data['result'] = 'No se elimino el registro';
             }
    
            return $data;
        }

    }

?>