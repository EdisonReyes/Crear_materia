<?php
// Configuración de conexión
$servidor = "localhost";
$usuario = "tu_usuario";
$contraseña = "tu_contraseña";
$base_datos = "nombre_base_datos";

try {
    // Crear conexión PDO
    $dsn = "mysql:host=$servidor;dbname=$base_datos;charset=utf8mb4";
    $pdo = new PDO($dsn, $usuario, $contraseña);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Manejar la inserción de datos
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre_materia = $_POST['nombre_materia'];
        $codigo_materia = $_POST['codigo_materia'];
        $descripcion = $_POST['descripcion'];

        // Validar que los campos no estén vacíos
        if (!empty($nombre_materia) && !empty($codigo_materia)) {
            // Insertar datos en la tabla 'materias'
            $sql = "INSERT INTO materias (nombre, codigo, descripcion) VALUES (:nombre, :codigo, :descripcion)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':nombre' => $nombre_materia,
                ':codigo' => $codigo_materia,
                ':descripcion' => $descripcion,
            ]);

            echo "Materia registrada con éxito.";
        } else {
            echo "Por favor, complete todos los campos obligatorios.";
        }
    }
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Materias</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }
        .form-container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .submit-btn {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Registro de Materias</h1>
        <form method="POST" action="">
            <div class="form-group">
                <label for="nombre_materia">Nombre de la Materia</label>
                <input type="text" id="nombre_materia" name="nombre_materia" placeholder="Ej: Matemáticas Básicas" required>
            </div>
            <div class="form-group">
                <label for="codigo_materia">Código de la Materia</label>
                <input type="text" id="codigo_materia" name="codigo_materia" placeholder="Ej: MAT101" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" name="descripcion" placeholder="Breve descripción de la materia (opcional)" rows="4"></textarea>
            </div>
            <button type="submit" class="submit-btn">Registrar Materia</button>
        </form>
    </div>
</body>
</html>

        
    