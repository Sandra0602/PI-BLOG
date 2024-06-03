<?php
require_once './bd/conexion.php';

date_default_timezone_set('America/Mexico_City');

// Verificar si se recibieron los datos del formulario
if(isset($_POST['id']) && isset($_POST['titulo']) && isset($_POST['contenido'])) {
    // Obtener los datos del formulario
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    $fecha = date('Y-m-d H:i:s'); // Obtener la fecha actual
    
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
        echo "¡Los cambios se guardaron correctamente!";
    } else {
        echo "Error al guardar los cambios.";
    }
} else {
    echo "Error: datos no recibidos.";
}
?>

