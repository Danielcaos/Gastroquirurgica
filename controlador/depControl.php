<?php

    require 'modelo/dao/depDao.php';

    class depControl extends Controller{

        function __construct()
        {   
            parent::__construct();
            $this->view->datos = [];
        }

        function render($ubicacion = null){

            $constr = "preguntas";
            $this->cargarDep();
            if (isset($ubicacion[0])) {
                $this->view->render($constr, $ubicacion[0]);
            } else {
                $this->view->render($constr, 'pregunta1');
            }

        }




    }

?>