<?php 
session_start();

//$user=$_SESSION["user_id"];
include 'conexion/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="img_fem/logo_unigen.png" type="">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Noticia 1</title>
    <link rel="stylesheet" href="./css/styles/style.css">
</head>
<body class="body2">
    <?php
        include'menu.php';
    ?>

    
    <div class="not1">
        <h2 class="masnoti">Noticia  4 8 de marzo</h2>
    </div>

    <div class="noticia-container">
        <img class="info-imagen" src="img_fem/img_mij.jpg" alt="Imagen de la noticia">
        <h3>Fecha de noticia</h3>
        <p class="info-noti">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime necessitatibus 
            error quis aut deleniti corporis facere cum praesentium totam nobis, quidem nulla labore. 
            Suscipit sit necessitatibus quidem quos autem dolorem.
        </p>
    </div>



    <div class="recuadro">
        <img src="img_fem/igualdad1.avif" height="250px">
        <a href="noticia3.php">Noticia 3</a>
    </div>

    <div class="recuadro">
        <img src="img_fem/img_equi.jpg" height="250px">
        <a href="noticia5.php">Noticia 5</a>
    </div>

    <script src="script.js"></script>
    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu(){
            subMenu.classList.toggle("open-menu");
        }

    </script>
</body>
</html>
