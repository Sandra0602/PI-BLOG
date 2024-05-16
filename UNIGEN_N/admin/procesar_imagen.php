<?php
// Verificar si se ha enviado un formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    try {
            include_once 'index.php';
        // Establecer el modo de error a excepción para manejar errores de conexión
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Verificar si se ha subido una imagen
        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            // Obtener información del archivo subido
            $nombreArchivo = $_FILES['image']['name'];
            $tipoMIME = $_FILES['image']['type'];
            $rutaTemporal = $_FILES['image']['tmp_name'];

            // Leer el contenido del archivo en binario
            $contenidoImagen = file_get_contents($rutaTemporal);

            // Preparar y ejecutar la consulta SQL para insertar la imagen en la base de datos
            $consulta = $pdo->prepare("INSERT INTO imagenes (nombre, tipo_mime, imagen) VALUES (?, ?, ?)");
            $consulta->execute([$nombreArchivo, $tipoMIME, $contenidoImagen]);

            // Verificar si la inserción fue exitosa
            if ($consulta->rowCount() > 0) {
                echo "La imagen se ha guardado correctamente en la base de datos.";
            } else {
                echo "Error al guardar la imagen en la base de datos.";
            }
        } else {
            echo "Error al subir la imagen.";
        }
    } catch (PDOException $e) {
        echo "Error de conexión: " . $e->getMessage();
    }
} else {
    echo "Acceso no permitido.";
}
?>

?>
