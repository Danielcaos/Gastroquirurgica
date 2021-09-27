function eleccionSi() {
    if (!document.getElementById('checkbox1').checked) {
        var alertPlaceholder = document.getElementById('liveAlertPlaceholder')
        var alertTrigger = document.getElementById('eleccionsi')

        function alert(message, type) {
            var wrapper = document.createElement('div')
            wrapper.innerHTML = '<div class="alert alert-' + type + ' alert-danger" role="alert">' + message

            alertPlaceholder.append(wrapper)
        }

        if (alertTrigger) {
            alertTrigger.addEventListener('click', function () {
                alert('Para continuar, acepta nuestros términos y políticas', 'success')
            })
        } 
        
    } else {
        window.location="preguntas.html";
    }
}
