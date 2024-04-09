<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $x = $_POST['x'];
    $y = $_POST['y'];
    $color = $_POST['color'];

    // Insertar los datos en la tabla 'pixel'
    $sql = "INSERT INTO pixel (x, y, color) VALUES ($x, $y, '$color')";
    if ($conn->query($sql) === TRUE) {
        echo "Pixel data saved successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>
