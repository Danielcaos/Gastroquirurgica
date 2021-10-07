<?php

    class resultadoDto{

        public $id;
        public $correo;
        public $resultado;

        function __construct($id, $correo, $resultado)
        {
            $this->id = $id;
            $this->correo = $correo;
            $this->resultado = $resultado;
        }

        public function getId(){
            return $this->id;
        }
        
        public function setId($id){
            $this ->id = $id;
        }

        public function getCorreo(){
            return $this->correo;
        }
        
        public function setCorreo($correo){
            $this ->correo = $correo;
        }

        public function getResultado(){
            return $this->resultado;
        }
        
        public function setResultado($resultado){
            $this ->id = $resultado;
        }

    }

?>