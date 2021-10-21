<?php



class preguntasControl extends Controller{
        

        function __construct(){
            parent::__construct();
            $this->view->datos = [];
            $this->view->imc = "";
            /* if(isset($_SESSION['email'])){
                header('Location: ' . constant('URL'). 'preguntasControl/render/pregunta');
                return;
            } */
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

        function sesion($param){
            $data = $param[0];
            $_SESSION["email"] = $data;
            echo $_SESSION["email"];
            /* unset($_SESSION['usuario']);elimina el dato de la sesion
            session_destroy(); elimina las sesiones */
        }

        function registrarDatos(){
            $genero = $_POST['genero'];
            $dep = $_POST['dep'];
            $edad = $_POST['edad'];
            $estatura = $_POST['estatura'];
            $peso = $_POST['peso'];
            $correo = $_SESSION["email"];
            /* $json = array();
            $json[] = array(
                'genero' => $genero,
                'dep' => $dep,
                'edad' => $edad,
                'estatura' => $estatura,
                'peso' => $peso,
                'email' => $email,
            );
            $JString = json_encode($json);
            echo $JString; */
            $this->model->insertarUsuario(['correo'=>$correo]);

            $this->model->insertarDatos(['correo'=>$correo, 'genero'=>$genero, 'departamento'=>$dep, 'edad'=>$edad, 'estatura'=>$estatura, 'peso'=>$peso]);
            session_destroy();
        }
        


}

?>