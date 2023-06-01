$(document).ready(function() {
  $('#tablaDatos').DataTable({
    "language": {
      "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
    },
    "ajax": {
      "url": "datos_empresa.php",
      "dataSrc": ""
    },
    "columns": [
      { "data": "cuit" },
      { "data": "razon_social" },
      { "data": "Inicio_actividad" },
      { "data": "ciiu" },
      { "data": "actividad" },
      { "data": "actividad_l" },
      { "data": "facturacion_anual" },
      { "data": "organ_juridica" },
      { "data": "domic_planta" },
      { "data": "rel_titular_planta" },
      { "data": "NOMBRE_TITULAR" },
      { "data": "cuit_titular" },
      { "data": "Telefono_Titular" }
    ]
  });
});
