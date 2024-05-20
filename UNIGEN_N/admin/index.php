<?php 
session_start();
date_default_timezone_set('America/Mexico_City');
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == null) {
    print "<script>window.location='../../dashboard/datos.php';</script>";
}
include '../conexion/conexion.php';
include 'image_handler.php';

// Consulta preparada para evitar inyección SQL
$sql = "SELECT * FROM usuarios WHERE usuario = ? AND password = ?";
$stmt = $pdo->prepare($sql);
// $stmt->execute([$a, $b]);

// Obtener el primer resultado
$user_id = '';
$admin = '';
while ($r = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $user_id = $r["id"];
    $admin = $r["admin"];
    break;
}

$ab = isset($_POST['id']) ? $_POST['id'] : '';

if (!empty($ab)) {
    // Define la consulta SQL con una consulta preparada
    $sql = "SELECT * FROM usuarios WHERE usuario = :usuario";

    // Parámetros para la consulta preparada
    $parametros = array(':usuario' => $ab);

    try {
        // Ejecuta la consulta SQL con parámetros usando el método execute()
        $stmt = $pdo->prepare($sql);
        $stmt->execute($parametros);
        $user_usuario = '';
        // Recorre los resultados usando el método fetch()
        while ($r = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Accede a los valores de la fila
            $user_usuario = $r['name'];
            // Puedes hacer lo que necesites con $user_usuario aquí
            // Por ejemplo, imprimirlo
            echo $user_usuario;
            // Si solo necesitas el primer resultado, puedes salir del bucle
            break;
        }
    } catch (PDOException $e) {
        // Maneja los errores de la consulta
        echo "Error al ejecutar la consulta: " . $e->getMessage();
    }
}

//consulta CON ID para retornar datos del usuario
$sql = "SELECT * FROM usuarios WHERE id = " . $_SESSION["user_id"];
$stmt = $pdo->prepare($sql);
$stmt->execute();
$user = $stmt->fetchAll(); //array de consulta
//Nombre del usuario 
$nom_usuario = $user[0]["usuario"];

// publicacion
if (isset($_POST['publicar'])) {
    // Inicializa la variable de la imagen
    $imagen = handleImageUpload();

    // Consulta preparada para insertar una nueva publicación
    $sql = "INSERT INTO `publicaciones`(`titulo`, `contenido`, `fecha`, `Nombre`, `imagen`) VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);

    // Ejecutar la consulta preparada con los datos
    $stmt->execute([$_POST["titulo"], $_POST["contenido"], date('Y-m-d H:i:s'), $nom_usuario, $imagen]);
}

/*if (isset($_POST["borrar"])) {
    // Consulta preparada para borrar una publicación
    $sql = "DELETE FROM publicaciones WHERE `id` = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['id']]);
} */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="../img_fem/logo_oficial-fotor-2024051017195.png" type="">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- CSS de Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Librería jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Librería de Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Unigen</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>
    <?php
        include 'menu.php';
    ?>
    
    <!------------------main.content------------------->
    <!------------------publicacion-------------------->

    <div class="container">
        <div class="main-content">
            <div class="write-post-container">
                <!--Reacuadro de crear una publicacion-->
                <div class="user-profile">
                    <img src="img_fem/C399B262-8438-41D5-B0CE-12D7189FD062_1_201_a.jpeg">
                    <div>
                        <?php //echo $nom_usuario; ?>
                        <p>@User</p>
                    </div>
                </div>
                
                <form method="post" action="" class="form" enctype="multipart/form-data">
                    <div class="post-input-container">
                        <label>Titulo</label>
                        <textarea rows="5" placeholder="Escribe" name="titulo" required></textarea>
                        <label>Contenido</label>
                        <textarea rows="5" placeholder="Escribe" name="contenido" required></textarea>
                    </div>
                    <div class="file-field input-field">
                        <input type="file" class="form-control" id="imagen" name="imagen" required>
                        <!-- Seleccionar la imagen -->
                    </div>
                    <input type="submit" class="submit" value="Publicar" name="publicar">
                    <!--Boton de publicar-->
                </form>
            </div>
        </div> <!--Aqui acaba el main content-->

        <!------------------publicacion 1------------------->
        <div class="container2">
            <div class="segundo-bloque">
                <?php
                $sql = "SELECT id, fecha, contenido, titulo, imagen, Nombre FROM publicaciones ORDER BY fecha DESC";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                while ($r = $stmt->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <div class="post-container">
                    <div class="post-row">
                        <div class="user-profile">
                            <img src="img_fem/C399B262-8438-41D5-B0CE-12D7189FD062_1_201_a.jpeg">
                            <!--Esta es la imagen para el usuario del blog-->
                            <div>
                                <?php //echo "<p>$user_usuario</p>"; ?>
                                <h3><?php echo $r["Nombre"] ?></h3>
                                <!--Aqui imprime el nombre del usuario-->
                            </div>
                        </div>
                    </div>
                    <!--Aqui imprimie la publicacion-->
                    <h1><?php echo $r["titulo"] ?></h1>
                    <span><?php echo date("d/m/Y H:i", strtotime($r["fecha"])) ?></span>
                    <p class="post-text"><?php echo $r["contenido"] ?></p>
                    <?php
                    // Mostrar la imagen de la publicación
                    if (!empty($r["imagen"])) {
                        echo '<img class="post-img" src="' . $r["imagen"] . '" alt="Publicación Imagen" />';
                    }
                    ?>
                    <div class="post-row"></div>
                    <form method="post" action="" class="form" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" name="id" value="<?php echo $r["id"]; ?>">
                    <!--    <input type="submit" value="Borrar" name="borrar">  -->
                        <!--Boton de borrar-->
                    </form>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>

    </div> <!--Aqui acaba el primer container-->
    <!------------------right-sidebar------------------>
        
     <!-----------footer------------->

<section class="footer">
    <div class="footer-cont"> 
        <img src="img_fem/n_logo.png">
        <h2>UNIGEN</h2> <!-- Aquí está el título h1 -->

        <div class="link">          
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="publicaciones.php">Blog</a></li>
                <li><a href="historia.php">Historia</a></li>
            </ul>
        </div>        

        <p>&copy; 2024 UNIGEN - All Rights Reserved </p>

        <div class="button-container">

            <button class="button">
                <a href="https://www.instagram.com/_unigen_" target="_blank"><i class='bx bxl-instagram'></i></a>
            </button>
      
            <button class="button">
                <a href="https://www.facebook.com/" target="_blank"><i class='bx bxl-gmail'></i></a>
            </button>


        </div>
        
   </div> 
</section>
 

    <script src="script4.js"></script>
</body>
</html>