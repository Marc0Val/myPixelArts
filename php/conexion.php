<?php
// modo de conexion a la base de datos... en este caso es de forma local
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pixels";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    
?>
