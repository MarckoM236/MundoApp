<?php  
/* Extends from the baseModel class, 
requires the connection and the name of the table. Contains common method for all entities. */
    @include_once('db.php');
    class BaseModel{

        private $table;
        private $package;
        private $db;
        private $conectar;
    
        public function __construct($package,$table) {
            $this->table=(string) $table;
            $this->package=(string) $package;
            
            
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
            $sql = "BEGIN  pkg".$this->package.".eliminar".$this->package."(:cod_".$this->table."); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            oci_bind_by_name($stid, ':cod_'.$this->table,$this->code);
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