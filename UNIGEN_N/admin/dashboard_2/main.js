$(document).ready(function(){
    var tablaPersonas = $("#tablaPersonas").DataTable({
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
            },
            "sProcessing":"Procesando...",
    }
    
    });
    var id; // Variable global para almacenar el ID
    
    $("#btnNuevo").click(function(){
        $("#formPublicacion").trigger("reset");
        $(".modal-title").text("Nueva Publicación");
        $("#modalCRUD").modal("show");
        id=null;
        opcion = 1; //alta
    });
    
    var fila;
    
    
    $(document).ready(function(){
        // Manejar el evento de clic en el botón "Editar"
        $('.btnEditar').click(function(){
            // Obtener la fila actual
            var fila = $(this).closest('tr');

            // Obtener los datos de la fila
            var id = fila.find('td:eq(0)').text();
            var contenido = fila.find('td:eq(1)').text();
            var titulo = fila.find('td:eq(2)').text();
            var fecha = fila.find('td:eq(3)').text();
            var nombre = fila.find('td:eq(4)').text();

            // Actualizar el contenido del modal con los datos obtenidos
            $('#exampleModal').find('.modal-body').html(
                '<p><strong>ID:</strong> ' + id + '</p>' +
                '<p><strong>Contenido:</strong> ' + contenido + '</p>' +
                '<p><strong>Título:</strong> ' + titulo + '</p>' +
                '<p><strong>Fecha:</strong> ' + fecha + '</p>' +
                '<p><strong>Nombre:</strong> ' + nombre + '</p>'
            );
        });
    });


    /* Botón BORRAR
    $(document).on("click", ".btnBorrar", function(){    
        fila = $(this).closest("tr");
        var id = parseInt(fila.find('td:eq(0)').text());
        var opcion = 3; // borrar
        var respuesta = confirm("¿Está seguro de eliminar el registro: " + id + "?");
        if(respuesta){
            $.ajax({
                url: "datos.php", // Cambiar la URL según la ubicación de tu archivo datos.php
                type: "POST",
                dataType: "json",
                data: {opcion:opcion, id:id},
                success: function(data){
                    tablaPersonas.row(fila).remove().draw(); // Remover la fila de la tabla
                    // Manejar la respuesta del servidor si es necesario
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }   
    });
    
    
   // Submit del formulario para guardar/editar
$("#formPublicacion").submit(function(e){
    e.preventDefault();
    
    contenido = $.trim($("#contenido").val());
    titulo = $.trim($("#titulo").val());
    fecha = $.trim($("#fecha").val());
    nombre = $.trim($("#nombre").val());
    
    $.ajax({
        url: "datos.php",
        type: "POST",
        dataType: "json",
        data: {id:id, contenido:contenido, titulo:titulo, fecha:fecha, nombre:nombre, opcion:opcion},
        success: function(data){
            console.log(data);
            // Vuelve a cargar los datos de la base de datos y dibuja la tabla nuevamente
            tablaPersonas.clear().draw(); // Limpiar la tabla
            $.ajax({
                url: "datos.php", // Cambiar la URL según la ubicación de tu archivo datos.php
                type: "GET", // Cambiar a GET si tu archivo datos.php espera solicitudes GET
                dataType: "json",
                success: function(data){
                    $.each(data, function(i, item) {
                        tablaPersonas.row.add([item.id, item.contenido, item.titulo, item.fecha, item.nombre]).draw();
                    });
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
    $("#modalCRUD").modal("hide");
});  */
});
