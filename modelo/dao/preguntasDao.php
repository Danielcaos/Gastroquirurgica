<?php

    require 'modelo/dto/preguntasDto.php';
    require 'modelo/dto/usuarioDto.php';
    require 'modelo/dto/datosDto.php';

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

        public function insertarDatos($datos){

            $datos = new datosDto($datos['correo'], $datos['genero'], $datos['edad'], $datos['estatura'], $datos['peso']);
    
            $query = $this->db->connect()->prepare('INSERT INTO datos (correo, genero, edad, estatura, peso) VALUES (:correo, :genero, :edad, :estatura, :peso)');
            try{
                $query->execute([
                    'correo' => $datos->getCorreo(),
                    'genero' => $datos->getGenero(),
                    'edad' => $datos->getEdad(),
                    'estatura' => $datos->getEstatura(),
                    'peso' => $datos->getPeso()
                ]);
                return true;
            }catch(PDOException $e){
                return false;
            }
    
        }

        public function insertarUsuario($datos){

            $usuario = new usuarioDto($datos['correo']);
    
            $query = $this->db->connect()->prepare('INSERT INTO usuario (correo) VALUES (:correo)');
            try{
                $query->execute([
                    'correo' => $usuario->getCorreo(),
                ]);
                return true;
            }catch(PDOException $e){
                return false;
            }
    
        }
    }
?>