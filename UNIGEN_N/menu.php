<header>
    <a href="#" class="logo"><img src="img_fem/logo_oficial.png"></a>
    <nav>
        <ul>
            <?php
            //session_start(); // Inicia la sesión para acceder a $_SESSION["user_id"]

            // Verifica si el usuario está autenticado
            if(isset($_SESSION["user_id"])){
                // Consulta el tipo de usuario (admin o no)
                $sql = "SELECT admin FROM usuarios WHERE id = :user_id";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':user_id', $_SESSION["user_id"]);
                $stmt->execute();
                $isadmin = $stmt->fetchColumn();

                if ($isadmin == "si") {
            ?>
                <li><a href="admin/index.php">Inicio</a></li>
            <?php
                } else {
            ?>
                <li><a href="index.php">Inicio</a></li>
            <?php
                }
            } else {
            ?>
                <li><a href="index.php">Inicio</a></li>
            <?php
            }
            ?>
            <li><a href="publicaciones.php">Blog</a></li>
            <li><a href="historia.php">Historia</a></li>
            <?php
            // Verifica si el usuario está autenticado
            if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == null){
            ?>
                <li><a href="login.php">Iniciar sesión</a></li>
            <?php
            } else {
            ?>
                <li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
            <?php
            }
            ?>
        </ul>
    </nav>
</header>
