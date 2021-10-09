<?php

    require 'modelo/dto/preguntasDto.php';

    class preguntasDao extends Model{

        function __construct()
        {
            parent::__construct();
        }

        public function listar(){

            try{
                $query = $this->db->connect()->prepare('SELECT * FROM preguntas');
                $query->execute();
                $resultado = $query->fetch();
                return $resultado;
            }catch(PDOException $e){
                return false;
            }
    
        }

        public function insertar($datos){

            $pregunta = new preguntasDto($datos['id'], $datos['pregunta']);
    
            $query = $this->db->connect()->prepare('INSERT INTO preguntas (id, pregunta) VALUES (:id, :pregunta)');
            try{
                $query->execute([
                    'id' => $pregunta->getId(),
                    'pregunta' => $pregunta->getPregunta()
                ]);
                return true;
            }catch(PDOException $e){
                return false;
            }
    
        }

        public function buscar($id){
            try{
                $statement = $this->db->connect()->prepare("SELECT * FROM preguntas WHERE (id = :id)");
                $statement->execute(array(
                    ':id' => $id
                ));
                $resultado = $statement->fetch();
                if(!empty($resultado)){
                    $resultado = new usuarioDto($resultado['id'], $resultado['pregunta']);}
                return  $resultado;
            }catch(PDOException $e){
                return null;
            }
        }

    }

?>