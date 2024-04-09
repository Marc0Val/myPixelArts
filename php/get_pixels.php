<?php
include("conexion.php");

// Seleccionar todos los registros de la tabla 'pixel'
$sql = "SELECT * FROM pixel";
$result = $conn->query($sql);

// Crear un array para almacenar los datos
$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Devolver los datos en formato JSON
echo json_encode($data);

// Cerrar la conexión
$conn->close();
?>
