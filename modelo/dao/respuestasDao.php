<?php

require 'modelo/dto/respuestasDto.php';

    class respuestasDao extends Model{

        function __construct()
        {
            parent::__construct();
        }

        public function listar(){

            try{
                $query = $this->db->connect()->prepare('SELECT * FROM respuestas_usuario');
                $query->execute();
                $resultado = $query->fetch();
                return $resultado;
            }catch(PDOException $e){
                return false;
            }
    
        }

        public function insertar($datos){

            $respuesta = new respuestasDto($datos['id'], $datos['correo'], $datos['pregunta1'], $datos['pregunta2'], $datos['pregunta3'], $datos['pregunta4'], $datos['pregunta5'], $datos['pregunta6'], $datos['pregunta7'], $datos['pregunta8'], $datos['pregunta9'], $datos['pregunta10']);
    
            $query = $this->db->connect()->prepare('INSERT INTO respuesta_usuario (id, correo, pregunta1, pregunta2, pregunta3, pregunta4, pregunta5, pregunta6, pregunta7, pregunta8, pregunta9, pregunta10) VALUES (:id, :correo, :pregunta1, :pregunta2, :pregunta3, :pregunta4, :pregunta5, :pregunta6, :pregunta7, :pregunta8, :pregunta9, :pregunta10)');
            try{
                $query->execute([
                    'id' => $respuesta->getId(),
                    'correo' => $respuesta->getCorreo(),
                    'pregunta1' => $respuesta->getP1(),
                    'pregunta2' => $respuesta->getP2(),
                    'pregunta3' => $respuesta->getP3(),
                    'pregunta4' => $respuesta->getP4(),
                    'pregunta5' => $respuesta->getP5(),
                    'pregunta6' => $respuesta->getP6(),
                    'pregunta7' => $respuesta->getP7(),
                    'pregunta8' => $respuesta->getP8(),
                    'pregunta9' => $respuesta->getP9(),
                    'pregunta10' => $respuesta->getP10(),
                ]);
                return true;
            }catch(PDOException $e){
                return false;
            }
    
        }

    }

?>