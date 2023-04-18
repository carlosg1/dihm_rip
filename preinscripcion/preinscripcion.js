/* JS - preinscripcion */

$(document).ready(function(){
    window.scrollTo(0,0);
    // seteo de fechas
    $('#fechaDisposicion').datepicker({  format: 'dd/mm/yyyy' });
    $('#fecharegNacMinero').datepicker({  format: 'dd/mm/yyyy' });
    $('#fecharegOperHidroYGas').datepicker({  format: 'dd/mm/yyyy' });
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
        document.querySelector('.wrap-domicilioPlantaIndustrial').style.display = "none";
    });

    personaJuridicaRadio.addEventListener('click', () => {
        // seleccionado: Persona Jurídica
        console.log('Valor seleccionado: ' + personaJuridicaRadio.value);
        // muestra campos que no corresponden completar a una persona humana
        document.querySelector('.wrap-organizacionJuridica').style.display = "flex";
        document.querySelector('.wrap-domicilioPlantaIndustrial').style.display = "flex";
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
// ** enlace agregar acividad ** //
// 
document.querySelector('.agregarActividad').addEventListener("click",(event) => {
    // incremento el contador de div
    let cantFilaActividad = document.getElementsByClassName("row-activity").length;
    cantFilaActividad++;

    // ===================================================================== //

    // Crea el div de clase formNotch de la columna 1 para agregar al div de clase form-outline
    const divFormNotchCol1 = document.createElement('div');
    divFormNotchCol1.className = 'form-notch';

    const leadingCol1 = document.createElement('div');
    leadingCol1.className = 'form-notch-leading';
    leadingCol1.style.width = '9px';

    const middleCol1 = document.createElement('div');
    middleCol1.className = 'form-notch-middle';
    middleCol1.style.width = '68.8px';

    const trailingCol1 = document.createElement('div');
    trailingCol1.className = 'form-notch-trailing';

    divFormNotchCol1.appendChild(leadingCol1);
    divFormNotchCol1.appendChild(middleCol1);
    divFormNotchCol1.appendChild(trailingCol1);
    // --------------------------------------------------------------------- //

    // Crea el div de clase formNotch de la columna 2 para agregar al div de clase form-outline
    const divFormNotchCol2 = document.createElement('div');
    divFormNotchCol2.className = 'form-notch';

    const leadingCol2 = document.createElement('div');
    leadingCol2.className = 'form-notch-leading';
    leadingCol2.style.width = '9px';

    const middleCol2 = document.createElement('div');
    middleCol2.className = 'form-notch-middle';
    middleCol2.style.width = '53.6px';

    const trailingCol2 = document.createElement('div');
    trailingCol2.className = 'form-notch-trailing';

    divFormNotchCol2.appendChild(leadingCol2);
    divFormNotchCol2.appendChild(middleCol2);
    divFormNotchCol2.appendChild(trailingCol2);
    // --------------------------------------------------------------------- //

    // Crea el div de clase formNotch de la columna 3 para agregar al div de clase form-outline
    const divFormNotchCol3 = document.createElement('div');
    divFormNotchCol3.className = 'form-notch';

    const leadingCol3 = document.createElement('div');
    leadingCol3.className = 'form-notch-leading';
    leadingCol3.style.width = '9px';

    const middleCol3 = document.createElement('div');
    middleCol3.className = 'form-notch-middle';
    middleCol3.style.width = '96.8px';

    const trailingCol3 = document.createElement('div');
    trailingCol3.className = 'form-notch-trailing';

    divFormNotchCol3.appendChild(leadingCol3);
    divFormNotchCol3.appendChild(middleCol3);
    divFormNotchCol3.appendChild(trailingCol3);

    // ===================================================================== //

    // row de clase actividades es el que contiene el conjunto de filas de actividades
    var divAllActividades = document.querySelector('.allActividades');

    // Crear el div principal con clase "row row-activity wrap-actividad-4 mb-2"
    var divRow = document.createElement("div");
    divRow.classList.add("row", "row-activity", "wrap-actividad-" + cantFilaActividad, "mb-2");

    // Crear el div secundario de clase "col-xs-12 col-md-2"
    var divCol1 = document.createElement("div");
    divCol1.classList.add("col-xs-12", "col-md-2");

    // Crear el div de formulario con clase "form-outline"
    var divForm1 = document.createElement("div");
    divForm1.classList.add("form-outline");

    // Crear el input con clase "form-control ciiu-4" y nombre y ID "ciiu-4"
    var inputCiiu = document.createElement("input");
    inputCiiu.classList.add("form-control", "ciiu-" + cantFilaActividad);
    inputCiiu.name = "ciiu-" + cantFilaActividad;
    inputCiiu.id = "ciiu-" + cantFilaActividad;
    inputCiiu.type = "text";

    // Crear la etiqueta de formulario con clase "form-label" y "for" asociado a "ciiu-4"
    var labelCiiu = document.createElement("label");
    labelCiiu.classList.add("form-label");
    labelCiiu.htmlFor = "ciiu-" + cantFilaActividad;
    labelCiiu.innerHTML = "C&oacute;digo CIIU";

    // Añadir el input y la etiqueta al div del formulario
    divForm1.appendChild(inputCiiu);
    divForm1.appendChild(labelCiiu);
    divForm1.appendChild(divFormNotchCol1);

    // Añadir el div del formulario al div secundario
    divCol1.appendChild(divForm1);
    // --------------------------- //

    // Crear el segundo div secundario de clase "col-xs-12 col-md-4"
    var divCol2 = document.createElement("div");
    divCol2.classList.add("col-xs-12", "col-md-4");

    // Crear el segundo div de formulario con clase "form-outline"
    var divForm2 = document.createElement("div");
    divForm2.classList.add("form-outline");

    // Crear el segundo input con clase "form-control actividad-4" y nombre y ID "actividad-4"
    var inputActividad = document.createElement("input");
    inputActividad.classList.add("form-control", "actividad-" + cantFilaActividad);
    inputActividad.name = "actividad-" + cantFilaActividad;
    inputActividad.id = "actividad-" + cantFilaActividad;
    inputActividad.type = "text";
    inputActividad.disabled = true;

    // Crear la segunda etiqueta de formulario con clase "form-label" y "for" asociado a "actividad-4"
    var labelActividad = document.createElement("label");
    labelActividad.classList.add("form-label");
    labelActividad.htmlFor = "actividad-" + cantFilaActividad;
    labelActividad.innerHTML = "Actividad";

    // Añadir el segundo input y la segunda etiqueta al segundo div del formulario
    divForm2.appendChild(inputActividad);
    divForm2.appendChild(labelActividad);
    divForm2.appendChild(divFormNotchCol2);

    // Añadir el segundo div del formulario al segundo div secundario
    divCol2.appendChild(divForm2);
    // ---------------------------- //

    // Crear el tercer div secundario de clase "col-xs-12 col-md-2"
    var divCol3 = document.createElement("div");
    divCol3.classList.add("col-xs-12", "col-md-2");

    // Crear el tercer div de formulario con clase "form-outline"
    var divForm3 = document.createElement("div");
    divForm3.classList.add("form-outline");

    // Crear el tercer input 
    var inputFacturacion = document.createElement("input");
    inputFacturacion.className = "form-control text-end";
    inputFacturacion.type = "text";
    inputFacturacion.name = "facturacion-" + cantFilaActividad;
    inputFacturacion.id = "facturacion-" + cantFilaActividad;

    // Crear la etiqueta label para el tercer input
    var labelFacturacion = document.createElement("label");
    labelFacturacion.className = "form-label";
    labelFacturacion.htmlFor = "facturacion-" + cantFilaActividad;
    labelFacturacion.textContent = "Facturación anual";

    // Agregar el tercer input y su etiqueta label al div de clase "form-outline"
    divForm3.appendChild(inputFacturacion);
    divForm3.appendChild(labelFacturacion);
    divForm3.appendChild(divFormNotchCol3);

    // Agregar el div de clase "form-outline" al segundo div de la estructura
    divCol3.appendChild(divForm3);

    // Agregar el segundo y tercer div a la estructura principal
    divRow.appendChild(divCol1);
    divRow.appendChild(divCol2);
    divRow.appendChild(divCol3);

    // Agregar las tres columnas al div de clase allActividades
    divAllActividades.appendChild(divRow);

    //event.stopPropagation();
});
//