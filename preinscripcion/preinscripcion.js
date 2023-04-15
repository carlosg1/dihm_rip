/* JS - preinscripcion */

$(document).ready(function(){;
    window.scrollTo(0,0);
    // seteo de fechas
    $('#fechaDisposicion').datepicker({  format: 'dd/mm/yyyy' });
    $('#fecharegNacMinero').datepicker({  format: 'dd/mm/yyyy' });
    //
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
    //
    // ordenamiento juridico (persona humana / persona juridica)
    // Código JavaScript para manejar los valores de los radio buttons
    const personaHumanaRadio = document.getElementById('personaHumana');
    const personaJuridicaRadio = document.getElementById('personaJuridica');

    personaHumanaRadio.addEventListener('click', () => {
        // seleccionado: Persona Humana
        console.log('Valor seleccionado: ' + personaHumanaRadio.value);
        // oculta campos que no corresponden completar a una persona humana
        document.querySelector('.wrap-organizacionJuridica').style.display = "none";
    });

    personaJuridicaRadio.addEventListener('click', () => {
        // seleccionado: Persona Jurídica
        console.log('Valor seleccionado: ' + personaJuridicaRadio.value);
        // muestra campos que no corresponden completar a una persona humana
        document.querySelector('.wrap-organizacionJuridica').style.display = "flex";
    });
    //
    // boton 1 siguiente 
    let boton1 = document.querySelector('.boton-1');
    boton1.addEventListener("click", (event) => {
        document.querySelector(".paso-1").classList.add('sale-izquierda');
        document.querySelector(".paso-1").style.display='none';
        document.querySelector(".paso-2").style.display='block';
        document.querySelector(".paso-2").classList.remove('sale-derecha');
        window.scrollTo(0,0);
        event.stopPropagation();
    }, false);
    // 
    // boton 2 << anterior 
    let boton2Anterior = document.querySelector('.boton-2-anterior');
    boton2Anterior.addEventListener("click",(event) => {
        document.querySelector('.paso-2').classList.add('sale-derecha');
        document.querySelector('.paso-2').style.display='none';
        document.querySelector('.paso-1').style.display='block';
        document.querySelector('.paso-1').classList.remove('sale-izquierda');
        window.scrollTo(0,0);
        event.stopPropagation();
    }, false); 
    //
    // boton 2 siguiente >>
    let boton2Siguiente = document.querySelector('.boton-2-siguiente');
    boton2Siguiente.addEventListener("click",(event) => {
        document.querySelector(".paso-2").classList.add('sale-izquierda');
        document.querySelector(".paso-2").style.display='none';
        document.querySelector(".paso-3").style.display='block';
        document.querySelector(".paso-3").classList.remove('sale-derecha');
        window.scrollTo(0,0);
        event.stopPropagation();
    }, false);
    //
    // boton 3 << anterior
    document.querySelector('.boton-3-anterior').addEventListener("click",(event) => {
        document.querySelector('.paso-3').classList.add('sale-derecha');
        document.querySelector('.paso-3').style.display='none';
        document.querySelector('.paso-2').style.display='block';
        document.querySelector('.paso-2').classList.remove('sale-izquierda');
        window.scrollTo(0,0);
        event.stopPropagation();
    }, false); 
    //
    // boton 3 siguiente >>
    document.querySelector('.boton-3-siguiente').addEventListener("click",(event) => {
        document.querySelector(".paso-3").classList.add('sale-izquierda');
        document.querySelector(".paso-3").style.display='none';
        document.querySelector(".paso-4").style.display='block';
        document.querySelector(".paso-4").classList.remove('sale-derecha');
        window.scrollTo(0,0);
        event.stopPropagation();
    }, false);
    //
    // boton 4 << anterior 
    document.querySelector('.boton-4-anterior').addEventListener("click",(event) => {
        document.querySelector('.paso-4').classList.add('sale-derecha');
        document.querySelector('.paso-4').style.display='none';
        document.querySelector('.paso-3').style.display='block';
        document.querySelector('.paso-3').classList.remove('sale-izquierda');
        window.scrollTo(0,0);
        event.stopPropagation();
    }, false); 
    //
    // boton 4 siguiente >>
    document.querySelector('.boton-4-siguiente').addEventListener("click",(event) => {
        document.querySelector(".paso-4").classList.add('sale-izquierda');
        document.querySelector(".paso-4").style.display='none';
        document.querySelector(".paso-5").style.display='block';
        document.querySelector(".paso-5").classList.remove('sale-derecha');
        window.scrollTo(0,0);
        event.stopPropagation();
    }, false);
    //
    // boton 5 << anterior 
    document.querySelector('.boton-5-anterior').addEventListener("click",(event) => {
        document.querySelector('.paso-5').classList.add('sale-derecha');
        document.querySelector('.paso-5').style.display='none';
        document.querySelector('.paso-4').style.display='block';
        document.querySelector('.paso-4').classList.remove('sale-izquierda');
        window.scrollTo(0,0);
        event.stopPropagation();
    }, false); 
    //
    // boton 5 siguiente >>
    document.querySelector('.boton-5-siguiente').addEventListener("click",(event) => {
        document.querySelector(".paso-5").classList.add('sale-izquierda');
        document.querySelector(".paso-5").style.display='none';
        document.querySelector(".paso-6").style.display='block';
        document.querySelector(".paso-6").classList.remove('sale-derecha');
        window.scrollTo(0,0);
        event.stopPropagation();
    }, false);
    //
    // boton 6 << anterior 
    document.querySelector('.boton-6-anterior').addEventListener("click",(event) => {
        document.querySelector('.paso-6').classList.add('sale-derecha');
        document.querySelector('.paso-6').style.display='none';
        document.querySelector('.paso-5').style.display='block';
        document.querySelector('.paso-5').classList.remove('sale-izquierda');
        window.scrollTo(0,0);
        event.stopPropagation();
    }, false); 
    //
    // boton 6 siguiente >>
    document.querySelector('.boton-6-siguiente').addEventListener("click",(event) => {
        document.querySelector(".paso-6").classList.add('sale-izquierda');
        document.querySelector(".paso-6").style.display='none';
        document.querySelector(".paso-7").style.display='block';
        document.querySelector(".paso-7").classList.remove('sale-derecha');
        window.scrollTo(0,0);
        event.stopPropagation();
    }, false);
    //
    // boton 6 << anterior 
    document.querySelector('.boton-7-anterior').addEventListener("click",(event) => {
        document.querySelector('.paso-7').classList.add('sale-derecha');
        document.querySelector('.paso-7').style.display='none';
        document.querySelector('.paso-6').style.display='block';
        document.querySelector('.paso-6').classList.remove('sale-izquierda');
        window.scrollTo(0,0);
        event.stopPropagation();
    }, false); 
    //
    // Radio-button Relacion con la empresa  
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
// 04- ACTIVIDAD
// radio-button rubro al que pertenece
document.getElementsByName('check-rubroActividad').forEach(element => {
    if(element.value === '100') {
        element.addEventListener("click", event => {
            document.querySelector('.rubroActividadOtro').disabled = false;
            document.querySelector('.rubroActividadOtro').focus();
            event.stopPropagation();
       }, false);

    } else {
        element.addEventListener("click", event => {
            document.querySelector('.rubroActividadOtro').disabled = true;
            event.stopPropagation();
        }, false);
    }
});
//
// radio-button tipo de actividad
document.getElementsByName('check-tipoActividad').forEach(element => {
    if(element.value === '100') {
        element.addEventListener("click", event => {
            document.querySelector('.tipoActividadOtro').disabled = false;
            document.querySelector('.tipoActividadOtro').focus();
            event.stopPropagation();
       }, false);

    } else {
        element.addEventListener("click", event => {
            document.querySelector('.tipoActividadOtro').disabled = true;
            event.stopPropagation();
        }, false);
    }
});
//