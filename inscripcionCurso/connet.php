<?php
// Configuración de conexión
$servidor = "localhost"; 
$usuario = "crear_materia"; 
$contraseña = ""; 
$base_datos = "crear_materia"; 

// Crear conexión
$conn = new mysqli($servidor, $usuario, $contraseña, $base_datos);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Confirmación de conexión exitosa
echo "Conexión exitosa a la base de datos";
?>

 