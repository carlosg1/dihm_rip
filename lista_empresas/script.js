$(document).ready(function() {
    $('#tabla-registros').DataTable({
        "ajax": "data.php",
        "language": {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            },
            "buttons": {
                "copy": "Copiar",
                "colvis": "Visibilidad"
            }
        },
        "columns": [
            { "data": "id_sysdihm01" },
            { "data": "sysdihm01_cuit" },
            { "data": "sysdihm01_razon_social" },
            { "data": "sysdihm01_inicio_actividad" },
            { "data": "ordenamiento_juridico" },
            {
                "data": null,
                "render": function(data, type, row) {
                    return '<a title="Ver datos" href="ver_datos.php?cuit=' + row.sysdihm01_cuit + '"><i class="fas fa-eye mx-2"></i></a> ' + 
                           '<a title="Editar datos de una Empresa" href="editar_empresa/?cuit=' + row.sysdihm01_cuit + '"><i class="fas fa-edit mx-2"></i></a> ' +
                           '<a title="Eliminar empresa" href="eliminar.php?cuit=' + row.sysdihm01_cuit + '"><i class="fas fa-trash mx-2"></i></a>';
                }
            }
        ]
    });
    
    // Manejador de evento para editar una fila al hacer clic en el enlace de editar
    $('#tabla-registros').on('click', 'a[data-action="editar"]', function(e) {
        e.preventDefault();
        var rowData = tablaRegistros.row($(this).closest('tr')).data();
        var idRegistro = rowData.id_sysdihm01;

        // Redirige a la página de edición con el ID del registro
        window.location.href = 'editar.php?id=' + idRegistro;
    });
});



