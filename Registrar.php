<?php
require_once 'Alumno.php';
require_once 'Profesor.php';

$error = '';
$persona = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $tipo = $_POST['tipo'] ?? '';

        if (empty($_POST['nombrecompleto']) || empty($_POST['dni']) || empty($_POST['direccion']) || empty($_POST['fechanacimiento']) || empty($_POST['email']) || empty($_POST['telefono'])) {
            throw new Exception("Completa todos los campos comunes");
        }

        if ($tipo === 'alumno') {
            if (empty($_POST['estudiosmatriculado']) || empty($_POST['añocurso']) || empty($_POST['centro'])) {
                throw new Exception("Completa los campos del alumno");
            }
            $persona = new Alumno($_POST['nombrecompleto'], $_POST['dni'], $_POST['direccion'], $_POST['fechanacimiento'], $_POST['email'], $_POST['telefono'], $_POST['estudiosmatriculado'], $_POST['añocurso'], $_POST['centro']);
        } elseif ($tipo === 'profesor') {
            if (empty($_POST['centroimparte']) || empty($_POST['departamento']) || empty($_POST['cursoescolar'])) {
                throw new Exception("Completa los campos del profesor");
            }
            $persona = new Profesor($_POST['nombrecompleto'], $_POST['dni'], $_POST['direccion'], $_POST['fechanacimiento'], $_POST['email'], $_POST['telefono'], $_POST['centroimparte'], $_POST['departamento'], $_POST['cursoescolar']);
        } else {
            throw new Exception("Selecciona alumno o profesor");
        }
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="Registrar.css">
</head>
<body>
    <div class="container">
        <h1>Registro</h1>

        <?php if ($error): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>

        <?php if (!$persona): ?>
            <form method="POST">
                <h3>Datos Comunes</h3>
                <input type="text" name="nombrecompleto" placeholder="Nombre Completo" required>
                <input type="text" name="dni" placeholder="DNI" required>
                <input type="text" name="direccion" placeholder="Dirección" required>
                <input type="date" name="fechanacimiento" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="tel" name="telefono" placeholder="Teléfono" required>

                <select name="tipo" required>
                    <option value="">Selecciona tipo</option>
                    <option value="alumno">Alumno</option>
                    <option value="profesor">Profesor</option>
                </select>

                <div class="campos">
                    <h3>Datos del Alumno</h3>
                    <input type="text" name="estudiosmatriculado" placeholder="Estudios Matriculado">
                    <input type="text" name="añocurso" placeholder="Año del Curso">
                    <input type="text" name="centro" placeholder="Centro">
                </div>

                <div class="campos">
                    <h3>Datos del Profesor</h3>
                    <input type="text" name="centroimparte" placeholder="Centro donde Imparte">
                    <input type="text" name="departamento" placeholder="Departamento">
                    <input type="text" name="cursoescolar" placeholder="Curso Escolar">
                </div>

                <button type="submit">Registrar</button>
            </form>
        <?php else: ?>
            <?php $persona->MostrarDatos(); ?>
            <br><a href="Registrar.php"><button>Registrar otro</button></a>
        <?php endif; ?>
    </div>
</body>
</html>