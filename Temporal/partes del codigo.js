//
// ** enlace agregar acividad ** //
// 
document.querySelector('.agregarActividad').addEventListener("click", () => {
    // incremento el contador de div
    let cantFilaActividad = document.getElementsByClassName("row-activity").length;
    cantFilaActividad++;

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
    
    const divCol4 = document.createElement('div');
    divCol4.classList.add('col-xs-12', 'col-md-2');

    // crea el anchor a
    const aElim = document.createElement('span');
    // aElim.href = '#';
    aElim.classList.add('btn-eliminar-' + cantFilaActividad);
    // aElim.title = 'Eliminar';
    aElim.divId = "wrap-actividad-" + cantFilaActividad;
    aElim.addEventListener('click', (e) => {
        console.log('div borrado: ', document.querySelector('.' + e.currentTarget.divId));
        document.querySelector('.' + e.currentTarget.divId).parentNode.removeChild(document.querySelector('.' + e.currentTarget.divId));
    }, false); 

    const iElim = document.createElement('i');
    iElim.classList.add('fas', 'fa-times', 'pt-3', 'btn-eliminar-actividad');

    aElim.appendChild(iElim);
    divCol4.appendChild(aElim);

    // Agregar el segundo y tercer y cuarto div a la estructura principal
    divRow.appendChild(divCol1);
    divRow.appendChild(divCol2);
    divRow.appendChild(divCol3);
    divRow.appendChild(divCol4);

    // Agregar las tres columnas al div de clase allActividades
    divAllActividades.appendChild(divRow);

});