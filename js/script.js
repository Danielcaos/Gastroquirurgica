/* Validacion de politcas y correo electronico */
function eleccionSi() {
    email = document.getElementById('email').value
    re = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    if (email.length==0 || !re.exec(email)) {
        console.log('hola')
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Por favor ingrese una direccion de correo electronico valida',
            confirmButtonColor: '#2a6db3'
        })
        if (!document.getElementById('checkbox1').checked) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Para continuar, acepta nuestros términos y políticas',
                confirmButtonColor: '#2a6db3'
            })
        } else {
            window.location = "preguntas.html";
        }
    }
}
