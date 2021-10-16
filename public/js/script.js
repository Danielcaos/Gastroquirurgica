const URLD = "http://localhost:80/AppWeb/";

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
            window.location.href = URLD + "preguntasControl/render/pregunta";
        }

}

/* Primera pregunta */
function pregunta1() {
    edad = document.getElementById('edad').value;
    estatura = document.getElementById('estatura').value;
    peso = document.getElementById('peso').value;
    genero = document.getElementById('genero').value;
    departamentos = document.getElementById('departamentos').value;

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
                resultado = document.getElementById('imc');
                var imc = peso/(Math.pow(estatura,2));
                img1 = document.getElementById('respuesta1');
                if (imc < 18.5) {
                    resultado.src = URLD + "public/resourse/img/1.png";
                    img1.src = URDL + "public/resourse/img/1.png";
                    console.log(respuesta1.src);
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
                }, 1000)
                
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
    xhttp.open("GET",URLD + "vista/preguntas/respuesta.php", true);
    xhttp.send();
    return false;
}