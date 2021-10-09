<?php

require_once 'controlador/errorControl.php';

class App{


        function __construct(){


            $url = isset($_GET['url']) ? $_GET['url'] : null;
            $dir = $url;
            $url = rtrim( $url, '/');
            //dividimos los parametros
            $url = explode('/',  $url);


            if(empty($url[0])){
                $this->defecto();
            }else if(!empty($url[0])){
                $this->busqueda($url);
            }



        }

        function defecto(){
            $url[0]='preguntas';
            $archivoController = 'controlador/preguntasControl.php';
            require_once $archivoController;
            $controller = new  preguntasControl();
            $controller->loadModel($url[0]);
            $controller->render(null);
            /* header('Location: ' . constant('URL'). 'depControl.php'); */
            return;
        }


        function busqueda($url){
            $archivoController = 'controlador/'. $url[0] .'.php';

            if(file_exists($archivoController)){
                require_once $archivoController;

                //inicializa el controlador y cargamos el modelo
                $controller = new $url[0];
                $url[0] = rtrim($url[0], 'Control');


                $controller->loadModel($url[0]);
                //numero de elementos del arreglo
                $nparam = sizeof($url);
                if($nparam>1){
                    $def = method_exists($controller,$url[1]);
                    if(!$def) $controller = new errorControl("error");
                    if($nparam>2){
                        $param=[];
                        for($i = 2; $i<$nparam;$i++){
                            array_push($param, $url[$i]);
                        }
                        $controller->{$url[1]}($param);
                    }else{
                        $controller->{$url[1]}();
                    }
                }
                else{
                    $controller->render(null);
                }
            }else{
                $controller = new errorControl("error");
            }

        }

    }

    ?>