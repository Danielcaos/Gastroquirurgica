<?php
    
require 'modelo/dto/usuarioDto.php';

class usuarioDao extends Model{
    
    public function __construct(){
        parent::__construct();
      
       
    }

    public function listar(){

        try{
            $query = $this->db->connect()->prepare('SELECT * FROM usuario');
            $query->execute();
            $resultado = $query->fetch();
            return $resultado;
        }catch(PDOException $e){
            return false;
        }

    }

    public function insertar($datos){

        $usuario = new usuarioDto($datos['correo'], $datos['permiso']);

        $query = $this->db->connect()->prepare('INSERT INTO usuario (correo, permiso) VALUES (:correo, :permiso)');
        try{
            $query->execute([
                'correo' => $usuario->getCorreo(),
                'permiso' => $usuario->getPermiso()
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }

    }

    
    public function buscar($correo){
        try{
            $statement = $this->db->connect()->prepare("SELECT * FROM persona WHERE (correo = :correo)");
            $statement->execute(array(
                ':correo' => $correo
            ));
            $resultado = $statement->fetch();
            if(!empty($resultado)){
                $resultado = new usuarioDto($resultado['correo'], $resultado['permiso']);}
            return  $resultado;
        }catch(PDOException $e){
            return null;
        }
    }

}

?>