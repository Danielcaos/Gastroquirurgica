<?php


class preguntasControl extends Controller{

    /* private $dep; */
        

        function __construct(){
             parent::__construct();
              //$dep=null;
        }

        function render($ubicacion = null)
        {

            $constr = "preguntas";
            if (isset($ubicacion[0])) {
                $this->view->render($constr, $ubicacion[0]);
            } else {
                $this->view->render($constr, 'index');
            }
        }


}

?>