<?php
// Importar la conexión PDO desde el archivo de configuración
require_once 'conexion.php';

// Verificar si se recibieron los datos del formulario
if(isset($_POST['id']) && isset($_POST['titulo']) && isset($_POST['contenido']) && isset($_POST['fecha'])) {
    // Obtener los datos del formulario
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    $fecha = $_POST['fecha'];

    // Consulta SQL para actualizar la publicación
    $consulta = "UPDATE publicaciones SET titulo = :titulo, contenido = :contenido, fecha = :fecha WHERE id = :id";
    
    // Preparar la consulta
    $stmt = $pdo->prepare($consulta);
    
    // Asignar valores a los parámetros
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':titulo', $titulo, PDO::PARAM_STR);
    $stmt->bindParam(':contenido', $contenido, PDO::PARAM_STR);
    $stmt->bindParam(':fecha', $fecha, PDO::PARAM_STR);
    
    // Ejecutar la consulta
    if($stmt->execute()) {
        // La actualización fue exitosa
        echo "¡Los cambios se guardaron correctamente!";
    } else {
        // Error al ejecutar la consulta
        echo "Error al guardar los cambios.";
    }
} else {
    // Datos no recibidos
    echo "Error: datos no recibidos.";
}
?>
