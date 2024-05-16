<?php 
/*
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>window.location='index.php';</script>";
}  */
//$user=$_SESSION["user_id"];
include 'conexion/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="img_fem/logo_oficial-fotor-2024051017195.png" type="">
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
    <link rel="stylesheet" href="index.css">
    <title>UNIGEN</title>
</head>
<body>
    <!---------Barra de arriba---------->
    <?php
        include'menu.php';
    ?>


   <!--letras que cambian de color-->
   <section class="cont_video">
        <video autoplay loop muted plays-inline class="back-video">
            <source src="img_fem/video_marcha.mp4" type="video/mp4">
        </video>
        <div class="content">
            <h1>UNIGEN</h1>
            <p> 
                En la búsqueda de un mundo más 
                justo y equitativo, es crucial 
                enfrentar desafíos que afectan 
                a mujeres y niñas en todo el 
                mundo. Desde el tráfico sexual 
                hasta el feminicidio y la violencia 
                en tiempos de conflicto, erradicar 
                estas injusticias es fundamental 
                para construir un futuro donde 
                todos puedan vivir libres de 
                violencia y con igualdad de 
                oportunidades.
            </p>
        </div>
    </section>  
    <!------Section 2-------->
    
    <section class="section2">

<div class="section2-content container">

        <div class="section2-group"> 

            <div class="sections">
                <img src="img_fem/carrusel_1.jpeg" alt=""> 
                
            </div>

            <div class="sections"> 
                <img src="img_fem/carrusel_2.jpeg" alt="">
               
            </div>

            <div class="sections"> 
                <img src="img_fem/carrusel_3.jpeg" alt="">
                
            </div>

            <div class="sections"> 
                <img src="img_fem/carrusel_4.jpeg" alt="">
                
            </div>

            <div class="sections"> 
                <img src="img_fem/carrusel_5.jpeg" alt="">
                
            </div>
        </div>
</div>
</section>

<!--------Quienes Somos Section 3----------->
<section class="quienes_somos">
<div class="txt_quienes">
    <h2>¿Quiénes somos?</h2>
    <p>
        Somos un movimiento dedicado 
        a impulsar el cambio hacia la 
        igualdad de género. Nuestra 
        misión es clara: informar, concienciar 
        y actuar contra las desigualdades que 
        enfrentan las mujeres en todo el mundo. 
        Estamos comprometidos con el cambio y 
        la construcción de un futuro donde todas 
        las personas puedan vivir libres de 
        discriminación y con igualdad de 
        oportunidades.
    </p>
</div>
</section>


    <!--------------Blog--------------->
    <section class="blog-container">
    
        <h2>Blog</h2>
    
        <div class="blog-content">
            <div class="blog-1">
                <img src="img_fem/img_blog1.jpg" alt="">  
            </div>
    
            <div class="blog-1">
                <img src="img_fem/img_blog2.jpg" alt="">
            </div>
    
            <div class="blog-1">
                <img src="img_fem/img_blog3.jpg" alt="">
            </div>
        </div>
    
        <a href="publicaciones.php" class="btn-1">Ver más</a>
    
    </section>
    

    <!--Situación de la mujer-->

    <section class="Genero">

        <div class="Genero-content container">

            <h2>Situación de la mujer</h2>

                <div class="genero-group"> 

                    <div class="generos">
                        <img src="img_fem/Situación2.jpg" alt=""> 
                        <p>
                            La situación de la mujer es un 
                            desafío constante en la búsqueda 
                            de igualdad. Es hora de 
                            unirnos, levantar nuestras voces 
                            y construir un futuro sin miedo 
                            ni discriminación.
                        </p>
                    </div>

                    <div class="generos"> 
                        <img src="img_fem/Sit_2.jpeg" alt="">
                        <p>
                            Desde la opresión sistémica hasta 
                            la resistencia y la resiliencia, 
                            las mujeres han estado en el centro 
                            de la lucha por la justicia y la 
                            igualdad. 
                        </p>
                    </div>

                    <div class="generos"> 
                        <img src="img_fem/Situación3.jpg" alt="">
                        <p>
                            La violencia doméstica, el acoso 
                            sexual, la trata de personas con 
                            fines de explotación sexual manifiesta 
                            ampliamente la violencia de genero.
                        </p>
                    </div>
                </div>
        </div>
    </section>

    <!-- carrusel -->
    <section class="wrapper">
            <div class="wrapper">
                <div class="container_carru">
                    <input type="radio" name="slide" id="c1" checked>
                    <label for="c1" class="card">
                        <div class="row">
                            <div class="icon">1</div>
                            <div class="description">
                                <h4>Rebelión</h4>
                            </div>
                        </div>
                    </label>
                    <input type="radio" name="slide" id="c2" >
                    <label for="c2" class="card">
                        <div class="row">
                            <div class="icon">2</div>
                            <div class="description">
                                <h4>Unión</h4>
                            </div>
                        </div>
                    </label>
                    <input type="radio" name="slide" id="c3" >
                    <label for="c3" class="card">
                        <div class="row">
                            <div class="icon">3</div>
                            <div class="description">
                                <h4>Sororidad</h4>
                            </div>
                        </div>
                    </label>
                    <input type="radio" name="slide" id="c4" >
                    <label for="c4" class="card">
                        <div class="row">
                            <div class="icon">4</div>
                            <div class="description">
                                <h4>Pioneras</h4>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
        </section>
        
       
    <!---Cuales son algunas formas...--->
    <section class="section5">
        <div class="txt_sec5">
            <h2>¿Cómo se manifiesta la violencia de género?</h2>
            <p>
                La violencia de género adopta 
                diversas formas que van desde 
                la violencia doméstica hasta el 
                acoso sexual, la trata de personas 
                con fines de explotación sexual y 
                el matrimonio forzado, entre otros 
                comportamientos abusivos y 
                discriminatorios. Es esencial 
                reconocer y entender estas manifestaciones 
                para poder abordar eficazmente el problema 
                y trabajar hacia un futuro donde todas las 
                personas, independientemente de su género, 
                vivan libres de violencia y discriminación.
            </p>
        </div>
    </section>


 
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
    <script src="bot.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>