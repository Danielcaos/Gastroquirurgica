<?php



class preguntasControl extends Controller{
        

        function __construct(){
            parent::__construct();
            $this->view->datos = [];
            $this->view->imc = "";
            if(isset($_SESSION['empresa'])){
                header('Location: ' . constant('URL'). 'pregunta');
                return;
            }
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

        function registrarDatos(){
            $genero = $_POST['genero'];
            $dep = $_POST['dep'];
            $edad = $_POST['edad'];
            $estatura = $_POST['estatura'];
            $peso = $_POST['peso'];

            $json = array();
            $json[] = array(
                'genero' => $genero,
                'dep' => $dep,
            );
        $JString = json_encode($json);
        echo $JString;
        return;

          /*   $datos = new datosDto($genero, $departamento, $edad, $estatura, $peso);

            $this->model->insertarDatos($datos); */
        }

        $_SESSION["usuario"] = $resultado->getcodigoEstudiante();
        unset($_SESSION['usuario']);
        session_destroy();
        


}

?>