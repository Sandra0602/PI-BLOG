<?php 
session_start();
include 'conexion/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="img_fem/logo_oficial-fotor-2024051017195.png" type="">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- CSS de Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Librería jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Librería de Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="styles/publicaciones.css">
    <title>Unigen</title>
</head>
<body>
    <?php
        include 'menu.php';
    ?>

    <!------------------publicacion 1------------------->
    <div class="container2">
        <div class="segundo-bloque">
            <?php
                // Consulta para obtener todas las publicaciones
                $sql = "SELECT id, fecha, contenido, titulo, imagen, Nombre FROM publicaciones ORDER BY fecha DESC";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                
                // Iterar sobre los resultados y mostrar las publicaciones
                while ($r = $stmt->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <div class="post-container">
                <div class="post-row">
                    <div class="user-profile">
                        <img src="img_fem/img_comu.jpg">
                        <div>
                            <p><?php echo $r["Nombre"]; ?></p>
                            <span><?php echo date("d/m/Y H:i", strtotime($r["fecha"]))?></span>
                        </div>
                    </div>
                </div>
                <h1><?php echo $r["titulo"]?> </h1>
                <p class="post-text"><?php echo $r["contenido"]?> </p>
                <?php
                    if (!empty($r["imagen"])) {
                        echo '<img class="post-img" src="'.$r["imagen"].'" alt="Imagen de la publicación" />';
                    }
                ?>
                <div class="post-row"></div>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
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

    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
