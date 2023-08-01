$(document).ready(function(){
    //window.scrollTo(0,0);
    // seteo de fechas
    $('#fecha').datepicker({  format: 'dd/mm/yyyy' });
    $('#fechaDisposicion').datepicker({  format: 'dd/mm/yyyy' });
    $('#fecharegNacMinero').datepicker({  format: 'dd/mm/yyyy' });
    $('#fecharegOperHidroYGas').datepicker({  format: 'dd/mm/yyyy' });
    $('#fechaHabMunicipal').datepicker({  format: 'dd/mm/yyyy' });
    //

    //
    // verifica que ingreso la cuit
    //
    const verificaCUIT = () => {
        var cuit = document.getElementById('cuit').value;

        if (cuit === '' || cuit.length !== 11) {
            if (cuit === '') {
                alert('Falta ingresar el CUIT');
            } else {
                alert('El CUIT ingresado no es válido');
            }
            return false;
        }

        return true;
    }

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
        parametroGet += '&ciiu_1=' + document.getElementById('ciiu_1').value;
        parametroGet += '&facturacion_anual_1=' + document.getElementById('facturacion-1').value;
        parametroGet += '&ciiu_2=' + document.getElementById('ciiu-2').value;
        parametroGet += '&facturacion_anual_2=' + document.getElementById('facturacion-2').value;
        parametroGet += '&ciiu_3=' + document.getElementById('ciiu-3').value;
        parametroGet += '&facturacion_anual_3=' + document.getElementById('facturacion-3').value;
        parametroGet += '&ciiu_4=' + document.getElementById('ciiu-4').value;
        parametroGet += '&facturacion_anual_4=' + document.getElementById('facturacion-4').value;
        /* ----------------------- domicilio planta industrial ------------------ */
        parametroGet += '&domicilio=' + document.getElementById('dpi-txtDomicilio').value;
        parametroGet += '&localidad=' + document.getElementById('dpi-localidad').value;
        parametroGet += '&provincia=' + document.getElementById('dpi-provincia').value;
        parametroGet += '&cod_postal=' + document.getElementById('dpi-codPostal').value;
        parametroGet += '&departamento=' + document.getElementById('dpi-departamento').value;

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
            console.log('-- Pantalla 3 grabada');
        })
        .catch((error) => {
            // Manejar cualquier error aquí
            console.log('-- Pantalla 3 Error');
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
        var parametroGet = '', cadenaGet = '';
        
        for (var idx = 1; idx <= 13; idx++) {
            proyMejora = valorEstadoProyecto('proyMejora'+idx);
            porcAvance = document.querySelector('#porcAvance_'+idx).value;
            plazoImplementa = document.querySelector('#plazoImplementa_'+idx).value;
            fuenteFinanciamiento = document.querySelector('#fuenteFinanciamiento_'+idx).value;
            montoInversion = document.querySelector('#montoInversion_'+idx).value;
            asistenciaTecnica = document.querySelector('#asistenciaTecnica_'+idx).value;
            necesidadRelevante = document.querySelector('#necesidadRelevante_'+idx).value;
          
            cadenaGet += `|idtp${idx}=${idx}|proyMejora${idx}=${proyMejora}|porcAvance${idx}=${porcAvance}|plazoImplementa${idx}=${plazoImplementa}|fuenteFinanciamiento${idx}=${fuenteFinanciamiento}|montoInversion${idx}=${montoInversion}|asistenciaTecnica${idx}=${asistenciaTecnica}|necesidadRelevante${idx}=${necesidadRelevante}`;
          }

          parametroGet = cadenaGet;

        //   console.log('Cadena GET pantalla 7 - ', cadenaGet);

        if(document.getElementById('cuit').value !== '') {
            // Llamada a la función que devuelve una promesa
            callPHP_1('inserta_registro_paso_7.php', { cadenaGet: '?cuit=' + document.getElementById('cuit').value + parametroGet })
            .then((data) => {
                // Manejar el resultado de la promesa aquí
                console.log(data);
                console.log('-- Pantalla 7 grabada');
                console.log('-- ---');
            })
            .catch((error) => {
                // Manejar cualquier error aquí
                console.log('-- Pantalla 7 Error');
                console.log('-- ---');
                console.error(error);
            });
        }
    }

    // EventListener


    // organizacion juridica campo select
    var sOrganizacionJuridica = document.getElementById('organizacionJuridica');    // campo select
    var tOrganizacionJuridica = document.getElementById('organizacionJuridica_1');  // campo input de organizacion juridica
    //
    sOrganizacionJuridica.addEventListener("change", (event) => {
        switch (document.getElementById('organizacionJuridica').value){
            case '10':
                tOrganizacionJuridica.disabled = false;
                tOrganizacionJuridica.focus();
                break;
            default:
                tOrganizacionJuridica.disabled = true;
        }
    }, false);
    
    // Desde aqui se maneja la nueva pantalla de carga de datos de empresas //
    // acordeon: periodo de registro
    document.getElementById('btn_periodo_registro').addEventListener('click', (e) => {
        e.preventDefault();
        if(!verificaCUIT()) {
            document.getElementById('cuit').focus();
            window.scrollTo(0,0);
        } else {
            var params = '?cuit=' + document.getElementById('cuit').value;
            params += '&estador=' + document.getElementById('estado_registro').value;
            params += '&mesr=' + document.getElementById('mes_registro').value;
            params += '&anor=' + document.getElementById('ano_reistro').value;
            params += '&loc=' + document.getElementById('localidad').value;
            callPHP_1('graba_periodo_registro.php', { cadenaGet: params })
            .then(data => {
                console.log('--- graba periodo de registro ---');
                console.log(data);
                console.log('---');
                alert(data);
            })
            .catch(error => {
                // maneja cualquier error
                console.error('---- Graba periodo de registro ----');
                console.error(error);
            });

        }
        e.stopPropagation();
    }, false);

    // boton guardar datos de la empresa
    document.getElementById('btn_datos_empresa').addEventListener('click', (e) => {
        e.preventDefault();
        if(!verificaCUIT()) {
            document.getElementById('cuit').focus();
            window.scrollTo(0,0);
        } else {
            var params = '?cuit='         + document.getElementById('cuit').value;
            params    += '&razon_social='     + document.getElementById('razonSocial').value;
            params    += '&fecha_actividad='           + document.getElementById('fecha').value;
            params    += '&relacion_titular_planta=' + document.getElementById('relTitularDomic').value; // relacion entre el titular y el domicilio de la empresa
            
            callPHP_1('graba_dato_empresa.php', { cadenaGet: params })
            .then(data => {
                console.log('--- graba datos de la empresa ---');
                console.log(data);
                console.log('---');
                alert(data);
            })
            .catch(error => {
                // maneja cualquier error
                console.error('---- Graba datos de la empresa ----');
                console.error(error);
            });
        }
    }, false);

    // boton 2 << anterior 
    let boton2Anterior = document.querySelector('.boton-2-anterior');
    boton2Anterior.addEventListener("click", (event) => {
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
        window.scrollTo(0,0);
        event.stopPropagation();
        const val = insertaRegistroPaso7();
    }, false);
    
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
    // Asignar la función ciiuHandleInputChange al evento 'change' de cada input
    document.getElementById('ciiu_1').addEventListener('input', ciiuHandleInputChange);
    document.getElementById('ciiu_2').addEventListener('input', ciiuHandleInputChange);
    document.getElementById('ciiu_3').addEventListener('input', ciiuHandleInputChange);
    document.getElementById('ciiu_4').addEventListener('input', ciiuHandleInputChange);

    /* funcion que lee el valor seleccionado en el radio button ordenamiento juridico */
    /*
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

      */
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
        var radios = document.getElementsByName("check-variedadProducto");
        var valorEtiquetaSeleccionada = '';

        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                valorEtiquetaSeleccionada = radios[i].nextSibling.textContent.trim();
                console.log("Valor del label seleccionado: " + valorEtiquetaSeleccionada);
                break;
            }
        }

        return valorEtiquetaSeleccionada;
    } 

    /* funcion que lee el valor seleccionado en el radio button ordenamiento juridico */
    const valorRelacionTitularEmpresa  = () => {
        // Obtenemos la referencia al conjunto de radio buttons
        const radioButtons = document.getElementsByName("opcRelTitDom");

        // Definimos la variable que almacenará el valor seleccionado
        let valorSeleccionado = "0";
      
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
        // Obtener todos los botones de opción con el mismo nombre
        var botonesProyMejora = document.querySelectorAll('input[name="' + elem + '"]');

        // Recorrer los botones de opción y encontrar el seleccionado
        let valorSeleccionado = "";
        for (let i = 0; i < botonesProyMejora.length; i++) {
        if (botonesProyMejora[i].checked) {
            valorSeleccionado = botonesProyMejora[i].value;
            break; // Detener el bucle una vez encontrado el seleccionado
        }
        }

        // Utilizar el valor seleccionado como desees
        // console.log(valorSeleccionado);


        return valorSeleccionado;
    }

    // 

    // ---
    // boton de busqueda de codigo de ciiu por texto
    // ---
    var dataTable = $('#ciiuResultsTable').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        }, 
        "columns": [
            { "data": "syspubl01_codigo" },
            { "data": "syspubl01_desc_corta" },
            { "data": "syspubl01_desc_larga" },
        ]
    });

    $('#CiiuSearchText').on('input', function() {
        var searchText = $(this).val();
        if(searchText.length > 2) {
            searchInDatabase(searchText);
        }
    });

    function searchInDatabase(searchText) {
        $.ajax({
          url: 'busca_ciiu_x_texto.php',
          method: 'POST',
          data: { searchText: searchText },
          dataType: 'json',
          success: function(data) {
            dataTable.clear();
            dataTable.rows.add(data).draw();
          },
          error: function() {
            console.log('Error al buscar en la base de datos.');
          }
        });
    }

    $('#ciiuModal').on('shown.bs.modal', function() {
        $('#searchText').focus();
    });
    
    $('#ciiuModal').on('hidden.bs.modal', function() {
        $('#searchText').val('');
        dataTable.clear().draw();
    });
    
    $('#ciiuResultsTable').on('click', 'tr', function() {
        var codigo = dataTable.row(this).data().syspubl01_codigo;
        console.log(codigo);
    });

    // $('#ciiuResultsTable').on('click', 'tr', function() {
    //     var rowData = dataTable.row(this).data();
    //     var codigo = rowData.syspubl01_codigo;
    //     console.log(codigo);
    // });
    
    var miciiuModal = document.getElementById('ciiuModal');
    miciiuModal.addEventListener('hidden.bs.modal', function() {
        document.getElementById('CiiuSearchText').value = '';
        dataTable.clear().draw();
    }); 

});

