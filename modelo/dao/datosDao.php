<?php

    require 'modelo/dto/datosDto.php';

    class datosDao extends Model{

        public function __construct(){
            parent::__construct();
          
           
        }

        public function listar(){

            try{
                $query = $this->db->connect()->prepare('SELECT * FROM datos');
                $query->execute();
                $resultado = $query->fetch();
                return $resultado;
            }catch(PDOException $e){
                return false;
            }
    
        }

        public function insertar($datos){

            $datos = new datosDto($datos['id'], $datos['correo'], $datos['genero'], $datos['departamento'], $datos['edad'], $datos['estatura'], $datos['peso']);
    
            $query = $this->db->connect()->prepare('INSERT INTO datos (id, correo, genero, departamento, edad, estatura, peso) VALUES (:id, :correo, :genero, :departamento, :edad, :estatura, :peso)');
            try{
                $query->execute([
                    'id' => $datos->getId(),
                    'correo' => $datos->getCorreo(),
                    'genero' => $datos->getGenero(),
                    'departamento' => $datos->getDep(),
                    'edad' => $datos->getEdad(),
                    'estatura' => $datos->getEstatura(),
                    'peso' => $datos->getPeso()
                ]);
                return true;
            }catch(PDOException $e){
                return false;
            }
    
        }

        public function buscar($correo){
            try{
                $statement = $this->db->connect()->prepare("SELECT * FROM datos WHERE (correo = :correo)");
                $statement->execute(array(
                    ':correo' => $correo
                ));
                $resultado = $statement->fetch();
                if(!empty($resultado)){
                    $resultado = new usuarioDto($resultado['id'], $resultado['correo'], $resultado['genero'], $resultado['departamento'], $resultado['edad'], $resultado['estatura'], $resultado['peso']);}
                return  $resultado;
            }catch(PDOException $e){
                return null;
            }
        }

    }

?>