<?php
// Importar la conexión PDO desde el archivo de configuración
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
                            <th>Id</th>
                            <th>Contenido</th>
                            <th>Titulo</th>
                            <th>Fecha</th>
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $dat) { ?>
                            <tr>
                                <td><?php echo $dat['id'] ?></td>
                                <td><?php echo $dat['contenido'] ?></td>
                                <td><?php echo $dat['titulo'] ?></td>
                                <td><?php echo $dat['fecha'] ?></td>
                                <td><?php echo $dat['Nombre'] ?></td>
                                <td>
                                    <button class="btn btn-primary btnEditar" data-bs-toggle="modal" data-bs-target="#exampleModal">Editar</button>
                                    <button class="btn btn-danger btnBorrar">Borrar</button>

                                    
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php require_once "./views/parte_inferior.php"?>
<!-- Script para actualizar el contenido del modal -->
<script>
$(document).ready(function(){
    $('.btnEditar').click(function(){
        // Obtener los datos de la fila
        var fila = $(this).closest('tr');
        var contenido = fila.find('td:eq(1)').text();
        var titulo = fila.find('td:eq(2)').text();
        var fecha = fila.find('td:eq(3)').text();
        var nombre = fila.find('td:eq(4)').text();
        
        // Actualizar el contenido del modal
        $('#exampleModal .modal-body').html(
            '<p><strong>Contenido:</strong> ' + contenido + '</p>' +
            '<p><strong>Título:</strong> ' + titulo + '</p>' +
            '<p><strong>Fecha:</strong> ' + fecha + '</p>' +
            '<p><strong>Nombre:</strong> ' + nombre + '</p>'
        );
    });
});
</script>



        