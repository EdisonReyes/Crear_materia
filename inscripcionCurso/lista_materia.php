<select id="materia" name="materia" required>
    <option value="">Seleccionar materia</option>
    <?php
    foreach ($materias as $materia): ?>
        <option value="<?= htmlspecialchars($materia['id']) ?>"><?= htmlspecialchars($materia['name']) ?></option>
    <?php endforeach; ?>
</select>

$materias = [
    ['id' => 1, 'name' => 'Matemáticas Básicas'],
    ['id' => 2, 'name' => 'Física Aplicada'],
    ['id' => 3, 'name' => 'Programación en Python'],
    ['id' => 4, 'name' => 'Introducción a la Filosofía'],
    ['id' => 5, 'name' => 'Química Orgánica'],
    ['id' => 6, 'name' => 'Historia del Arte'],
    ['id' => 7, 'name' => 'Economía y Finanzas'],
    ['id' => 8, 'name' => 'Desarrollo Web con HTML y CSS'],
    ['id' => 9, 'name' => 'Redes de Computadoras'],
    ['id' => 10, 'name' => 'Cálculo Diferencial e Integral'],
    ['id' => 11, 'name' => 'Ingeniería de Software'],
    ['id' => 12, 'name' => 'Análisis Estadístico'],
    ['id' => 13, 'name' => 'Biología Molecular'],
    ['id' => 14, 'name' => 'Psicología del Desarrollo'],
    ['id' => 15, 'name' => 'Derecho Constitucional'],
    ['id' => 16, 'name' => 'Marketing Digital'],
    ['id' => 17, 'name' => 'Inteligencia Artificial'],
    ['id' => 18, 'name' => 'Física Cuántica'],
    ['id' => 19, 'name' => 'Administración de Empresas'],
    ['id' => 20, 'name' => 'Ética Profesional'],
];
