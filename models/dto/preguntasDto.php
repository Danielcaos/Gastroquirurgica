<?php

    class preguntasDto{

        public $id;
        public $pregunta;

        function __construct($id, $pregunta){
            $this->id = $id;
            $this->pregunta = $pregunta;

        }

        public function getId(){
            return $this->id;
        }
        
        public function setId($id){
            $this ->id = $id;
        }

        public function getPregunta(){
            return $this->pregunta;
        }
        
        public function setCorreo($pregunta){
            $this ->pregunta = $pregunta;
        }
        

    }

?>