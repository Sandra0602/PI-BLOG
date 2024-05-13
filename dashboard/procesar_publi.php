<?php
// Procesar el formulario de nueva publicación
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $titulo = $_POST["titulo"];
    $contenido = $_POST["contenido"];
    
    // Procesar la imagen
    $nombreImagen = $_FILES["imagen"]["name"];
    $rutaImagen = "uploads/" . $nombreImagen; // Ruta donde se almacenará la imagen
    move_uploaded_file($_FILES["imagen"]["tmp_name"], $rutaImagen); // Mover la imagen al directorio de subidas

    // Guardar la publicación en la base de datos (aquí debes escribir el código para insertar los datos en tu base de datos)

    // Redirigir de vuelta a la página principal después de guardar la publicación
    header("Location: buttons.php");
    exit();
}
?>
