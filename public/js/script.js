const URLD = "http://localhost:80/AppWeb/";

let rutas = [];

/* Validacion de politcas y correo electronico */
function eleccionSi() {
    email = document.getElementById('email').value
    re = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;

    if (!document.getElementById('checkbox1').checked) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Para continuar, acepta nuestros términos, políticas y seleccione la opcion SI',
            confirmButtonColor: '#2a6db3'
        })
    } else
        if (email.length == 0 || !re.exec(email)) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Por favor ingrese una direccion de correo electronico valida y seleccione la opcion SI',
                confirmButtonColor: '#2a6db3'
            })
        } else {
            console.log("si");
            window.location.href = URLD + "preguntasControl/render/pregunta1";
        }

}

/* Primera pregunta */
function pregunta1() {
    rutas.push(URLD + "preguntasControl/render/pregunta1");
    edad = document.getElementById('edad').value;
    estatura = document.getElementById('estatura').value;
    peso = document.getElementById('peso').value;
    genero = document.getElementById('genero').value;
    departamentos = document.getElementById('departamentos').value;
    console.log('hola')

    if (genero == 'Genero') {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Por favor seleccione un genero',
            confirmButtonColor: '#2a6db3'
        })
    } else
        if (departamentos == 'Departamento') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Por favor seleccione un departamento',
                confirmButtonColor: '#2a6db3'
            })
        } else
            if (edad.length == 0 || estatura.length == 0 || peso.length == 0) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Por favor complete los campos solicitados',
                    confirmButtonColor: '#2a6db3'
                })
            }else{
                loadPregunta2();
                setTimeout(function () {
                console.log(estatura);
                console.log(peso);
                resultado = document.getElementById('imc');
                var imc = peso/(Math.pow(estatura,2));
                console.log(imc);
                if (imc < 18.5) {
                    resultado.src = URLD + "public/resourse/img/1.png";
                } else
                if (18.5 <= imc && imc <= 24.9) {
                    resultado.src = URLD +  "public/resourse/img/2.png";
                } else
                if (24.9 < imc && imc <= 29.9) {
                    resultado.src = URLD +  "public/resourse/img/3.png";
                } else
                if (29.9 < imc && imc <= 34.9) {
                    resultado.src = URLD +  "public/resourse/img/4.png";
                } else
                if (imc >= 35) {
                    resultado.src = URLD +  "public/resourse/img/5.png";
                }    
                }, 200)
                
            }
}

/* Segunda pregunta */
function pregunta2() {
    respuesta1 = document.getElementById('p2-op1').checked
    respuesta2 = document.getElementById('p2-op2').checked
    respuesta3 = document.getElementById('p2-op3').checked
    respuesta4 = document.getElementById('p2-op4').checked

    if (!respuesta1 && !respuesta2 && !respuesta3 && !respuesta4) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Por favor seleccione una respuesta para continuar',
            confirmButtonColor: '#2a6db3'
        })
    } else
        if ((respuesta1 && respuesta2 && respuesta3 && respuesta4) || (respuesta1 && respuesta2) || (respuesta1 && respuesta3) || (respuesta1 && respuesta4) || (respuesta2 && respuesta3) || (respuesta2 && respuesta4) || (respuesta3 && respuesta4)) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Por favor seleccione una sola respuesta',
                confirmButtonColor: '#2a6db3'
            })
        }
        else {
            loadPregunta3();
        }
}

/* Finalizar */
function finalizar(){
    window.location.href = URLD + "preguntasControl/render/respuesta";
}

function httpRequest(url, callback) {
    const http = new XMLHttpRequest();
    http.open("GET", url);
    http.send();
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            callback.apply(http);
        }
    }
}


/* Cargar pregunta N°2 */
function loadPregunta2() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("asincrono").innerHTML = this.responseText;
      }
    };
    rutas.push(URLD + "vista/preguntas/pregunta2.php");
    xhttp.open("GET",URLD + "vista/preguntas/pregunta2.php", true);
    xhttp.send();
    return false;
}

/* Regreso a la pregunta N°1 */
function retornoPregunta1() {
    $("#regresar1").click(function () {
        $("#asincrono").load(URLD + "vista/preguntas/pregunta1.php");
    });
}

/* Cargar pregunta N°3 */
function loadPregunta3() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("asincrono").innerHTML = this.responseText;
      }
    };
    rutas.push(URLD + "vista/preguntas/pregunta3.php");
    xhttp.open("GET",URLD + "vista/preguntas/pregunta3.php", true);
    xhttp.send();
    return false;
}

/* Regreso a la pregunta N°2 */
function retornoPregunta2() {
    $("#regresar2").click(function () {
        $("#asincrono").load(URLD + "vista/preguntas/pregunta2.php");
    });
}

function retornoGnerico(url){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("asincrono").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", url, true);
    xhttp.send();
    return false; 
}

function advertencia(){
    Swal.fire({
        icon: 'warning',
        title: 'Recuerda...',
        text: 'Una vez continues no podras cambiar tus respuestas',
        confirmButtonColor: '#2a6db3'
    })
}