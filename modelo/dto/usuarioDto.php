<?php

    class usuarioDto{

        public $correo;

        public function __construct($correo){
            $this->correo = $correo;
        }
        
        public function getCorreo(){
            return $this->correo;
        }
        
        public function setCorreo($correo){
            $this ->correo = $correo;
        }

    }

?>