<?php 
/* class Conexion {
   // public static function Conectar() {        
        define('servidor', 'localhost');
        define('nombre_bd', 'practica');
        define('usuario', 'root');
        define('password', '');					        
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
        try {
            $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);			
            return $conexion;
        } catch (PDOException $e) {
            die("El error de Conexión es: ". $e->getMessage());
        }
    }
}*/

$url = "mysql:host=localhost;dbname=practica";
$user= "root";
$pssword = "";
try {
    $pdo = new PDO($url, $user, $pssword);
    //echo "Conexion exitosa";
}
catch (PDOException $e) {
    echo "". $e->getMessage() ."";
}

?>
