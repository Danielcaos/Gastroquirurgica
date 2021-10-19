<?php

    class datosDto{

        public $correo;
        public $genero;
        public $departamento;
        public $edad;
        public $estatura;
        public $peso;

        public function __construct($correo, $genero, $departamento, $edad, $estatura, $peso){
            $this->correo = $correo;
            $this->genero = $genero;
            $this->departamento = $departamento;
            $this->edad = $edad;
            $this->estatura = $estatura;
            $this->peso = $peso;
        }

        public function getCorreo(){
            return $this->correo;
        }
        
        public function setCorreo($correo){
            $this ->correo = $correo;
        }

        public function getGenero(){
            return $this->genero;
        }
        
        public function setGenero($genero){
            $this ->genero = $genero;
        }

        public function getDep(){
            return $this->departamento;
        }
        
        public function setDep($departamento){
            $this ->departamento = $departamento;
        }

        public function getEdad(){
            return $this->edad;
        }
        
        public function setEdad($edad){
            $this ->edad = $edad;
        }

        public function getEstatura(){
            return $this->estatura;
        }
        
        public function setEstatura($estatura){
            $this ->estatura = $estatura;
        }

        public function getPeso(){
            return $this->peso;
        }
        
        public function setPeso($peso){
            $this ->peso = $peso;
        }

    }

?>