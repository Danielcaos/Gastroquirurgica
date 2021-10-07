<?php

    class usuarioDto{

        public $correo;
        public $permiso;

        public function __construct($correo, $permiso){
            $this->correo = $correo;
            $this->permiso = $permiso;
        }
        
        public function getCorreo(){
            return $this->correo;
        }
        
        public function setCorreo($correo){
            $this ->correo = $correo;
        }
        
        public function getPermiso(){
            return $this->permiso;
        }
        
        public function setNombre($permiso){
            $this ->permiso = $permiso;
        }


    }

?>