/* Validacion de politcas y correo electronico */
function eleccionSi() {
    email = document.getElementById('email').value
    re = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;

    if (!document.getElementById('checkbox1').checked) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Para continuar, acepta nuestros términos y políticas',
            confirmButtonColor: '#2a6db3'
        })
    }else 
    if (email.length==0 || !re.exec(email)) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Por favor ingrese una direccion de correo electronico valida',
            confirmButtonColor: '#2a6db3'
        })
    }else {
            window.location = "pregunta-1.html";
    }
    
}

/* Primera pregunta */
function pregunta1(){
    edad = document.getElementById('edad').value
    estatura = document.getElementById('estatura').value
    peso = document.getElementById('peso').value

    valoresAceptados = /^[0-9]+$/;

    if(edad.length==0 || estatura.length==0 || peso.length==0){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Por favor complete los campos y/o ingrese valores numericos',
            confirmButtonColor: '#2a6db3'
        })
    }else {
        window.location = "pregunta-2.html";
    }
}
