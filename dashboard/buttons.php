<?php require_once "./views/parte_superior.php" ?>

<!-- Inicio del contenido principal -->
<div class="container border">
    <h1 class="fs-1">Nueva Publicación</h1>
    
    <!-- Formulario para nueva publicación -->
    <form action="procesar_publi.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="titulo" class="form-label">Título:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        <div class="mb-3">
            <label for="contenido" class="form-label">Contenido:</label>
            <textarea class="form-control" id="contenido" name="contenido" rows="5" required></textarea>
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen:</label>
            <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
<!-- Fin del contenido principal -->

<?php require_once "./views/parte_inferior.php" ?>
