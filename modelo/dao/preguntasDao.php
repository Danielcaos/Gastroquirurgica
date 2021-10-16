<?php

    require 'modelo/dto/preguntasDto.php';

    class preguntasDao extends Model{

        function __construct()
        {
            parent::__construct();
        }

        public function listarDep(){

            try{
                $query = $this->db->connect()->prepare('SELECT * FROM departamentos');
                $query->execute();
                $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
                return $resultado;
            }catch(PDOException $e){
                return false;
            }
    
        }
    }
?>