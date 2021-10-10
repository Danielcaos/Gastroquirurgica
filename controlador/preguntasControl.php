<?php



class preguntasControl extends Controller{
        

        function __construct(){
             parent::__construct();
             $this->view->datos = [];
             $this->view->imc = "";
        }

        function render($ubicacion = null)
        {

            $constr = "preguntas";
            $this->cargarDep();
            if (isset($ubicacion[0])) {
                $this->view->render($constr, $ubicacion[0]);
            } else {
                $this->view->render($constr, 'index');
            }
        }

        function cargarDep(){

            $this->view->datos = $this->model->listarDep();
            

        }

        function imc($param = null){
            $peso = $param[0];
            $estatura = $param[1];
            $this->view->imc = $peso/($estatura*$estatura);
            $this->render("preguntas2");
        }


}

?>