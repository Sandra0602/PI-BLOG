<?php 
session_start();
date_default_timezone_set('America/Mexico_City');
require_once "./views/parte_superior.php";

include_once './bd/conexion.php';

// Consulta CON ID para retornar datos del usuario
$sql = "SELECT * FROM usuarios WHERE id = " . $_SESSION["user_id"];
$stmt = $pdo->prepare($sql);
$stmt->execute();
$user = $stmt->fetchAll();
$nom_usuario = $user[0]["usuario"];

// Publicación
if(isset($_POST['publicar'])){
    // Procesar la imagen
    $imagen = '';
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
        $nombre_imagen = $_FILES['imagen']['name'];
        $temporal = $_FILES['imagen']['tmp_name'];
        $carpeta = './img_fem';
        $ruta = $carpeta . '/' . $nombre_imagen;

        if (move_uploaded_file($temporal, $ruta)) {
            $imagen = $ruta;
        } else {
            echo "Error al subir la imagen";
        }
    }

    // Insertar la nueva publicación
    $sql = "INSERT INTO `publicaciones`(`titulo`, `contenido`, `fecha`, `Nombre`, `imagen`) VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST["titulo"], $_POST["contenido"], date('Y-m-d H:i:s'), $nom_usuario, $imagen]);
}
?>

<div class="container">
    <div class="main-content">
        <div class="write-post-container">
            <div class="user-profile">
                <div>
                    <p>Unigen</p>
                </div>
            </div>
            <form method="post" action="" class="form" enctype="multipart/form-data">
                <div class="post-input-container">
                    <label>Título</label><input type="text" name="titulo" class="form-control" required><br>
                    <textarea rows="5" placeholder="Contenido" name="contenido" required></textarea>
                </div>
                <div class="photo-submit">
                    <input type="file" class="form-control" id="imagen" name="imagen" required>
                </div>
                <input type="submit" value="Publicar" name="publicar">
            </form>
        </div>
    </div>
</div>

<?php require_once "./views/parte_inferior.php" ?>
