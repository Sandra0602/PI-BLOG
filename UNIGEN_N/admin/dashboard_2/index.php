<?php
include_once './bd/conexion.php';
session_start();


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
    <h1 class="fs-1">PANEL DE CONTROL DE ADMINISTRACION</h1>

    <!--INICIO del cont principal-->
    <div class="container">
        <h1>Bienvenido al Panel de Administracion</h1>
        <!-- Botón Nuevo -->
            <div class="container">
             <div class="row">
                  <div class="col-lg-12">
                  <a href="buttons.php" class="btn btn-success">Hacer Nueva Publicacion</a>
                  <a href="cards.php" class="btn btn-success">Poder editar los posts</a>
                  <a href="views_posts.php" class="btn btn-success">Ver las publicaciones</a>
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
        


        
</div>

<?php require_once "./views/parte_inferior.php"?>

