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
                        imprimir = document.getElementById('resultado-imc')
                        resultado = document.getElementById('imc');
                        var imc = peso/(Math.pow(estatura,2));
                        if (imc < 18.5) {
                            imprimir.innerHTML = "Segun tu indice de masa corporal " + imc.toFixed(2);
                            cargarTexto();
                            resultado.src = URLD + "public/resource/img/1.png";
                            cargarRespuestas();
                        } else
                        if (18.5 <= imc && imc <= 24.9) {
                            imprimir.innerHTML = "Segun tu indice de masa corporal " + imc.toFixed(2);
                            cargarTexto();
                            resultado.src = URLD +  "public/resource/img/2.png";
                            cargarRespuestas();
                        } else
                        if (24.9 < imc && imc <= 29.9) {
                            imprimir.innerHTML = "Segun tu indice de masa corporal " + imc.toFixed(2);
                            cargarTexto();
                            resultado.src = URLD +  "public/resource/img/3.png";
                            cargarRespuestas();
                        } else
                        if (29.9 < imc && imc <= 34.9) {
                            imprimir.innerHTML = "Segun tu indice de masa corporal " + imc.toFixed(2);
                            cargarTexto();
                            resultado.src = URLD +  "public/resource/img/4.png";
                            cargarRespuestas();
                        } else
                        if (imc >= 35) {
                            imprimir.innerHTML = "Segun tu indice de masa corporal " + imc.toFixed(2);
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
        text1.innerHTML = "La causa más frecuente de peso bajo es la desnutrición, debido a la ausencia de alimentos adecuados. Esta causa de bajo peso puede ser debido a múltiples factores, como un trastorno alimentario, diabetes o glándula tiroides hiperactiva.";
        text2.innerHTML = "Paragraph changed!";
        text3.innerHTML = "Paragraph changed!";
        text4.innerHTML = "Paragraph changed!";
    } else
    if (18.5 <= imc && imc <= 24.9) {   
        text1.innerHTML = "Para lograr y mantener un peso saludable no está relacionada con cambios en la alimentación a corto plazo. Se trata en realidad de llevar un estilo de vida que incluya alimentación saludable, actividad física regular y equilibrio entre la cantidad de calorías consumidas y utilizadas.";
        text2.innerHTML = "Paragraph changed!";
        text3.innerHTML = "Paragraph changed!";
        text4.innerHTML = "Paragraph changed!";
    } else
    if (24.9 < imc && imc <= 29.9) {
        text1.innerHTML = "Una vida sedentaria y comer demasiado y mal son las causas más comunes. Aun así, puede estar derivado de afecciones genéticas, efectos secundarios de algún medicamento o enfermedades endocrinas.";
        text2.innerHTML = "Nuestro equipo de briátrica cuenta con personal altamente calificado: Dra. Carmen Zenovia Moros Psicologa, Lcda. Elix A Lozano E Nutricionista, Dr. Ivar M Duran V Deportólogo, Dra. Sandra P Martin N Gastroenterólogo, Dr. Manuel E Moros V Cirugía Bariátrica";
        text3.innerHTML = "Paragraph changed!";
        text4.innerHTML = "Al colocar el balón intragástrico en el estómago, se reduce la capaidad de este por lo que la persona se siente saciada antes, ya que cabe menos comida.";  
    } else
    if (29.9 < imc && imc <= 34.9) {
        text1.innerHTML = "Existen causas genéticas, causas hormonales y causas de comportamiento, pero normalmente la obesidad se da cuando la persona ingiere más calorías de las que se queman con la actividad física. Estas calorías en exceso, acaban por acumularse en el cuerpo en forma de grasa.";
        text2.innerHTML = "Nuestro equipo de briátrica cuenta con personal altamente calificado: Dra. Carmen Zenovia Moros Psicologa, Lcda. Elix A Lozano E Nutricionista, Dr. Ivar M Duran V Deportólogo, Dra. Sandra P Martin N Gastroenterólogo, Dr. Manuel E Moros V Cirugía Bariátrica";
        text3.innerHTML = "Paragraph changed!";
        text4.innerHTML = "Paragraph changed!";
    } else
    if (imc >= 35) {
        text1.innerHTML = "La ingesta de productos con alto valor calórico, asociado a un estilo de vida sedentario y poco sano suele ser el principal culpable del cambio en el peso de la persona.";
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
        img3.src = URLD + "public/resource/img/balon.png";  
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

/* $("#estatura").on({
    "focus": function (event) {
        $(event.target).select();
    },
    "keyup": function (event) {
        $(event.target).val(function (index, value ) {
            return value.replace(/\D/g, "")
                        .replace(/([0-9])([0-9]{2})$/, '$1,$2')
                        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ".");
        });
    }
});

$("#epeso").on({
    "focus": function (event) {
        $(event.target).select();
    },
    "keyup": function (event) {
        $(event.target).val(function (index, value ) {
            return value.replace(/\D/g, "")
                        .replace(/([0-9])([0-9]{2}))$/, '$1,$2')
                        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ".");
        });
    }
}); */

/* function filterFloat(evt,input){
    // Backspace = 8, Enter = 13, ‘0′ = 48, ‘9′ = 57, ‘.’ = 46, ‘-’ = 43
    var key = window.Event ? evt.which : evt.keyCode;    
    var chark = String.fromCharCode(key);
    var tempValue = input.value+chark;
    if(key >= 48 && key <= 57){
        if(filter(tempValue)=== false){
            return false;
        }else{       
            return true;
        }
    }else{
          if(key == 8 || key == 13 || key == 0) {     
              return true;              
          }else if(key == 46){
                if(filter(tempValue)=== false){
                    return false;
                }else{       
                    return true;
                }
          }else{
              return false;
          }
    }
}
function filter(__val__){
    var preg = /([0-9]+\.?[0-9]{0,4})$/; 
    if(preg.test(__val__) === true){
        return true;
    }else{
       return false;
    }
    
} */