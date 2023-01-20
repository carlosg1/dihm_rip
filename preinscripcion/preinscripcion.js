/* JS - preinscripcion */

$(document).ready(function(){;
    // organizacion juridica campo select
    let sOrganizacionJuridica = document.getElementById('organizacionJuridica');    // campo select
    let tOrganizacionJuridica = document.getElementById('organizacionJuridica-1');  // campo input de organizacion juridica
    //
    function hOrganizacionJuridica(){
        console.log(this.value);
        switch (this.value){
            case '10':
                tOrganizacionJuridica.disabled = false;
                tOrganizacionJuridica.focus();
                break;
            default:
                tOrganizacionJuridica.disabled = true;
        }
    }
    sOrganizacionJuridica.addEventListener("change", hOrganizacionJuridica, false);
    // 
    // boton 1 siguiente 
    let boton1 = document.querySelector('.boton-1');
    boton1.addEventListener("click", (event) => {
        document.querySelector(".paso-1").classList.add('sale-izquierda');
        document.querySelector(".paso-1").style.display='none';
        document.querySelector(".paso-2").style.display='';
        document.querySelector(".paso-2").classList.remove('sale-derecha');
        document.querySelector('#apellidoYNombre').focus();
        window.scrollTo(0,0);
        event.stopPropagation();
    }, false);
    //
    // boton 2 siguiente >>
    let boton2Siguiente = document.querySelector('.boton-2-siguiente');
    boton2Siguiente.addEventListener("click",(event) => {
        document.querySelector(".paso-2").classList.add('sale-izquierda');
        document.querySelector(".paso-2").style.display='none';
        document.querySelector(".paso-3").style.display='';
        document.querySelector(".paso-3").classList.remove('sale-derecha');
        document.querySelector('#apellidoYNombre').focus();
        window.scrollTo(0,0);
        event.stopPropagation();
    }, false);
    // 
    // boton 2 << anterior 
    let boton2Anterior = document.querySelector('.boton-2-anterior');
    boton2Anterior.addEventListener("click",(event) => {
        document.querySelector('.paso-2').classList.add('sale-derecha');
        document.querySelector('.paso-2').style.display='none';
        document.querySelector('.paso-1').style.display='';
        document.querySelector('.paso-1').classList.remove('sale-izquierda');
        document.querySelector('#relacionConLaEmpresa').focus();
        window.scrollTo(0,0);
        event.stopPropagation();
    }, false); 
    // boton 3 << anterior 
    let boton3Anterior = document.querySelector('.boton-3-anterior');
    boton3Anterior.addEventListener("click",(event) => {
        document.querySelector('.paso-3').classList.add('sale-derecha');
        document.querySelector('.paso-3').style.display='none';
        document.querySelector('.paso-2').style.display='';
        document.querySelector('.paso-2').classList.remove('sale-izquierda');
        document.querySelector('#apellidoYNombre').focus();
        window.scrollTo(0,0);
        event.stopPropagation();
    }, false); 
    //
    // Relacion con la empresa  
    // cuando selecciona el radio "Otros" => activa el texbox para escribir otro tipo de relacion
    // cualquier otro radiobutton que seleccione => desactiva el textbox para escribir otros
    document.getElementsByName('check-relacionConLaEmpresa').forEach(element => {
        if(element.value === '100') {
            element.addEventListener("click", event => {
                document.querySelector('.relacionEmpresaOtro').disabled = false;
                document.querySelector('.relacionEmpresaOtro').focus();
                event.stopPropagation();
           }, false);

        } else {
            element.addEventListener("click", event => {
                document.querySelector('.relacionEmpresaOtro').disabled = true;
                event.stopPropagation();
            }, false);
        }
    });
});
//