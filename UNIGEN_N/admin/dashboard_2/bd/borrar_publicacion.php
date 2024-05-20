<?php
// Importar la conexión PDO desde el archivo de configuración
require_once 'conexion.php';

// Verificar si se recibió el ID de la publicación a borrar
if (isset($_POST['borrar']) && isset($_POST['id'])) {
    // Obtener el ID de la publicación a borrar
    $id = $_POST['id'];

    // Consulta SQL para borrar la publicación
    $sql = "DELETE FROM publicaciones WHERE id = :id";

    // Preparar la consulta
    $stmt = $pdo->prepare($sql);

    // Asignar valores a los parámetros
    $stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        // Borrado exitoso
        echo 'Publicación borrada correctamente.';
    } else {
        // Error al ejecutar la consulta
        echo 'Error al borrar la publicación.';
    }
} else {
    // No se recibió el ID de la publicación a borrar
    echo 'No se recibió el ID de la publicación.';
}
?>
