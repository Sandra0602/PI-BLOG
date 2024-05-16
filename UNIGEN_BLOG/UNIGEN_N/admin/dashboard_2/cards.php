<?php require_once "./views/parte_superior.php"?>
<div class="container border">
    <h1 class="fs-1">EDIT</h1>
    <!-- Aquí incluyes la tabla de publicaciones -->
    <?php require_once "./bd/tabla_publicaciones.php"; ?>
    

    <!-- Script para manejar interacciones de usuario 
    <script>
        // Función para editar una publicación
        function editarPublicacion(id) {
            // Aquí puedes implementar la lógica para abrir un formulario de edición con los datos de la publicación
            // Por ejemplo, podrías redirigir a una página de edición con el ID de la publicación en la URL
            window.location.href = "editar_publicacion.php?id=" + id;
        }

        // Función para eliminar una publicación
        function eliminarPublicacion(id) {
            if (confirm("¿Estás seguro de que quieres eliminar esta publicación?")) {
                // Realizar una petición AJAX para eliminar la publicación
                $.ajax({
                    url: 'bd/datos.php',
                    type: 'POST',
                    dataType: 'json',
                    data: { opcion: 3, id: id },
                    success: function(response) {
                        // Aquí puedes manejar la respuesta del servidor, por ejemplo, actualizar la tabla de publicaciones
                        console.log(response);
                    }
                });
            }
        }
    </script>  -->
</div>
<?php require_once "./views/parte_inferior.php"?>
