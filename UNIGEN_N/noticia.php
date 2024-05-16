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
    <link rel="stylesheet" href="./css/styles/estilo.css">
    <script src="script.js"></script>
    <title>Noticias</title>
</head>
<body>
    <?php
        include'menu.php';
    ?>

<div class="container">
    <div class="right-sidebar">
        <div class="sidebar-title">
            <h1>Noticias</h1>
        </div>
        <div class="event">
            <div class="left-event">
            </div>
            <div class="right-event">
                <h4><a href="noticia1.php">Noticia 1</a></h4>
                <p><i class='bx bxs-map' ></i></i>Lugar de noticia</p>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit fuga dolores reiciendis. 
                Distinctio ipsa veniam adipisci mollitia recusandae ea molestias, eius ipsam earum soluta iste, 
                tenetur atque ad tempore! Placeat.</p>
        </div>
        
        <div class="event">
            <div class="left-event">
            </div>
            <div class="right-event">
                <h4><a href="noticia2.php">Noticia 2</a></h4>
                <p><i class='bx bxs-map' ></i></i>Lugar de noticia</p>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium qui necessitatibus cum, dolores similique eum at aspernatur adipisci ad, dolorum 
                deleniti quisquam quos eligendi voluptate quaerat praesentium mollitia officiis culpa?</p>
        </div>
        <div class="event">
            <div class="left-event">
            </div>
            <div class="right-event">
                <h4><a href="noticia3.php">Noticia 3</a></h4>
                <p><i class='bx bxs-map' ></i></i>Lugar de noticia</p>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea a suscipit commodi libero. Tempore, nobis tempora beatae, sapiente ullam officia laboriosam deserunt 
                recusandae molestias facilis voluptas. Corrupti ducimus eaque officia!</p>
        </div>
        <div class="event">
            <div class="left-event">

            </div>
            <div class="right-event">
                <h4><a href="noticia4.php">Noticia 4</a></h4>
                <p><i class='bx bxs-map' ></i></i>Lugar de noticia</p>
            </div>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab earum deleniti porro, non ullam, blanditiis doloribus sint, quas eaque fugiat cumque. Iusto 
                magni debitis accusamus cum? Quam itaque reprehenderit voluptates.</p>
        </div>
        <div class="event">
            <div class="left-event">
            </div>
            <div class="right-event">
                <h4><a href="noticia5.php">Noticia 5</a></h4>
                <p><i class='bx bxs-map' ></i></i>Lugar de noticia</p>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi animi facere dolore cumque rerum corrupti eum! Deleniti similique voluptates numquam repellat 
                adipisci atque, fugit nemo a nostrum minus consequatur voluptas.</p>
        </div>
        <!--NO BORRAR
            <div class="event">
            <div class="left-event">
                <h3>14</h3>
                <span>April</span>
            </div>
            <div class="right-event">
                <h4>Foro de la Mujer</h4>
                <p><i class='bx bxs-map' ></i></i>Salón Marbella </p>
            </div>
            <p>Te invitamos a particiapar a la marcha este 8 de Marzo. Empieza a las 4 pm.</p>
        </div>-->
     </div>

</div>
</body>
</html>