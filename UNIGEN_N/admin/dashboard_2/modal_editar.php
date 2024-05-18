<!--Modal para CRUD-->
<?php
/*
$id = $_POST['id'];

$sql = "SELECT * FROM publicaciones WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
print_r($result);
*/
?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar Publicación</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="formPublicacion"> <!-- Cambiar id del formulario -->
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="id" class="form-label">Id:</label>
                                <input type="text" class="form-control" id="id" value="<?php $id_pub?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="contenido" class="form-label">Contenido:</label>
                                <input type="text" class="form-control" id="contenido" value="<?php $cont_pub?>">
                            </div>
                            <div class="mb-3">
                                <label for="titulo" class="form-label">Titulo:</label>
                                <input type="text" class="form-control" id="titulo" value="<?php $titu_pub?>">
                            </div>
                            <div class="mb-3">
                                <label for="fecha" class="form-label">Fecha:</label>
                                <input type="text" class="form-control" id="fecha" value="<?php $fech_pub?>">
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" value="<?php $nom_pub?>">
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