<?php  
/* Extends from the baseModel class, 
requires the connection and the name of the table. Contains common method for all entities. */
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
            $sql = "BEGIN  pkg".ucfirst($this->table).".eliminar".ucfirst($this->table)."(:cod_".$this->table."); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            oci_bind_by_name($stid, ':cod_'.$this->table,$code);
            @$res=oci_execute($stid);

             if($res){
                 $data['status'] = 'ok';
                 $data['result'] = 'Registro eliminado exitosamente';
             }
             else{
                 $data['status'] = 'fail';
                 $data['result'] = 'No se elimino el registro';
             }
    
            return $data;
        }

        public function deleteByCodeTwo($code1,$code2,$tabla1, $tabla2){
            $sql = "BEGIN  pkg".ucfirst($this->table).".eliminar".ucfirst($this->table)."(:cod_".$tabla1.",:cod_".$tabla2."); END;";
            $conex = $this->db();
            $stid = oci_parse($conex, $sql);
            oci_bind_by_name($stid, ':cod_'.$tabla1,$code1);
            oci_bind_by_name($stid, ':cod_'.$tabla2,$code2);
            @$res=oci_execute($stid);

             if($res){
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