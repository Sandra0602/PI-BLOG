<?php 
session_start();

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
    <link rel="stylesheet" href="styles/historia.css">
    <title>UNIGEN</title>
</head>
<body>
    <?php
        include'menu.php';
    ?>  


    <!-- carrusel -->
    <section class="carrusel-noticias"> 
        <div class="carrusel">
            <!-- list item -->
            <div class="list">
                <div class="item">
                    <img src="img_fem/Img_inter_2.jpg">
                    <div class="contenido">
                        <div class="title">Educación Transformadora</div>
                        <div class="topic">Inspiradora</div>
                        <div class="des">
                            <!-- lorem 50 -->
                            1891 fue el año en el que las mujeres empezaron a educarse
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="img_fem/Blog_sec.png">
                    <div class="contenido">
                        <div class="title">Despertar Femenino</div>
                        <div class="topic">Rebelión</div>
                        <div class="des">
                            Las mujeres comenzaron a derrocar la dictadura, conseguir 
                            la mejora de los salarios
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="img_fem/img_fem1.jpeg">
                    <div class="contenido">
                        <div class="title">Historia en las Urnas</div>
                        <div class="topic">Pioneras</div>
                        <div class="des">
                            En 1955 por primera vez las mujeres 
                            participaron en una elección federal.
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="img_fem/img_inter.jpg">
                    <div class="contenido">
                        <div class="title">Lo Personal es Político</div>
                        <div class="topic">Sororidad</div>
                        <div class="des">
                        1971 nace el contingente 
                        Mujeres en Acción Solidaria (MAS), primer acercamiento con los movimientos 
                        feministas 
                        </div>
                    </div>
                </div>
            </div>
            <!-- list thumnail -->
            <div class="thumbnail">
                <div class="item">
                    <img src="img_fem/Img_inter_2.jpg">
                    <div class="contenido">
                        <div class="title">
                            Educación Transformadora
                        </div>
                        <div class="description">
                            Inspiradora
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="img_fem/Blog_sec.png">
                    <div class="contenido">
                        <div class="title">
                            Derpertar Femenino
                        </div>
                        <div class="description">
                            Rebelión
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="img_fem/img_fem1.jpeg">
                    <div class="contenido">
                        <div class="title">
                            Historia en las Urnas
                        </div>
                        <div class="description">
                            Pioneras
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="img_fem/img_inter.jpg">
                    <div class="contenido">
                        <div class="title">
                            Lo Personal es Político
                        </div>
                        <div class="description">
                            Sororidad
                        </div>
                    </div>
                </div>
            </div>
            <!-- next prev -->

            <div class="arrows">
                <button id="prev"><</button>
                <button id="next">></button>
            </div>
            <!-- time running -->
            <div class="time"></div>
        </div>
    </section>


    <!--Situación de la mujer-->

    <section class="Genero">

        <div class="Genero-content container">

            <h2>Historia de la mujer</h2>

                <div class="genero-group"> 

                    <div class="generos">
                        <img src="img_fem/carr_2.webp" alt=""> 
                        
                    </div>

                    <div class="generos"> 
                        <img src="img_fem/car__1.webp" alt="">
                        <p>
                            ¡Mujeres transformando vidas, desafiando 
                            límites, construyendo el futuro! 
                        </p>
                    </div>

                    <div class="generos"> 
                        <img src="img_fem/carr_3.webp" alt="">
                       
                    </div>
                </div>
        </div>
    </section>


<!--------Quienes Somos Section 3----------->
<section class="quienes_somos">
    <div class="img_container">
        <img src="img_fem/h__1.webp" alt="Despertar Femenino" class="background-img">
    </div>
    <div class="txt_quienes">
        <h2>Despertar Femenino</h2>
        <p>
            Obreras, campesinas, indígenas, maestras, 
            enfermeras y periodistas. Todas formaron 
            parte de un movimiento que antecedió a la 
            Revolución Mexicana desde las entrañas de 
            las minas, fábricas, siembras y posteriormente
            en los clubes políticos.

            Las mujeres comenzaron a organizarse con el objetivo 
            de derrocar la dictadura de Porfirio Díaz, conseguir 
            la mejora de los salarios y, por supuesto, la obtención 
            del sufragio. 
        </p>
    </div>
</section>

<!--Wapper-->

<section class="wrapper-sec">
    <div class="wrapper">
        <div class="card">
            <img src="img_fem/Pirmera_adelita.png">
            <div class="info">
                <h3>Adela Velarde Pérez</h3>
                <p>Considerada como la primer adelita</p>
            </div>
        </div>
        <div class="card">
            <img src="img_fem/pirmera_mujer.jpeg">
            <div class="info">
                <h3>Hidalgo</h3>
                <p>Primera mujer de América Latina que pudo votar</p>
            </div>
        </div>
        <div class="card">
            <img src="img_fem/Primer_gobernadora.jpeg">
            <div class="info">
                <h3>Griselda álvarez</h3>
                <p>La primera mujer gobernadora en México</p>
            </div>
        </div>
    </div>
