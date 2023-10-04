/** registro.js */
let frmLogin = document.getElementById('frmLogin');
let frmMsg = document.querySelector(".form-msg");

async function enviarFormulario(ev) {
    
    // enviamos el formulario mediante ajax
    ev.preventDefault();

    // ya estamos enviando el formulario?
    if(enviarFormulario.enviando) { return; }
    enviarFormulario.enviando = true;

    // obtenemos el formulario
    frmMsg.innerHTML = "Enviando formulario...";

    // obtenemos los datos del formulario
    var datos = new FormData();

    datos.append("token", "251473");
    datos.append("cuit", document.querySelector(".cuit").value);
    datos.append("contrasena", document.querySelector(".contrasena").value);
    datos.append("email", document.querySelector(".email").value);

    // preparamos la informacion de envio
    var init = {
        method: "POST",
        body: datos
    };

    // peticion ajax con fetch
    try {
        var response = await fetch('registro.php', init);
        if(response.ok) {
            var respuesta = await response.json();

            if(respuesta.login == true) {

                frmLogin.action = "../registroCompleto";
                frmLogin.reset();
                frmLogin.submit();

            } else {

                frmMsg.innerHTML = respuesta.mensaje;

                // permitimos volver a enviar el formulario
                enviarFormulario.enviando = false;

                return false;

            }
            
        } else {

            throw new Error(response.statusText);

        }

    } catch (err) {
        frmMsg.innerHTML  = 'Error: ' + err.message;
    }

    // permitimos volver a enviar el formulario
    enviarFormulario.enviando = false;
}

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("btnRegistrar").addEventListener("click", enviarFormulario, false);
}, false);


