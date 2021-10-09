<?php

    require 'modelo/dto/resultadoDto.php';

    class resultadoDao extends Model{

        public function __construct(){
            parent::__construct();
          
           
        }

        public function listar(){

            try{
                $query = $this->db->connect()->prepare('SELECT * FROM resultado');
                $query->execute();
                $resultado = $query->fetch();
                return $resultado;
            }catch(PDOException $e){
                return false;
            }
    
        }

        public function insertar($datos){

            $resultado = new resultadoDto($datos['id'], $datos['correo'], $datos['resultado']);
    
            $query = $this->db->connect()->prepare('INSERT INTO resultado (id, correo, resultado) VALUES (:id, :correo, :resultado)');
            try{
                $query->execute([
                    'id' => $resultado->getId(),
                    'correo' => $resultado->getCorreo(),
                    'resultado' => $resultado->getResultado()
                ]);
                return true;
            }catch(PDOException $e){
                return false;
            }
    
        }

        public function buscar($correo){
            try{
                $statement = $this->db->connect()->prepare("SELECT * FROM resultado WHERE (correo = :correo)");
                $statement->execute(array(
                    ':correo' => $correo
                ));
                $resultado = $statement->fetch();
                if(!empty($resultado)){
                    $resultado = new usuarioDto($resultado['id'], $resultado['correo'], $resultado['resultado']);}
                return  $resultado;
            }catch(PDOException $e){
                return null;
            }
        }

    }

?>