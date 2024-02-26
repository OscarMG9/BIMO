function validarUsuario() {
    var usuario = document.getElementById('usuario').value;
    console.log(usuario)
}

function validarContrasena() {
    var password = document.getElementById('pass').value;
    console.log(password)
}

function validarFormulario() {
    // Llama a todas las funciones de validación y verifica si todas son exitosas
    var esValido = validarUsuario() && validarContrasena();

    // Si esValido es true, el formulario se enviará; de lo contrario, se detendrá el envío.
    if (!esValido) {
        // Detener el envío del formulario
        event.preventDefault(); // Esto detendrá el envío del formulario
    }

    return esValido;
}