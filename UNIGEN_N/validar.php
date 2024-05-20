<?php
/*
    $a = $_POST['usu'];
    $b = $_POST['pass'];
    include 'conexion/conexion.php';
    sql="select * from usuarios where usuario='".$a."' and password='".$b."'";$
    $res = $db->execute($sql);
	while ($r=$res->fetch_array()) {
        $user_id=$r["id"];
		$admin=$r["admin"];
		break;
	}
    session_start();
	$_SESSION["user_id"]=$user_id;
    if($admin=="si"){
        print "<script>window.location='admin/index.php?inicio=1';</script>";
    }
    else{
        print "<script>window.location='index.php?inicio=1';</script>";
    }
	//
     */
    session_start();
    
    // Verificar si se enviaron datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Evitar la inyección SQL utilizando sentencias preparadas
        include 'conexion/conexion.php'; // Asegúrate de que esta conexión utilice sentencias preparadas
    
        $a = $_POST['usu'];
        $b = $_POST['pass'];
    
        // Consulta preparada para evitar inyección SQL
        $sql = "SELECT * FROM usuarios WHERE usuario = ? AND password = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$a, $b]); // Ejecutar la consulta con los valores asociados a los marcadores de posición
        
        // Obtener los resultadosde 
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        // Verificar si se encontró algún usuario
        if ($res) {
            // Obtener datos del usuario
            $user_id = $res[0]["id"];
            $admin = $res[0]["admin"];
    
            // Almacenar ID de usuario en la sesión
            $_SESSION["user_id"] = $user_id;
            $_SESSION["user_admin_comp"] = $admin;
    
            // Redireccionar según el tipo de usuario
            if ($admin == "no") {
                //echo 'eres un usuario';
                header("Location: http://localhost/UNIGEN/UNIGEN_N/admin/index.php");
                exit();
            }else if($admin == "si"){
                //echo "eres un admin";
                header("Location: http://localhost/UNIGEN/UNIGEN_N/admin/dashboard_2/index.php");
            } 
            else {
                echo 'no eres admin';
                //header("Location: index.php");
                exit();
            }
        } else {
            // Si no se encontró un usuario, redirigir a la página de inicio de sesión con un mensaje de error
            header("Location: login.php");
            exit();
        }
    } else {
        // Si no se recibieron datos del formulario, redirigir a la página de inicio de sesión
        header("Location: login.php");
        exit();
    }
    ?>