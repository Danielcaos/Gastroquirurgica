<?php

    class respuestasDto{

        public $id;
        public $correo;
        public $pregunta1;
        public $pregunta2;
        public $pregunta3;
        public $pregunta4;
        public $pregunta5;
        public $pregunta6;
        public $pregunta7;
        public $pregunta8;
        public $pregunta9;
        public $pregunta10;

        function __construct($id, $correo, $pregunta1, $pregunta2, $pregunta3, $pregunta4, $pregunta5, $pregunta6, $pregunta7, $pregunta8, $pregunta9, $pregunta10)
        {
            $this->id = $id;
            $this->correo = $correo;
            $this->pregunta1 = $pregunta1;
            $this->pregunta1 = $pregunta2;
            $this->pregunta1 = $pregunta3;
            $this->pregunta1 = $pregunta4;
            $this->pregunta1 = $pregunta5;
            $this->pregunta1 = $pregunta6;
            $this->pregunta1 = $pregunta7;
            $this->pregunta1 = $pregunta8;
            $this->pregunta1 = $pregunta9;
            $this->pregunta1 = $pregunta10;
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

        public function getP1(){
            return $this->pregunta1;
        }
        
        public function setP1($pregunta1){
            $this ->pregunta1 = $pregunta1;
        }

        public function getP2(){
            return $this->pregunta2;
        }
        
        public function setP2($pregunta2){
            $this ->pregunta2 = $pregunta2;
        }

        public function getP3(){
            return $this->pregunta3;
        }
        
        public function setP3($pregunta3){
            $this ->pregunta3 = $pregunta3;
        }

        public function getP4(){
            return $this->pregunta4;
        }
        
        public function setP4($pregunta4){
            $this ->pregunta4 = $pregunta4;
        }

        public function getP5(){
            return $this->pregunta5;
        }
        
        public function setP5($pregunta5){
            $this ->pregunta5 = $pregunta5;
        }

        public function getP6(){
            return $this->pregunta6;
        }
        
        public function setP6($pregunta6){
            $this ->pregunta6 = $pregunta6;
        }

        public function getP7(){
            return $this->pregunta7;
        }
        
        public function setP7($pregunta7){
            $this ->pregunta7 = $pregunta7;
        }

        public function getP8(){
            return $this->pregunta8;
        }
        
        public function setP8($pregunta8){
            $this ->pregunta8 = $pregunta8;
        }

        public function getP9(){
            return $this->pregunta9;
        }
        
        public function setP9($pregunta9){
            $this ->pregunta9 = $pregunta9;
        }

        public function getP10(){
            return $this->pregunta10;
        }
        
        public function setP10($pregunta10){
            $this ->pregunta10 = $pregunta10;
        }

    }

?>