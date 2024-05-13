<?php
// Verificar si la variable $data está definida y es un array
if (isset($data) && is_array($data)) {
    ?>
    <div class="table-responsive">
        <table id="tablaPublicaciones" class="table table-striped table-bordered table-hover">
            <thead class="text-center">
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Contenido</th>
                    <th>Fecha</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $dat) { ?>
                    <tr>
                        <td><?php echo $publicacion['id'] ?></td>
                        <td><?php echo $publicacion['titulo'] ?></td>
                        <td><?php echo $publicacion['contenido'] ?></td>
                        <td><?php echo $publicacion['fecha'] ?></td>
                        <td><?php echo $publicacion['Nombre'] ?></td>
                        <td>
                            <button onclick="editarPublicacion(<?php echo $publicacion['id'] ?>)" class="btn btn-primary">Editar</button>
                            <button onclick="eliminarPublicacion(<?php echo $publicacion['id'] ?>)" class="btn btn-danger">Borrar</button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
<?php
} else {
    echo "No se encontraron datos de publicaciones.";
}
?>
