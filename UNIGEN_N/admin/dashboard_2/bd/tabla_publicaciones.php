<?php
require_once 'conexion.php';
require_once 'modal_editar.php';

// Consulta SQL
$consulta = "SELECT id, contenido, fecha, titulo, Nombre FROM publicaciones";
// Preparar la consulta
$stmt = $pdo->prepare($consulta);
// Ejecutar la consulta
$stmt->execute();

// Obtener los resultados
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Tabla -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table id="tablaPersonas" class="table table-striped table-bordered table-hover">
                    <thead class="text-center">
                        <tr>
                            <th>Contenido</th>
                            <th>Titulo</th>
                            <th>Fecha</th>
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $dat) { ?>
                            <tr data-id="<?php echo $dat['id']; ?>">
                                <td><?php echo $dat['contenido'] ?></td>
                                <td><?php echo $dat['titulo'] ?></td>
                                <td><?php echo $dat['fecha'] ?></td>
                                <td><?php echo $dat['Nombre'] ?></td>
                                <td>
                                    <button class="btn btn-primary btnEditar" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        data-id="<?php echo $dat['id'] ?>"
                                        data-contenido="<?php echo htmlspecialchars($dat['contenido']); ?>"
                                        data-titulo="<?php echo htmlspecialchars($dat['titulo']); ?>"
                                        data-nombre="<?php echo htmlspecialchars($dat['Nombre']); ?>">Editar</button>
                                    <button class="btn btn-danger btnBorrar" data-id="<?php echo $dat['id'] ?>">Borrar</button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php require_once "./views/parte_inferior.php" ?>

<script>
    $(document).ready(function () {
        // Manejar el clic en el botón de borrar
        $('.btnBorrar').on('click', function () {
            // Obtener el ID de la publicación a borrar
            var id = $(this).data('id');

            // Confirmar si el usuario desea borrar la publicación
            if (confirm('¿Estás seguro de que deseas borrar esta publicación?')) {
                // Realizar la solicitud AJAX para borrar la publicación
                $.ajax({
                    url: 'borrar_publicacion.php', // Ruta al archivo PHP que procesará la solicitud de borrado
                    method: 'POST',
                    contentType: 'application/json',
                    data: JSON.stringify({ id: id }), // Enviar el ID de la publicación a borrar como JSON
                    success: function (response) {
                        var res = JSON.parse(response);
                        alert(res.message);
                        if (res.success) {
                            // Remover la fila de la tabla
                            $('tr[data-id="' + id + '"]').remove();
                        } else {
                            console.error('Error:', res.message);
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error('Error en la solicitud AJAX:', error);
                    }
                });
            }
        });
    });



        // Manejar el clic en el botón de editar
        $('.btnEditar').on('click', function () {
            var id = $(this).data('id');
            var contenido = $(this).data('contenido');
            var titulo = $(this).data('titulo');
            var nombre = $(this).data('nombre');

            $('#exampleModal #id').val(id);
            $('#exampleModal #contenido').val(contenido);
            $('#exampleModal #titulo').val(titulo);
            $('#exampleModal #nombre').val(nombre);
        });

</script>


        