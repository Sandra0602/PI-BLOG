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
                    <p>UNIGEN</p>
                </div>
            </div>
            <form method="post" action="" class="form" enctype="multipart/form-data">
                <div class="post-input-container">
                    <label class="text-gray-700">Título</label><input type="text" name="titulo" class="form-control border-gray-300 focus:border-black focus:ring focus:ring-black focus:ring-opacity-50" required><br>
                    <label></label><textarea rows="5" placeholder="Contenido" name="Contenido" class="form-control border-gray-300 focus:border-black focus:ring focus:ring-black focus:ring-opacity-50" required></textarea>
                </div>
                <div class="photo-submit">
                    <input type="file" id="imagen" name="imagen" class="form-input mt-1 block w-full border-gray-300 focus:border-black focus:ring focus:ring-black focus:ring-opacity-50 bg-blue-200 hover:bg-blue-300" required>
                </div>
                <input type="submit" value="Publicar" name="publicar" class="btn-primary py-2 px-4 bg-blue-500 text-white rounded-lg hover:bg-blue-700 mt-4">
            </form>
        </div>
    </div>
</div>

<?php require_once "./views/parte_inferior.php" ?>
