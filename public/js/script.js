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
            console.log(email)
            httpRequest(URLD + "preguntasControl/sesion/" + email, function(){
                var resp = this.responseText;
                window.location.href = URLD + "preguntasControl/render/pregunta";
            });
        }
}

/* Divide la url */
function httpRequest(url, callback) {
    const http = new XMLHttpRequest();
    http.open("GET", url);
    http.send();
    http.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            callback.apply(http);
        }
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
                $.ajax({
                    type: "POST",
                    url: URLD + "preguntasControl/registrarDatos",
                    data: $('#datosUsuario').serialize(),
                    success: function (data) {
                       /*  const task = JSON.parse(data);
                        console.log(task[0].genero);
                        console.log(data); */
                        loadPregunta2();
                        setTimeout(function () {
                        resultado = document.getElementById('imc');
                        var imc = peso/(Math.pow(estatura,2));
                        if (imc < 18.5) {
                            cargarTexto();
                            resultado.src = URLD + "public/resource/img/1.png";
                            cargarRespuestas();
                        } else
                        if (18.5 <= imc && imc <= 24.9) {
                            cargarTexto();
                            resultado.src = URLD +  "public/resource/img/2.png";
                            cargarRespuestas();
                        } else
                        if (24.9 < imc && imc <= 29.9) {
                            cargarTexto();
                            resultado.src = URLD +  "public/resource/img/3.png";
                            cargarRespuestas();
                        } else
                        if (29.9 < imc && imc <= 34.9) {
                            cargarTexto();
                            resultado.src = URLD +  "public/resource/img/4.png";
                            cargarRespuestas();
                        } else
                        if (imc >= 35) {
                            cargarTexto();
                            resultado.src = URLD +  "public/resource/img/5.png";
                            cargarRespuestas();
                        }    
                        }, 2000)
                    },
                    error: function (r) {
                        alert("Error del servidor");
                    }
                });
            }
}

/* Texto de los resultados */
function cargarTexto() {
    setTimeout(function () {
        texto1 = document.getElementById('text1');
        texto2 = document.getElementById('text2');
        texto3 = document.getElementById('text3');
        texto4 = document.getElementById('text4');
        resultado = document.getElementById('imc');
        var imc = peso/(Math.pow(estatura,2));
    if (imc < 18.5) {
        text1.innerHTML = "Paragraph changed!";
        text2.innerHTML = "Paragraph changed!";
        text3.innerHTML = "Paragraph changed!";
        text4.innerHTML = "Paragraph changed!";
    } else
    if (18.5 <= imc && imc <= 24.9) {   
        text1.innerHTML = "Paragraph changed!";
        text2.innerHTML = "Paragraph changed!";
        text3.innerHTML = "Paragraph changed!";
        text4.innerHTML = "Paragraph changed!";
    } else
    if (24.9 < imc && imc <= 29.9) {
        text1.innerHTML = "Paragraph changed!";
        text2.innerHTML = "Nuestro equipo de briátrica cuenta con personal altamente calificado: Dra. Carmen Zenovia Moros Psicologa, Lcda. Elix A Lozano E Nutricionista, Dr. Ivar M Duran V Deportólogo, Dra. Sandra P Martin N Gastroenterólogo, Dr. Manuel E Moros V Cirugía Bariátrica";
        text3.innerHTML = "Paragraph changed!";
        text4.innerHTML = "Paragraph changed!";  
    } else
    if (29.9 < imc && imc <= 34.9) {
        text1.innerHTML = "Paragraph changed!";
        text2.innerHTML = "Nuestro equipo de briátrica cuenta con personal altamente calificado: Dra. Carmen Zenovia Moros Psicologa, Lcda. Elix A Lozano E Nutricionista, Dr. Ivar M Duran V Deportólogo, Dra. Sandra P Martin N Gastroenterólogo, Dr. Manuel E Moros V Cirugía Bariátrica";
        text3.innerHTML = "Paragraph changed!";
        text4.innerHTML = "Paragraph changed!";
    } else
    if (imc >= 35) {
        text1.innerHTML = "Paragraph changed!";
        text2.innerHTML = "Nuestro equipo de briátrica cuenta con personal altamente calificado: Dra. Carmen Zenovia Moros Psicologa, Lcda. Elix A Lozano E Nutricionista, Dr. Ivar M Duran V Deportólogo, Dra. Sandra P Martin N Gastroenterólogo, Dr. Manuel E Moros V Cirugía Bariátrica";
        text3.innerHTML = "Paragraph changed!";
        text4.innerHTML = "Paragraph changed!";
    }    
    }, 1000)
}

/* Imagenes de los resultados */
function cargarRespuestas() {
    setTimeout(function () {
        img1 = document.getElementById('respuesta1');
        img2 = document.getElementById('respuesta2');
        img3 = document.getElementById('respuesta3');
        resultado = document.getElementById('imc');
        var imc = peso/(Math.pow(estatura,2));
    if (imc < 18.5) {
        img1.src = URLD + "public/resource/img/prueba.png";
        img2.src = URLD + "public/resource/img/prueba.png";
        img3.src = URLD + "public/resource/img/prueba.png";
    } else
    if (18.5 <= imc && imc <= 24.9) {   
        img1.src = URLD + "public/resource/img/prueba.png";
        img2.src = URLD + "public/resource/img/prueba.png";
        img3.src = URLD + "public/resource/img/prueba.png";
    } else
    if (24.9 < imc && imc <= 29.9) {
        img1.src = URLD + "public/resource/img/equipo.png";
        img2.src = URLD + "public/resource/img/prueba.png";
        img3.src = URLD + "public/resource/img/prueba.png";  
    } else
    if (29.9 < imc && imc <= 34.9) {
        img1.src = URLD + "public/resource/img/equipo.png";
        img2.src = URLD + "public/resource/img/prueba.png";
        img3.src = URLD + "public/resource/img/prueba.png";
    } else
    if (imc >= 35) {
        img1.src = URLD + "public/resource/img/equipo.png";
        img2.src = URLD + "public/resource/img/prueba.png";
        img3.src = URLD + "public/resource/img/prueba.png";
    }    
    }, 1000)
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