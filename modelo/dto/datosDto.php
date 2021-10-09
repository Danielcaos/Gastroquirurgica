<?php

    class datosDto{

        public $id;
        public $correo;
        public $genero;
        public $departamento;
        public $edad;
        public $estatura;
        public $peso;

        public function __construct($id, $correo, $genero, $departamento, $edad, $estatura, $peso){
            $this->id = $id;
            $this->correo = $correo;
            $this->genero = $genero;
            $this->departamento = $departamento;
            $this->edad = $edad;
            $this->estatura = $estatura;
            $this->peso = $peso;
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