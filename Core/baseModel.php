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
        
        public function getAll(){
            $query=$this->db->query("SELECT * FROM $this->table ORDER BY id DESC");
            
            //Devolvemos el resultset en forma de array de objetos
            while ($row = $query->fetch_object()) {
            $resultSet[]=$row;
            }
            
            return $resultSet;
        }
        
        public function getById($id){
            $query=$this->db->query("SELECT * FROM $this->table WHERE id=$id");
    
            if($row = $query->fetch_object()) {
            $resultSet=$row;
            }
            
            return $resultSet;
        }
        
        public function getBy($column,$value){
            $query=$this->db->query("SELECT * FROM $this->table WHERE $column='$value'");
    
            while($row = $query->fetch_object()) {
            $resultSet[]=$row;
            }
            
            return $resultSet;
        }
        
        public function deleteById($id){
            $query=$this->db->query("DELETE FROM $this->table WHERE id=$id");
            return $query;
        }

    }

?>