<header>
    <a href="#" class="logo"><img src="img_fem/logo_oficial.png"></a>
    <nav>
        <ul>
            <?php
            // Verifica si el usuario está autenticado
            if(isset($_SESSION["user_id"])){
                // Consulta el tipo de usuario (admin o no)
                $sql = "SELECT admin FROM usuarios WHERE id = :user_id";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':user_id', $_SESSION["user_id"]);
                $stmt->execute();
                $isadmin = $stmt->fetchColumn();
                    
                if ($isadmin == "si") {
                    // Si es administrador, muestra los elementos del menú para administrador
                    ?>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="http://localhost/UNIGEN/UNIGEN_N/admin/dashboard_2/index.php">Admi</a></li>
                    <li><a href="publicaciones.php">Blog</a></li>
                    <li><a href="historia.php">Historia</a></li>
                    <li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
                    <?php
                } else {
                    // Si no es administrador, muestra los elementos del menú para usuario regular
                    ?>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="publicaciones.php">Blog</a></li>
                    <li><a href="historia.php">Historia</a></li>
                    <li><a href="./admin/index.php">Publicar</a></li>
                    <li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
                    <?php
                }
            } else {
                // Si no está autenticado, muestra los elementos del menú para visitante
                ?>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="publicaciones.php">Blog</a></li>
                <li><a href="historia.php">Historia</a></li>
                <li><a href="login.php">Iniciar sesión/Registrarse</a></li>
                <?php
            }
            ?>
        </ul>
    </nav>
</header>
