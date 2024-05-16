<?php require_once "./views/parte_superior.php"?>
<?php
try {
    // Incluir el archivo de conexión a la base de datos
    include_once './bd/conexion.php';

    // Consulta SQL
    $sql = "SELECT t1.id, t1.fecha, t1.contenido, t1.titulo, t2.imagen FROM publicaciones t1 JOIN imagenes t2 ON t2.id_publicaciones = t1.id ORDER BY fecha DESC";
    // Preparar la consulta
    $stmt = $pdo->query($sql);
    
    // Obtener los resultados
    while ($r = $stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <div class="container border">
            <h1 class="fs-1">VIEWS</h1>
            <div class="post-container">
                <div class="post-row">
                    <div class="user-profile">
                       <!-- <img src="img_fem/C399B262-8438-41D5-B0CE-12D7189FD062_1_201_a.jpeg">  -->
                        <div>
                            <p>Unigen</p>
                            <span><?php echo date("d/m/Y H:i", strtotime($r["fecha"])) ?></span>
                        </div>
                    </div>
                </div>
                <h1><?php echo $r["titulo"] ?> </h1>
                <p class="post-text"><?php echo $r["contenido"] ?> </p>
                <?php
                echo '<img class="post-img" src="data:image/jpeg;base64,' . base64_encode($r["imagen"]) . '"/>';
                ?>
                <form method="post" action="" class="form" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" name="id" value="<?php echo $r["id"] ?>">
                    <input type="submit" value="Borrar" name="borrar">
                </form>
            </div>
        </div>
        <?php
    }
} catch (PDOException $e) {
    // Manejar los errores de la conexión o la consulta
    echo "Error: " . $e->getMessage();
}
?>
<?php require_once "./views/parte_inferior.php"?>
