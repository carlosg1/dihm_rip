$(document).ready(function(){
    //window.scrollTo(0,0);
    // seteo de fechas
    $('#fecha').datepicker({  format: 'dd/mm/yyyy' });
    $('#fechaDisposicion').datepicker({  format: 'dd/mm/yyyy' });
    $('#fecharegNacMinero').datepicker({  format: 'dd/mm/yyyy' });
    $('#fecharegOperHidroYGas').datepicker({  format: 'dd/mm/yyyy' });
    $('#fechaHabMunicipal').datepicker({  format: 'dd/mm/yyyy' });
    //
    /* ----------------- funciones para grabar los pasos de la preinscripcion ------------------- */
    function callPHP_1(url, data) {
        // Crear una nueva promesa
        return new Promise((resolve, reject) => {
            // Crear un objeto XMLHttpRequest
            const xhr = new XMLHttpRequest();
        
            xhr.open('GET', url + data.cadenaGet);

            // Establecer la cabecera de tipo de contenido
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            // Manejar la respuesta
            xhr.onload = () => {
            if (xhr.status === 200) {
                // Resolución exitosa de la promesa
                resolve(xhr.responseText);
            } else {
                // Rechazo de la promesa debido a un error
                reject(new Error(`Error al llamar a ${url}`));
            }
            };

            // Manejar cualquier error de red
            xhr.onerror = () => {
                reject(new Error(`Error de red al llamar a ${url}`));
            };

            // Enviar la solicitud con los datos proporcionados
            xhr.send();
        });
    }

    /* insertar registros */
    // --- graba la pantalla 1 ---//
    function insertarRegistroPaso1() {
        var parametroGet ='';
        parametroGet += '?cuit=' + document.getElementById('cuit').value;
        parametroGet += '&razon_social=' + document.getElementById('razonSocial').value;
        parametroGet += '&inicio_actividad=' + document.getElementById('fecha').value;
        parametroGet += '&organizacion_juridica=' + document.getElementById('organizacionJuridica').value;
        parametroGet += '&relacion_titular_planta=' + valorRelacionTitularEmpresa();
        parametroGet += '&ordenamiento_juridico=' + valorOrdenamientoJuridico();
        parametroGet += '&variedad_producto=' + '1';
        parametroGet += '&tipo_disposicion=' + '1';
        parametroGet += '&descripcion=' + '-';
        parametroGet += '&nro=' + document.getElementById('txtDisposicion').value;
        parametroGet += '&nro_ingreso_bruto=' + document.getElementById('nroIngresoBruto').value;
        parametroGet += '&fecha_hab_ing_bruto=' + document.getElementById('fechaHabMunicipal').value;
        /* ----------------------- actividades ------------------ */
        parametroGet += '&actividad_tipo_1=' + '1';
        parametroGet += '&ciiu_1=' + document.getElementById('ciiu-1').value;
        parametroGet += '&facturacion_anual_1=' + document.getElementById('facturacion-1').value;
        parametroGet += '&ciiu_2=' + document.getElementById('ciiu-2').value;
        parametroGet += '&facturacion_anual_2=' + document.getElementById('facturacion-2').value;
        parametroGet += '&ciiu_3=' + document.getElementById('ciiu-3').value;
        parametroGet += '&facturacion_anual_3=' + document.getElementById('facturacion-3').value;
        parametroGet += '&ciiu_4=' + document.getElementById('ciiu-4').value;
        parametroGet += '&facturacion_anual_4=' + document.getElementById('facturacion-4').value;
        /* ----------------------- actividades ------------------ */
         // Llamada a la función que devuelve una promesa
         callPHP_1('inserta_registro_paso_1.php', { cadenaGet: parametroGet })
         .then((data) => {
             // Manejar el resultado de la promesa aquí
             console.log(data);
             console.log('-- Pantalla 1 grabada');
         })
         .catch((error) => {
             // Manejar cualquier error aquí
             console.log('-- Pantalla 1 Error');
             console.error(error);
         });
    }

    // --- graba pantalla 2 ---//
    function insertarRegistroPaso2() {
        var parametroGet ='';
        parametroGet += '?cuit=' + document.getElementById('cuit').value;
        parametroGet += '&nombre_titular=' + document.getElementById('apellidoYNombre').value;
        parametroGet += '&cuit_titular=' + document.getElementById('cuitTitular').value;
        parametroGet += '&telefono_titular=' + document.getElementById('telefonoTitular').value;

        // Llamada a la función que devuelve una promesa
        callPHP_1('inserta_registro_paso_2.php', { cadenaGet: parametroGet })
        .then((data) => {
            // Manejar el resultado de la promesa aquí
            console.log(data);
            console.log('-- Pantalla 2 grabada');
        })
        .catch((error) => {
            // Manejar cualquier error aquí
            console.log('-- Pantalla 2 Error');
            console.error(error);
        });
    }

    // --- graba pantalla 3 ---//
    function insertarRegistroPaso3() {
        var parametroGet ='';
        parametroGet += '?cuit=' + document.getElementById('cuit').value;
        parametroGet += '&variedad_producto=' + valorVariedadProductos();
        parametroGet += '&variedad_prod_desc=' + valorEtiquetaVariedadProducto();
        /** 1 */
        parametroGet += '&ppos_denominacion_1=' + document.getElementById('ppos_denominacion_1').value;
        parametroGet += '&ppos_raa_unidadMedida_1=' + document.getElementById('ppos_raa_unidadMedida_1').value;
        parametroGet += '&ppos_raa_cantMensual_1=' + document.getElementById('ppos_raa_cantMensual_1').value;
        parametroGet += '&ppos_raa_cantAnual_1=' + document.getElementById('ppos_raa_cantAnual_1').value;
        parametroGet += '&ppos_raa_porcentaje_1=' + document.getElementById('ppos_raa_porcentaje_1').value;
        parametroGet += '&ppos_pav_cantidadMensual_1=' + document.getElementById('ppos_pav_cantidadMensual_1').value;
        parametroGet += '&ppos_pav_cantidadAnual_1=' + document.getElementById('ppos_pav_cantidadAnual_1').value;
        parametroGet += '&ppos_pav_porcentaje_1=' + document.getElementById('ppos_pav_porcentaje_1').value;
        /** 2 */
        parametroGet += '&ppos_denominacion_2=' + document.getElementById('ppos_denominacion_2').value;
        parametroGet += '&ppos_raa_unidadMedida_2=' + document.getElementById('ppos_raa_unidadMedida_2').value;
        parametroGet += '&ppos_raa_cantMensual_2=' + document.getElementById('ppos_raa_cantMensual_2').value;
        parametroGet += '&ppos_raa_cantAnual_2=' + document.getElementById('ppos_raa_cantAnual_2').value;
        parametroGet += '&ppos_raa_porcentaje_2=' + document.getElementById('ppos_raa_porcentaje_2').value;
        parametroGet += '&ppos_pav_cantidadMensual_2=' + document.getElementById('ppos_pav_cantidadMensual_2').value;
        parametroGet += '&ppos_pav_cantidadAnual_2=' + document.getElementById('ppos_pav_cantidadAnual_2').value;
        parametroGet += '&ppos_pav_porcentaje_2=' + document.getElementById('ppos_pav_porcentaje_2').value;
        /** 3 */
        parametroGet += '&ppos_denominacion_3=' + document.getElementById('ppos_denominacion_3').value;
        parametroGet += '&ppos_raa_unidadMedida_3=' + document.getElementById('ppos_raa_unidadMedida_3').value;
        parametroGet += '&ppos_raa_cantMensual_3=' + document.getElementById('ppos_raa_cantMensual_3').value;
        parametroGet += '&ppos_raa_cantAnual_3=' + document.getElementById('ppos_raa_cantAnual_3').value;
        parametroGet += '&ppos_raa_porcentaje_3=' + document.getElementById('ppos_raa_porcentaje_3').value;
        parametroGet += '&ppos_pav_cantidadMensual_3=' + document.getElementById('ppos_pav_cantidadMensual_3').value;
        parametroGet += '&ppos_pav_cantidadAnual_3=' + document.getElementById('ppos_pav_cantidadAnual_3').value;
        parametroGet += '&ppos_pav_porcentaje_3=' + document.getElementById('ppos_pav_porcentaje_3').value;
        /** 4 */
        parametroGet += '&ppos_denominacion_4=' + document.getElementById('ppos_denominacion_4').value;
        parametroGet += '&ppos_raa_unidadMedida_4=' + document.getElementById('ppos_raa_unidadMedida_4').value;
        parametroGet += '&ppos_raa_cantMensual_4=' + document.getElementById('ppos_raa_cantMensual_4').value;
        parametroGet += '&ppos_raa_cantAnual_4=' + document.getElementById('ppos_raa_cantAnual_4').value;
        parametroGet += '&ppos_raa_porcentaje_4=' + document.getElementById('ppos_raa_porcentaje_4').value;
        parametroGet += '&ppos_pav_cantidadMensual_4=' + document.getElementById('ppos_pav_cantidadMensual_4').value;
        parametroGet += '&ppos_pav_cantidadAnual_4=' + document.getElementById('ppos_pav_cantidadAnual_4').value;
        parametroGet += '&ppos_pav_porcentaje_4=' + document.getElementById('ppos_pav_porcentaje_4').value;
        /** 5 */
        parametroGet += '&ppos_denominacion_5=' + document.getElementById('ppos_denominacion_5').value;
        parametroGet += '&ppos_raa_unidadMedida_5=' + document.getElementById('ppos_raa_unidadMedida_5').value;
        parametroGet += '&ppos_raa_cantMensual_5=' + document.getElementById('ppos_raa_cantMensual_5').value;
        parametroGet += '&ppos_raa_cantAnual_5=' + document.getElementById('ppos_raa_cantAnual_5').value;
        parametroGet += '&ppos_raa_porcentaje_5=' + document.getElementById('ppos_raa_porcentaje_5').value;
        parametroGet += '&ppos_pav_cantidadMensual_5=' + document.getElementById('ppos_pav_cantidadMensual_5').value;
        parametroGet += '&ppos_pav_cantidadAnual_5=' + document.getElementById('ppos_pav_cantidadAnual_5').value;
        parametroGet += '&ppos_pav_porcentaje_5=' + document.getElementById('ppos_pav_porcentaje_5').value;

        // Llamada a la función que devuelve una promesa
        callPHP_1('inserta_registro_paso_3.php', { cadenaGet: parametroGet })
        .then((data) => {
            // Manejar el resultado de la promesa aquí
            console.log(data);
            console.log('-- Pantalla 2 grabada');
        })
        .catch((error) => {
            // Manejar cualquier error aquí
            console.log('-- Pantalla 2 Error');
            console.error(error);
        });
    }

    // ----- graba pantalla 4 ----- //
    const insertaRegistroPaso4 = () => {
        var parametroGet ='';
        parametroGet += '?cuit=' + document.getElementById('cuit').value;
        parametroGet += '&prod_cantObradores=' + document.getElementById('prod_cantObradores').value;
        parametroGet += '&prod_cantPlanta=' + document.getElementById('prod_cantPlanta').value;
        parametroGet += '&dpi_supTerreno=' + document.getElementById('dpi_supTerreno').value;
        parametroGet += '&dpi_supCubierta=' + document.getElementById('dpi_supCubierta').value;
        parametroGet += '&dpi_supSemiCubierta=' + document.getElementById('dpi_supSemiCubierta').value;
        // -----
        parametroGet += '&prodNombreLinea_1=' + document.getElementById('prodNombreLinea_1').value;
        parametroGet += '&prodUnidadMedida_1=' + document.getElementById('prodUnidadMedida_1').value;
        parametroGet += '&prodCapaInstaladaRAA_1=' + document.getElementById('prodCapaInstaladaRAA_1').value;
        parametroGet += '&prodCapaInstaladaPAA_1=' + document.getElementById('prodCapaInstaladaPAA_1').value;
        parametroGet += '&prodNivelProdRAA_1=' + document.getElementById('prodNivelProdRAA_1').value;
        parametroGet += '&prodNivelProdPAA_1=' + document.getElementById('prodNivelProdPAA_1').value;
        parametroGet += '&prodAprovechamCapacRAA_1=' + document.getElementById('prodAprovechamCapacRAA_1').value;
        parametroGet += '&prodAprovechamCapacPAA_1=' + document.getElementById('prodAprovechamCapacPAA_1').value;
        // ------
        parametroGet += '&prodNombreLinea_2=' + document.getElementById('prodNombreLinea_2').value;
        parametroGet += '&prodUnidadMedida_2=' + document.getElementById('prodUnidadMedida_2').value;
        parametroGet += '&prodCapaInstaladaRAA_2=' + document.getElementById('prodCapaInstaladaRAA_2').value;
        parametroGet += '&prodCapaInstaladaPAA_2=' + document.getElementById('prodCapaInstaladaPAA_2').value;
        parametroGet += '&prodNivelProdRAA_2=' + document.getElementById('prodNivelProdRAA_2').value;
        parametroGet += '&prodNivelProdPAA_2=' + document.getElementById('prodNivelProdPAA_2').value;
        parametroGet += '&prodAprovechamCapacRAA_2=' + document.getElementById('prodAprovechamCapacRAA_2').value;
        parametroGet += '&prodAprovechamCapacPAA_2=' + document.getElementById('prodAprovechamCapacPAA_2').value;
        // -----
        parametroGet += '&prodNombreLinea_3=' + document.getElementById('prodNombreLinea_3').value;
        parametroGet += '&prodUnidadMedida_3=' + document.getElementById('prodUnidadMedida_3').value;
        parametroGet += '&prodCapaInstaladaRAA_3=' + document.getElementById('prodCapaInstaladaRAA_3').value;
        parametroGet += '&prodCapaInstaladaPAA_3=' + document.getElementById('prodCapaInstaladaPAA_3').value;
        parametroGet += '&prodNivelProdRAA_3=' + document.getElementById('prodNivelProdRAA_3').value;
        parametroGet += '&prodNivelProdPAA_3=' + document.getElementById('prodNivelProdPAA_3').value;
        parametroGet += '&prodAprovechamCapacRAA_3=' + document.getElementById('prodAprovechamCapacRAA_3').value;
        parametroGet += '&prodAprovechamCapacPAA_3=' + document.getElementById('prodAprovechamCapacPAA_3').value;
        // -----
        parametroGet += '&cantidadMaquinas=' + document.getElementById('cantidadMaquinas').value;
        parametroGet += '&potenciaInstalada=' + document.getElementById('potenciaInstalada').value;
        parametroGet += '&consumoElectrico=' + document.getElementById('consumoElectrico').value;

        // Llamada a la función que devuelve una promesa
        callPHP_1('inserta_registro_paso_4.php', { cadenaGet: parametroGet })
        .then((data) => {
            // Manejar el resultado de la promesa aquí
            console.log(data);
            console.log('-- Pantalla 4 grabada');
            console.log('-- ---');
        })
        .catch((error) => {
            // Manejar cualquier error aquí
            console.log('-- Pantalla 4 Error');
            console.log('-- ---');
            console.error(error);
        });
    }

    // ----- graba pantalla 5 ----- //
    const insertaRegistroPaso5 = () => {
        var parametroGet ='';
        parametroGet += '?cuit=' + document.getElementById('cuit').value;
        parametroGet += '&tipo_mercado=' + valorMercadoObjetivo();
        parametroGet += '&porcentaje_venta_consumidor_final=' + document.getElementById('clienteConsFinal').value;
        parametroGet += '&porcentaje_venta_mayorista=' + document.getElementById('clienteMayorista').value;
        // -----

        if(document.getElementById('cuit').value !== '') {
            // Llamada a la función que devuelve una promesa
            callPHP_1('inserta_registro_paso_5.php', { cadenaGet: parametroGet })
            .then((data) => {
                // Manejar el resultado de la promesa aquí
                console.log(data);
                console.log('-- Pantalla 5 grabada');
                console.log('-- ---');
            })
            .catch((error) => {
                // Manejar cualquier error aquí
                console.log('-- Pantalla 5 Error');
                console.log('-- ---');
                console.error(error);
            });
        }
    }

    // ----- graba pantalla 6 ----- //
    const insertaRegistroPaso6 = () => {
        var parametroGet ='';
        parametroGet += '?cuit=' + document.getElementById('cuit').value;
        parametroGet += '&total_empleado=' + document.getElementById('totalEmpleados').value;
        parametroGet += '&miembro_familia=' + document.getElementById('cantidadFamiliares').value;
        parametroGet += '&propietario=' + document.getElementById('cantidadPropietarios').value;
        parametroGet += '&accionista=' + document.getElementById('cantidadAccionistas').value;
        // -----

        if(document.getElementById('cuit').value !== '') {
            // Llamada a la función que devuelve una promesa
            callPHP_1('inserta_registro_paso_6.php', { cadenaGet: parametroGet })
            .then((data) => {
                // Manejar el resultado de la promesa aquí
                console.log(data);
                console.log('-- Pantalla 6 grabada');
                console.log('-- ---');
            })
            .catch((error) => {
                // Manejar cualquier error aquí
                console.log('-- Pantalla 6 Error');
                console.log('-- ---');
                console.error(error);
            });
        }
    }

    // ----- graba pantalla 7 ----- //
    const insertaRegistroPaso7 = () => {
        var parametroGet ='';
        parametroGet += '?cuit=' + document.getElementById('cuit').value;
        parametroGet += '&id_proyecto_mejora_tipo=1';
        parametroGet += '&estado_proyecto=' + valorEstadoProyecto('amCapProd');
        parametroGet += '&porcentaje_avance=' + document.getElementById('cantidadPropietarios').value;
        parametroGet += '&plazo_implementacion=' + document.getElementById('cantidadAccionistas').value;
        parametroGet += '&fuente_financiamiento=' + document.getElementById('cantidadAccionistas').value;
        parametroGet += '&monto_estimado_inversion=' + document.getElementById('cantidadAccionistas').value;
        parametroGet += '&asistencia_tecnica_necesaria=' + document.getElementById('cantidadAccionistas').value;
        parametroGet += '&necesidad_mas_relevante=' + document.getElementById('cantidadAccionistas').value;
        // -----

        if(document.getElementById('cuit').value !== '') {
            // Llamada a la función que devuelve una promesa
            callPHP_1('inserta_registro_paso_7.php', { cadenaGet: parametroGet })
            .then((data) => {
                // Manejar el resultado de la promesa aquí
                console.log(data);
                console.log('-- Pantalla 6 grabada');
                console.log('-- ---');
            })
            .catch((error) => {
                // Manejar cualquier error aquí
                console.log('-- Pantalla 6 Error');
                console.log('-- ---');
                console.error(error);
            });
        }
    }

    //
    // organizacion juridica campo select
    var sOrganizacionJuridica = document.getElementById('organizacionJuridica');    // campo select
    var tOrganizacionJuridica = document.getElementById('organizacionJuridica-1');  // campo input de organizacion juridica
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
    var personaHumanaRadio = document.getElementById('personaHumana');
    var personaJuridicaRadio = document.getElementById('personaJuridica');
    //
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
    // boton 1 siguiente >>
    let boton1 = document.querySelector('.boton-1');
    boton1.addEventListener("click", (event) => {

        // controla que se haya ingresado el cuit //
        var cuit1 = document.getElementById('cuit');
        if(isNaN(cuit1.value) || cuit1.value == '') {
            document.getElementById('cuit').classList.add('is-invalid');
            // Agregar la propiedad placeholder con el texto y color deseado
            cuit1.placeholder = "Falta el CUIT";
            cuit1.focus();
            event.stopPropagation();
            return false;
        } else {
            cuit1.classList.remove('is-invalid');
            cuit1.placeholder = "";
        }

        document.querySelector(".paso-1").classList.add('sale-izquierda');
        document.querySelector(".paso-1").style.display='none';
        document.querySelector(".paso-2").style.display='block';
        if(document.querySelector(".paso-2").classList.contains('sale-derecha')) {
            document.querySelector(".paso-2").classList.remove('sale-derecha');
        }
        if(document.querySelector(".paso-2").classList.contains('sale-izquierda')) {
            document.querySelector(".paso-2").classList.remove('sale-izquierda');
        }
        // ---------- cambio de fondo al elemento circulo que muestra los pasos ----------
        document.getElementById('secPaso1').classList.remove('paso-bg-activo');
        document.getElementById('secPaso1').classList.add('paso-bg-inactivo');
        //
        document.getElementById('secPaso2').classList.remove('paso-bg-inactivo');
        document.getElementById('secPaso2').classList.add('paso-bg-activo');
        // ----------
        window.scrollTo(0,0);
        event.stopPropagation();

        /* graba la pantalla 1 */
       const val = insertarRegistroPaso1();
    }, false);
    // 
    // boton 2 << anterior 
    let boton2Anterior = document.querySelector('.boton-2-anterior');
    boton2Anterior.addEventListener("click",(event) => {
        document.querySelector('.paso-2').classList.add('sale-derecha');
        document.querySelector('.paso-2').style.display='none';
        document.querySelector('.paso-1').style.display='block';
        document.querySelector('.paso-1').classList.remove('sale-izquierda');
        // ---------- cambio de fondo al elemento circulo que muestra los pasos ----------
        document.getElementById('secPaso2').classList.remove('paso-bg-activo');
        document.getElementById('secPaso2').classList.add('paso-bg-inactivo');
        //
        document.getElementById('secPaso1').classList.remove('paso-bg-inactivo');
        document.getElementById('secPaso1').classList.add('paso-bg-activo');
        // ----------
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
        // ---------- cambio de fondo al elemento circulo que muestra los pasos ----------
        document.getElementById('secPaso2').classList.remove('paso-bg-activo');
        document.getElementById('secPaso2').classList.add('paso-bg-inactivo');
        //
        document.getElementById('secPaso3').classList.remove('paso-bg-inactivo');
        document.getElementById('secPaso3').classList.add('paso-bg-activo');
        // ----------
        window.scrollTo(0,0);
        event.stopPropagation();

        /* graba la pantalla 2 */
       const val = insertarRegistroPaso2();
    }, false);
    //
    // boton 3 << anterior
    document.querySelector('.boton-3-anterior').addEventListener("click",(event) => {
        document.querySelector('.paso-3').classList.add('sale-derecha');
        document.querySelector('.paso-3').style.display='none';
        document.querySelector('.paso-2').style.display='block';
        document.querySelector('.paso-2').classList.remove('sale-izquierda');
        // ---------- cambio de fondo al elemento circulo que muestra los pasos ----------
        document.getElementById('secPaso3').classList.remove('paso-bg-activo');
        document.getElementById('secPaso3').classList.add('paso-bg-inactivo');
        //
        document.getElementById('secPaso2').classList.remove('paso-bg-inactivo');
        document.getElementById('secPaso2').classList.add('paso-bg-activo');
        // ----------
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
         // ---------- cambio de fondo al elemento circulo que muestra los pasos ----------
         document.getElementById('secPaso3').classList.remove('paso-bg-activo');
         document.getElementById('secPaso3').classList.add('paso-bg-inactivo');
         //
         document.getElementById('secPaso4').classList.remove('paso-bg-inactivo');
         document.getElementById('secPaso4').classList.add('paso-bg-activo');
        window.scrollTo(0,0);
        event.stopPropagation();

        /* graba la pantalla 2 */
       const val = insertarRegistroPaso3();
    }, false);
    //
    // boton 4 << anterior 
    document.querySelector('.boton-4-anterior').addEventListener("click",(event) => {
        document.querySelector('.paso-4').classList.add('sale-derecha');
        document.querySelector('.paso-4').style.display='none';
        document.querySelector('.paso-3').style.display='block';
        document.querySelector('.paso-3').classList.remove('sale-izquierda');
         // ---------- cambio de fondo al elemento circulo que muestra los pasos ----------
         document.getElementById('secPaso4').classList.remove('paso-bg-activo');
         document.getElementById('secPaso4').classList.add('paso-bg-inactivo');
         //
         document.getElementById('secPaso3').classList.remove('paso-bg-inactivo');
         document.getElementById('secPaso3').classList.add('paso-bg-activo');
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
         // ---------- cambio de fondo al elemento circulo que muestra los pasos ----------
         document.getElementById('secPaso4').classList.remove('paso-bg-activo');
         document.getElementById('secPaso4').classList.add('paso-bg-inactivo');
         //
         document.getElementById('secPaso5').classList.remove('paso-bg-inactivo');
         document.getElementById('secPaso5').classList.add('paso-bg-activo');
         // -----------------------------------
        window.scrollTo(0,0);
        event.stopPropagation();
        const val = insertaRegistroPaso4();
    }, false);
    //
    // boton 5 << anterior 
    document.querySelector('.boton-5-anterior').addEventListener("click",(event) => {
        document.querySelector('.paso-5').classList.add('sale-derecha');
        document.querySelector('.paso-5').style.display='none';
        document.querySelector('.paso-4').style.display='block';
        document.querySelector('.paso-4').classList.remove('sale-izquierda');
         // ---------- cambio de fondo al elemento circulo que muestra los pasos ----------
         document.getElementById('secPaso5').classList.remove('paso-bg-activo');
         document.getElementById('secPaso5').classList.add('paso-bg-inactivo');
         //
         document.getElementById('secPaso4').classList.remove('paso-bg-inactivo');
         document.getElementById('secPaso4').classList.add('paso-bg-activo');
         // -----------------------------------
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
        // ---------- cambio de fondo al elemento circulo que muestra los pasos ----------
        document.getElementById('secPaso5').classList.remove('paso-bg-activo');
        document.getElementById('secPaso5').classList.add('paso-bg-inactivo');
        //
        document.getElementById('secPaso6').classList.remove('paso-bg-inactivo');
        document.getElementById('secPaso6').classList.add('paso-bg-activo');
        // -----------------------------------
        window.scrollTo(0,0);
        event.stopPropagation();
        const val = insertaRegistroPaso5();
    }, false);
    //
    // boton 6 << anterior 
    document.querySelector('.boton-6-anterior').addEventListener("click",(event) => {
        document.querySelector('.paso-6').classList.add('sale-derecha');
        document.querySelector('.paso-6').style.display='none';
        document.querySelector('.paso-5').style.display='block';
        document.querySelector('.paso-5').classList.remove('sale-izquierda');
        // ---------- cambio de fondo al elemento circulo que muestra los pasos ----------
        document.getElementById('secPaso6').classList.remove('paso-bg-activo');
        document.getElementById('secPaso6').classList.add('paso-bg-inactivo');
        //
        document.getElementById('secPaso5').classList.remove('paso-bg-inactivo');
        document.getElementById('secPaso5').classList.add('paso-bg-activo');
        // -----------------------------------
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
        // ---------- cambio de fondo al elemento circulo que muestra los pasos ----------
        document.getElementById('secPaso6').classList.remove('paso-bg-activo');
        document.getElementById('secPaso6').classList.add('paso-bg-inactivo');
        //
        document.getElementById('secPaso7').classList.remove('paso-bg-inactivo');
        document.getElementById('secPaso7').classList.add('paso-bg-activo');
        // -----------------------------------
        window.scrollTo(0,0);
        event.stopPropagation();
        const valor = insertaRegistroPaso6();
    }, false);
    //
    // boton 7 << anterior 
    document.querySelector('.boton-7-anterior').addEventListener("click",(event) => {
        document.querySelector('.paso-7').classList.add('sale-derecha');
        document.querySelector('.paso-7').style.display='none';
        document.querySelector('.paso-6').style.display='block';
        document.querySelector('.paso-6').classList.remove('sale-izquierda');
        // ---------- cambio de fondo al elemento circulo que muestra los pasos ----------
        document.getElementById('secPaso7').classList.remove('paso-bg-activo');
        document.getElementById('secPaso7').classList.add('paso-bg-inactivo');
        //
        document.getElementById('secPaso6').classList.remove('paso-bg-inactivo');
        document.getElementById('secPaso6').classList.add('paso-bg-activo');
        // -----------------------------------
        window.scrollTo(0,0);
        event.stopPropagation();
    }, false);
    // boton 7 siguiente >>
    document.querySelector('.boton-7-siguiente').addEventListener("click",(event) => {
        document.querySelector(".paso-7").classList.add('sale-izquierda');
        document.querySelector(".paso-7").style.display='none';
        document.querySelector(".paso-8").style.display='block';
        document.querySelector(".paso-8").classList.remove('sale-derecha');
         // ---------- cambio de fondo al elemento circulo que muestra los pasos ----------
        //  document.getElementById('secPaso3').classList.remove('paso-bg-activo');
        //  document.getElementById('secPaso3').classList.add('paso-bg-inactivo');
        //  //
        //  document.getElementById('secPaso4').classList.remove('paso-bg-inactivo');
        //  document.getElementById('secPaso4').classList.add('paso-bg-activo');
        window.scrollTo(0,0);
        event.stopPropagation();
    }, false);
    //
    // boton grabacion ok a la primer pantalla
    document.querySelector('.boton-8-siguiente').addEventListener("click",(event) => {
        document.querySelector('.paso-8').classList.add('sale-derecha');
        document.querySelector('.paso-8').style.display='none';
        document.querySelector('.paso-1').style.display='block';
        document.querySelector('.paso-1').classList.remove('sale-izquierda');
        // ---------- cambio de fondo al elemento circulo que muestra los pasos ----------
        document.getElementById('secPaso7').classList.remove('paso-bg-activo');
        document.getElementById('secPaso7').classList.add('paso-bg-inactivo');
        //
        document.getElementById('secPaso1').classList.remove('paso-bg-inactivo');
        document.getElementById('secPaso1').classList.add('paso-bg-activo');
        // ----------
        window.scrollTo(0,0);
        event.stopPropagation();
    }, false); 


    //
    /* ------------------------------------------------------------------------------------------ */
    /* ------------------------------------------------------------------------------------------ */
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
    // 04- ACTIVIDAD
    // radio-button rubro al que pertenece
    //
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
    /*** radio-button Relacion entre titular y domicilio de planta  */
    //
    var opciones = document.getElementsByName('opcRelTitDom');

    opciones.forEach(opcion => {
        opcion.addEventListener('click', () => {
            console.log(`Opción seleccionada: ${opcion.value}`);
        });
    });
    //
    // ** enlace agregar acividad ** //
    // 
    document.querySelector('.agregarActividad').addEventListener("click", () => {
        // incremento el contador de div
        let cantFilaActividad = document.getElementsByClassName("row-activity").length;
        cantFilaActividad++;

        // Crea el div de clase formNotch de la columna 1 para agregar al div de clase form-outline
        var divFormNotchCol1 = document.createElement('div');
        divFormNotchCol1.className = 'form-notch';

        var leadingCol1 = document.createElement('div');
        leadingCol1.className = 'form-notch-leading';
        leadingCol1.style.width = '9px';

        var middleCol1 = document.createElement('div');
        middleCol1.className = 'form-notch-middle';
        middleCol1.style.width = '68.8px';

        var trailingCol1 = document.createElement('div');
        trailingCol1.className = 'form-notch-trailing';

        divFormNotchCol1.appendChild(leadingCol1);
        divFormNotchCol1.appendChild(middleCol1);
        divFormNotchCol1.appendChild(trailingCol1);

        // Crea el div de clase formNotch de la columna 2 para agregar al div de clase form-outline
        var divFormNotchCol2 = document.createElement('div');
        divFormNotchCol2.className = 'form-notch';

        var leadingCol2 = document.createElement('div');
        leadingCol2.className = 'form-notch-leading';
        leadingCol2.style.width = '9px';

        var middleCol2 = document.createElement('div');
        middleCol2.className = 'form-notch-middle';
        middleCol2.style.width = '53.6px';

        var trailingCol2 = document.createElement('div');
        trailingCol2.className = 'form-notch-trailing';

        divFormNotchCol2.appendChild(leadingCol2);
        divFormNotchCol2.appendChild(middleCol2);
        divFormNotchCol2.appendChild(trailingCol2);

        // Crea el div de clase formNotch de la columna 3 para agregar al div de clase form-outline
        var divFormNotchCol3 = document.createElement('div');
        divFormNotchCol3.className = 'form-notch';

        var leadingCol3 = document.createElement('div');
        leadingCol3.className = 'form-notch-leading';
        leadingCol3.style.width = '9px';

        var middleCol3 = document.createElement('div');
        middleCol3.className = 'form-notch-middle';
        middleCol3.style.width = '96.8px';

        var trailingCol3 = document.createElement('div');
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
        
        var divCol4 = document.createElement('div');
        divCol4.classList.add('col-xs-12', 'col-md-2');

        // crea el anchor a
        var aElim = document.createElement('span');
        // aElim.href = '#';
        aElim.classList.add('btn-eliminar-' + cantFilaActividad);
        // aElim.title = 'Eliminar';
        aElim.divId = "wrap-actividad-" + cantFilaActividad;
        aElim.addEventListener('click', (e) => {
            console.log('div borrado: ', document.querySelector('.' + e.currentTarget.divId));
            document.querySelector('.' + e.currentTarget.divId).parentNode.removeChild(document.querySelector('.' + e.currentTarget.divId));
        }, false); 

        var iElim = document.createElement('i');
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

    /* ------------------------------------------------------------------- */
    /* 06 - MERCADO: lee las opciones seleccionadas en el checkbox         */
    /* ------------------------------------------------------------------- */
    // Seleccionamos los elementos checkbox
    const checkboxes = document.querySelectorAll(".chkMercado");

    // Función para manejar los cambios en el checkbox
    function handleCheckboxChange(event) {
        // Creamos un array para almacenar las opciones seleccionadas
        const opcionesSeleccionadas = [];

        // Recorremos los checkboxes para agregar las opciones seleccionadas al array
        checkboxes.forEach((checkbox) => {
            if (checkbox.checked) {
            opcionesSeleccionadas.push(checkbox.value);
            }
        });

        // Mostramos las opciones seleccionadas en formato JSON en la consola del navegador
        console.log(JSON.stringify(opcionesSeleccionadas));
        }

        // Asignamos la función handleCheckboxChange al evento onchange de cada checkbox
        checkboxes.forEach((checkbox) => {
        checkbox.addEventListener("change", handleCheckboxChange);
    });

    //
    // Funcion lee_actividad
    /* ------------------------------------------------------------------------------------------------------ */
    function lee_actividad(codigo) {
        // Crear una nueva instancia de XMLHttpRequest
        var xhr = new XMLHttpRequest();

        // Definir los datos que se enviarán en la petición (en este caso, un parámetro llamado 'texto')
        var data = new FormData();
        data.append('cod', codigo);
        
        // Abrir la petición
        xhr.open('GET', 'lee_actividad.php?codigo=' + codigo, false);

        // Definir la función que se ejecutará cuando la petición se complete
        xhr.onreadystatechange = function() {
            // Si la petición se ha completado
            if (this.readyState === 4) {
                // Si la petición ha sido exitosa
                if (this.status === 200) {
                    // Asignar la respuesta a la variable varActividad
                    var varActividad = this.responseText;
                    // Hacer algo con varActividad (por ejemplo, mostrarla en pantalla)
                    console.log(varActividad);
                    return varActividad;
                } else {
                    // Si ha habido algún error en la petición, mostrar un mensaje de error
                    console.error('Error en la petición: ' + this.statusText);
                    return 'Error en la petición: ' + this.statusText;
                }
            }
        };

        // Definir el método HTTP y la URL del script PHP
        // var method = 'GET';
        // var url = 'lee_actividad.php';

        // Establecer el tipo de contenido de la petición (en este caso, datos codificados en formato URL)
        // xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        // xhr.setRequestHeader('Content-type', 'multipart/form-data');

        // Enviar la petición
        xhr.send(data);

        // return false;

    }
    /* ------------------------------------------------------------------------------------------------------ */
    function callPHP(url, data) {

        // Crear una nueva promesa
        return new Promise((resolve, reject) => {
            // Crear un objeto XMLHttpRequest
            const xhr = new XMLHttpRequest();

            // Configurar la solicitud
            xhr.open('POST', url + '?codigo=' + data.codigo);

            // xhr.setRequestHeader('Content-Type', 'application/json;charset=UTF-8');
            xhr.setRequestHeader('Content-Type', 'text/html;charset=UTF-8');

            // Manejar la respuesta
            xhr.onload = () => {
                if (xhr.status === 200) {
                // Resolución exitosa de la promesa
                resolve(xhr.responseText);
                } else {
                // Rechazo de la promesa debido a un error
                reject(new Error('Error al llamar a ' + url));
                }
            };

            // Manejar cualquier error de red
            xhr.onerror = () => {
                reject(new Error('Error de red al llamar a ' + url));
            };

            // Enviar la solicitud con los datos proporcionados
            // xhr.send(JSON.stringify(data));
            xhr.send('codigo=' + data.codigo);
        });
    }
    /* ------------------------------------------------------------------------------------------------------ */
    /** captura del evento change de los campos input del ciiu */
    // Función que se ejecuta cuando se cambia el valor de un input
    function ciiuHandleInputChange(event) {
        var input = event.target;
        var inputValue = input.value.trim();
        var campoActividad = input.getAttribute('campo_actividad');
    
        // Verificar que el valor ingresado no tenga espacios en blanco
        if (/\s/.test(inputValue)) {
            alert(`El campo ${input.id} no debe contener espacios en blanco.`);
            return;
        }
    
        // Verificar que el valor ingresado sea un número
        if (!/^\d+$/.test(inputValue)) {
            console.warn(`El campo ${input.id} solo debe contener números.`);
            return;
        }
    
        // Verificar que la longitud del valor ingresado sea mayor a 5
        if (inputValue.length > 5) {
            /*
            console.log(`Valor ingresado en ${input.id}: ${inputValue}`);
            console.log(`Valor de campoActividad: ${campoActividad}`);
            var txtActividad = lee_actividad('016111');
            console.log(`Respuesta de actividad: ${txtActividad}`);
            document.getElementById('actividad-1').value =  txtActividad;
            */

            /* *** */
            // Llamada a la función que devuelve una promesa
            callPHP('lee_actividad.php', { codigo: inputValue })
            .then((data) => {
                // Manejar el resultado de la promesa aquí
                console.log(data);
                document.getElementById(campoActividad).value =  data;
            })
            .catch((error) => {
                // Manejar cualquier error aquí
                console.error(error);
            });
            /* *** */
        }
    }
    
    // Obtener los inputs por su ID
    // const input1 = document.getElementById('ciiu-1');
    // const input2 = document.getElementById('ciiu-2');
    // const input3 = document.getElementById('ciiu-3');
    
    // Asignar la función ciiuHandleInputChange al evento 'change' de cada input
    document.getElementById('ciiu-1').addEventListener('input', ciiuHandleInputChange);
    document.getElementById('ciiu-2').addEventListener('input', ciiuHandleInputChange);
    document.getElementById('ciiu-3').addEventListener('input', ciiuHandleInputChange);
    document.getElementById('ciiu-4').addEventListener('input', ciiuHandleInputChange);

    /* funcion que lee el valor seleccionaro en el radio button ordenamiento juridico */
    const valorOrdenamientoJuridico = () => {
        // Obtenemos la referencia al conjunto de radio buttons
        const radioButtons = document.getElementsByName("organizacionJuridica");
      
        // Definimos la variable que almacenará el valor seleccionado
        let valorSeleccionado = null;
      
        // Recorremos los radio buttons para encontrar el valor seleccionado
        radioButtons.forEach((radioButton) => {
          if (radioButton.checked) {
            valorSeleccionado = radioButton.value;
          }
        });

        return valorSeleccionado;
      };

      /* funcion que lee el valor seleccionado en el radio button 'variedad total de productos' */
    const valorVariedadProductos = () => {
        var radios = document.getElementsByName('check-variedadProducto');
        var valorSeleccionado = '';
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                valorSeleccionado = radios[i].value;
                break;
            }
        }
        return valorSeleccionado;
    }

    /* devuelve el valor de la etiqueta seleccionada para el control variedad de productos */
    const valorEtiquetaVariedadProducto = () => {
        const radios = document.getElementsByName('check-variedadProducto');
        let valorEtiquetaSeleccionada = '';

        radios.forEach((radio) => {
        if (radio.checked) {
            const etiquetaSeleccionada = radio.parentNode.querySelector('label').textContent.trim();
            valorEtiquetaSeleccionada = etiquetaSeleccionada;
        }
        });

        return valorEtiquetaSeleccionada;
    } 

    /* funcion que lee el valor seleccionado en el radio button ordenamiento juridico */
    const valorRelacionTitularEmpresa  = () => {
        // Obtenemos la referencia al conjunto de radio buttons
        const radioButtons = document.getElementsByName("opcRelTitDom");

        // Definimos la variable que almacenará el valor seleccionado
        let valorSeleccionado = null;
      
        // Recorremos los radio buttons para encontrar el valor seleccionado
        radioButtons.forEach((radioButton) => {
          if (radioButton.checked) {
            valorSeleccionado = radioButton.value;
          }
        });
      
        return valorSeleccionado;
    }
    
    const valorMercadoObjetivo = () => {
        var checkboxes = document.getElementsByClassName('chkMercado');
        var valoresSeleccionados = [];
      
        for (var i = 0; i < checkboxes.length; i++) {
          if (checkboxes[i].checked) {
            valoresSeleccionados.push(checkboxes[i].value);
          }
        }
      
        return valoresSeleccionados.join('|');
      }

      const valorEstadoProyecto = (elem) => {
        // Obtenemos la referencia al conjunto de radio buttons
        const radioButtons = document.getElementsByName(elem);

        // Definimos la variable que almacenará el valor seleccionado
        let valorSeleccionado = null;

        // Recorremos los radio buttons para encontrar el valor seleccionado
        radioButtons.forEach((radioButton) => {
        if (radioButton.checked) {
            valorSeleccionado = radioButton.value;
        }
        });

        return valorSeleccionado;
      }
      
});

