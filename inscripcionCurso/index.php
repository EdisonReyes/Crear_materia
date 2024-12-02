<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario y Cursos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-image: url('https://media.istockphoto.com/id/1300475578/es/foto/rayos-de-luz-de-ne%C3%B3n-en-la-pared-de-ladrillo-de-ne%C3%B3n-escena-vac%C3%ADa-reflejos-de-ne%C3%B3n-sobre.jpg?s=612x612&w=0&k=20&c=xlIP0sHetQFMmhpH8c1h96vTiXmqnPzg9wkH_W-5enA=');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            color: white;
        }
        .form-container, .table-container {
            max-width: 800px;
            margin: auto;
            background: rgba(255, 255, 255, 0.9); /* Fondo semitransparente */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            margin-bottom: 20px;
            color: black;
        }
        h1, h2 {
            text-align: center;
        }
        p {
            text-align: center;
            color: gray;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }
        .form-group-inline {
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }
        .form-group-inline .form-group {
            flex: 1;
        }
        .submit-btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        table th {
            background-color: #007bff;
            color: white;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <!-- Formulario -->
    <div class="form-container">
        <h1>Formulario de Inscripción Curso</h1>
        <p>Rellene cuidadosamente el formulario de inscripción</p>
        <form action="process_form.php" method="POST">
            <div class="form-group-inline">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
                </div>
                <div class="form-group">
                    <label for="segundo-nombre">Segundo Nombre</label>
                    <input type="text" id="segundo-nombre" name="segundo-nombre" placeholder="Segundo Nombre">
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" id="apellido" name="apellido" placeholder="Apellido" required>
                </div>
            </div>
            <div class="form-group-inline">
                <div class="form-group">
                    <label for="fecha-nacimiento">Fecha de nacimiento</label>
                    <input type="date" id="fecha-nacimiento" name="fecha-nacimiento" required>
                </div>
                <div class="form-group">
                    <label for="genero">Género</label>
                    <select id="genero" name="genero" required>
                        <option value="">Seleccione</option>
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="materia">Materia</label>
                <input type="text" id="materia" name="materia" placeholder="Materia del curso" required>
            </div>
            <div class="form-group">
                <label for="materia-modulo">Año del Módulo</label>
                <input type="text" id="materia-modulo" name="materia-modulo" placeholder="Año del módulo de la materia" required>
            </div>
            <div class="form-group">
                <label for="curso">Seleccione un curso</label>
                <select id="curso" name="curso" required>
                    <option value="">Seleccionar curso</option>
                    <?php
                    $courses = [
                        ['id' => 1, 'name' => 'Matemáticas Básicas'],
                        ['id' => 2, 'name' => 'Física Aplicada'],
                        ['id' => 3, 'name' => 'Programación en Python']
                    ];
                    foreach ($courses as $course): ?>
                        <option value="<?= htmlspecialchars($course['id']) ?>"><?= htmlspecialchars($course['name']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="submit-btn">Inscribirse</button>
        </form>
    </div>

    <!-- Tabla -->
    <div class="table-container">
        <h2>Módulo de Curso</h2>
        <table>
            <tr>
                <th>Materia</th>
                <th>Módulo</th>
                <th>Año</th>
                <th>Curso</th>
                <th>Acciones</th>
            </tr>
            <?php
            $modules = [
                ['materia' => 'Matemáticas Básicas', 'modulo' => '1', 'año' => '2024', 'curso' => 'Introductorio'],
                ['materia' => 'Física Aplicada', 'modulo' => '2', 'año' => '2023', 'curso' => 'Avanzado']
            ];
            foreach ($modules as $module): ?>
                <tr>
                    <td><?= htmlspecialchars($module['materia']) ?></td>
                    <td><?= htmlspecialchars($module['modulo']) ?></td>
                    <td><?= htmlspecialchars($module['año']) ?></td>
                    <td><?= htmlspecialchars($module['curso']) ?></td>
                    <td>
                        <a href="edit.php">Editar</a> |
                        <a href="delete.php">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

</body>
</html>

    
    
    
    
    
    
    
    
 
          
        