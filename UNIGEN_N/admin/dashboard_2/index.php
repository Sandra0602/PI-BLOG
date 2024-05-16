<?php
include_once './bd/conexion.php';

$consulta = "SELECT id, contenido, fecha, titulo, Nombre FROM publicaciones";
$resultado = $pdo->prepare($consulta);
$resultado->execute();

// Obtener los resultados
$data = $resultado->fetchAll(PDO::FETCH_ASSOC);

// Cerrar la conexión
//$pdo = null;
?>

<?php require_once "./views/parte_superior.php" ?>

<!--Inicio del contenido principal-->

<div class="container border">
    <h1 class="fs-1">ADMINISTRACION</h1>

    <!--INICIO del cont principal-->
    <div class="container">
        <h1>Contenido principal</h1>
        <!-- Botón Nuevo -->
            <div class="container">
             <div class="row">
                  <div class="col-lg-12">
                  <a href="buttons.php" class="btn btn-success">Nueva Publicacion</a>
             </div>
              </div>
    </div>

        
        <!-- Tabla -
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
                                            <button class="btn btn-primary btnEditar">Editar</button>
                                            <button class="btn btn-danger btnBorrar">Borrar</button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>  -->
        


        <!--Modal para CRUD-->
        <div class="modal fade" id="modalCRUD" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nueva Publicación</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="formPublicacion"> <!-- Cambiar id del formulario -->
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="id" class="form-label">Id:</label>
                                <input type="text" class="form-control" id="id" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="contenido" class="form-label">Contenido:</label>
                                <input type="text" class="form-control" id="contenido">
                            </div>
                            <div class="mb-3">
                                <label for="titulo" class="form-label">Titulo:</label>
                                <input type="text" class="form-control" id="titulo">
                            </div>
                            <div class="mb-3">
                                <label for="fecha" class="form-label">Fecha:</label>
                                <input type="text" class="form-control" id="fecha">
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre:</label>
                                <input type="text" class="form-control" id="nombre">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--FIN del cont principal-->
</div>

<?php require_once "./views/parte_inferior.php"?>