</section>


<!--------Quienes Somos Section 3----------->
<section class="quienes_somos2">
    <div class="img_container2">
        <img src="img_fem/voto-mujer.jpg" alt="Despertar Femenino" class="background-img2">
    </div>
    <div class="txt_quienes2">
        <h2>Historia en las Urnas</h2>
        <p>
            En 1955 por primera vez las mujeres 
            participaron en una elección federal.
    
            Si bien hemos escuchado que el padre 
            de la democracia es Francisco I. Madero; 
            lo cierto es que los fundadores y las 
            fundadoras de la democracia tienen otros 
            nombres. Y la verdadera lucha se basó en un 
            movimiento feminista para todos y todas.
        </p>
    </div>
</section>

<section class="img_giratorias">
    <div class="img_gir">
        <div class="img" style="--i:0; --img:url('img_fem/historia1.jpg')"></div>
        <div class="img" style="--i:1; --img:url('img_fem/hist2.jpg')"></div>
        <div class="img" style="--i:2; --img:url('img_fem/historia3.jpg')"></div>
        <div class="img" style="--i:3; --img:url('img_fem/historia4.jpg')"></div>
    </div>
</section>

<!--------Quienes Somos Section 3----------->
<section class="quienes_somos3">
    <div class="img_container3">
        <img src="img_fem/lo_personal_es_politico.jpeg" alt="Despertar Femenino" class="background-img3">
    </div>
    <div class="txt_quienes3">
        <h2>Lo Personal es Político</h2>
        <p>
            Fue en el año 1971 que nace el contingente 
            Mujeres en Acción Solidaria (MAS), este es 
            el primer acercamiento con los movimientos 
            feministas que conocemos hoy en día y fue 
            influenciado por el feminismo estadounidense 
            y europeo posterior a 1968.
        </p>
    </div>
</section>

<!--Imagens interactivas-->
<section class="slider-container">
    <div class="slider-images">
    <div class="slider-img">
        <img src="img_fem/car__2.jpeg" alt="1" />
        <h1>Visionaria</h1>
        <div class="details">
          <h2>Visionaria</h2>
        </div>
      </div>
      <div class="slider-img">
      <img src="img_fem/voto-mujer.jpg" alt="2" />
        <h1>Determinada</h1>
        <div class="details">
          <h2>Determinada</h2>
        </div>
      </div>
      <div class="slider-img">
        <img src="img_fem/car__4.jpeg" alt="3" />
        <h1>Inspiradora</h1>
        <div class="details">
          <h2>Inspiradora</h2>
        </div>
      </div>
      <div class="slider-img active">
        <img src="img_fem/car__1.webp" alt="4" />
        <h1>Audaz</h1>
        <div class="details">
          <h2>Audaz</h2>
        </div>
      </div>
      <div class="slider-img">
        <img src="img_fem/lo_personal_es_politico.jpeg" alt="5" />
        <h1>Luchadora</h1>
        <div class="details">
          <h2>Luchadora</h2>
        </div>
      </div>
      <div class="slider-img">
        <img src="img_fem/car__3.jpeg" alt="6" />
        <h1>Resiliente</h1>
        <div class="details">
          <h2>Resiliente</h2>
        </div>
      </div>
      <div class="slider-img">
        <img src="img_fem/carr_2.webp" alt="7" />
        <h1>Valientes</h1>
        <div class="details">
          <h2>Valiente</h2>
        </div>
      </div>
    </div>
  </section>
  
<!--------Quienes Somos Section 3----------->
<section class="quienes_somos4">
    <div class="img_container4">
        <img src="img_fem/educacion.png" alt="Despertar Femenino" class="background-img4">
    </div>
    <div class="txt_quienes4">
        <h2>Educación Transformadora</h2>
        <p>
            La formación para maestros no era posible 
            antes del Porfiriato, por lo cual, la enseñanza 
            no tenía fundamento, limitándose a la enseñanza 
            de Lectura-escritura y Matemáticas, eso en 1882.
            Fue hasta 1891 que las mujeres empezaron a educarse, 
            se hizo el asilo para niñas y la escuela secundaria 
            para señoritas, para que así pudieran tener una profesión 
            ingresando a la Escuela Normal para profesoras.
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
<script src="script2.js"></script>
<script>
        jQuery(document).ready(function ($) {
          $(".slider-img").on("click", function () {
            $(".slider-img").removeClass("active");
            $(this).addClass("active");
          });
        });
      </script>

</body>
</html>