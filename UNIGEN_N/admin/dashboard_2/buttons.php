<?php 
session_start();

require_once "./views/parte_superior.php" 

?>
<?php

        // Establecer la conexión a la base de datos utilizando PDO
        include_once './bd/conexion.php';

        // Consulta SQL utilizando PDO
        //$sql = "SELECT t1.id, t1.fecha, t1.contenido, t1.titulo, t2.imagen FROM publicaciones t1 JOIN imagenes t2 ON t2.id_publicaciones = t1.id ORDER BY fecha DESC";
        //$stmt = $pdo->query($sql);

        //consulta CON ID para retornar datos del usuario
        $sql = "SELECT * FROM usuarios WHERE id = " . $_SESSION["user_id"];
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $user = $stmt->fetchAll(); //array de consulta
        //Nombre del usuario 
        $nom_usuario = $user[0]["usuario"];

        //publicacion
        if(isset($_POST['publicar'])){
            // Consulta preparada para insertar una nueva publicación
            $sql = "INSERT INTO `publicaciones`(`titulo`, `contenido`, `fecha`,`Nombre`) VALUES (?, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$_POST["titulo"], $_POST["contenido"], date('Y-m-d H:i:s'), $nom_usuario]); // Ajusta el valor de 'Nombre' según lo necesites

            // Obtener el último ID insertado
            $id_pu = $pdo->lastInsertId();

            // Procesar la imagen
            $image = $_FILES['image']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));

            // Consulta preparada para insertar la imagen
            $sql = "INSERT INTO `imagenes`(`id_publicaciones`, `imagen`) VALUES (?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$id_pu, $imgContent]);
        }
        ?>

<div class="container">

    <div class="main-content">

        <div class="write-post-container">
            <div class="user-profile">
                <!--<img src="img_fem/C399B262-8438-41D5-B0CE-12D7189FD062_1_201_a.jpeg">-->
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

 

<?php require_once "./views/parte_inferior.php" ?>
