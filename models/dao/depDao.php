<?php
    
require 'models/dto/depDto.php';

class depDao extends Model{
    
    public function __construct(){
        parent::__construct();
      
       
    }

    public function listar(){

        try{
            $query = $this->db->connect()->prepare('SELECT * FROM departamentos');
            $query->execute();
            $resultado = $query->fetch();
            return $resultado;
        }catch(PDOException $e){
            return false;
        }

    }

    public function insertar($datos){

        $departamento = new depDto($datos['id'], $datos['nombre']);

        $query = $this->db->connect()->prepare('INSERT INTO departamentos (id, nombre) VALUES (:id, :nombre)');
        try{
            $query->execute([
                'id' => $departamento->getId(),
                'nombre' => $departamento->getNombre()
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }

    }

    public function buscar($nombre){
        try{
            $statement = $this->db->connect()->prepare("SELECT * FROM departamentos WHERE (nombre = :nombre)");
            $statement->execute(array(
                ':nombre' => $nombre
            ));
            $resultado = $statement->fetch();
            if(!empty($resultado)){
                $resultado = new usuarioDto($resultado['id'], $resultado['nombre']);}
            return  $resultado;
        }catch(PDOException $e){
            return null;
        }
    }

}

?>