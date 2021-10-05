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
            $this ->nombre = $id;
        }

        public function getCorreo(){
            return $this->Correo;
        }
        
        public function setCorreo($Correo){
            $this ->nombre = $Correo;
        }

        public function getGenero(){
            return $this->genero;
        }
        
        public function setGenero($genero){
            $this ->nombre = $genero;
        }

        public function getDep(){
            return $this->departamento;
        }
        
        public function setDep($departamento){
            $this ->nombre = $departamento;
        }

        public function getEdad(){
            return $this->edad;
        }
        
        public function setEdad($edad){
            $this ->nombre = $edad;
        }

        public function getEstatura(){
            return $this->estatura;
        }
        
        public function setEstatura($estatura){
            $this ->nombre = $estatura;
        }

        public function getPeso(){
            return $this->peso;
        }
        
        public function setPeso($peso){
            $this ->nombre = $peso;
        }

    }

?>