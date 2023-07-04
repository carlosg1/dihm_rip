$(document).ready(function() {
    $('#tabla_1_5_1').DataTable({
      "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
      },
      "ajax": {
        "url": "tabla_1_5_1.php",
        "dataSrc": "data"
      },
      "columns": [
        { "data": "localidad" },
        { "data": "cantidad" },
      ],
      "lengthChange": false,
      "searching": false,
    });
  });
  

