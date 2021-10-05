<?php

    class usuarioDto{

        public $correo;
        public $permiso;

        public function __construct($correo, $permiso){
            $this->correo = $correo;
            $this->nombre = $permiso;
        }
        
        public function getCorreo(){
            return $this->correo;
        }
        
        public function setCorreo($correo){
            $this ->nombre = $correo;
        }
        
        public function getPermiso(){
            return $this->permiso;
        }
        
        public function setNombre($permiso){
            $this ->nombre = $permiso;
        }


    }

?>