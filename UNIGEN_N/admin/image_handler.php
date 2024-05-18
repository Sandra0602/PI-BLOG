<?php
require_once '../conexion/conexion.php';

function handleImageUpload() {
    $imagen = '';

    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
        $nombre_imagen = $_FILES['imagen']['name'];
        $temporal = $_FILES['imagen']['tmp_name'];
        $carpeta = './img_fem';
        $ruta = $carpeta . '/' . $nombre_imagen;
        
        if (move_uploaded_file($temporal, $ruta)) {
            return $ruta;
        } else {
            echo "Error al subir la imagen";
        }
    }

    return $imagen;
}
?>

