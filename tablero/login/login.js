/** login.js */
let btnLogin = document.querySelector(".btnIngresar");
let frmLogin = document.getElementById('frmLogin');

function btnLogin_click() { 
    alert('Presiono el boton login');

    const params = { id_usuario: 1 };

    fetch('usuario.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(params)
    })
    .then(response => response.json())
    .then(data => {
        alert('nombre: ' + data.nombre);
        frmLogin.action = '../resultado/'
        frmLogin.submit();
    })
    .catch(error => console.error(error)); ;

}

btnLogin.addEventListener("click", btnLogin_click, false);
