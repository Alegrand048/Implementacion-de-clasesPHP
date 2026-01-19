<?php
require_once 'DatosPersonales.php';

class Profesor extends DatosPersonales {
    private $centroimparte;
    private $departamento;
    private $cursoescolar;

    public function __construct($nombrecompleto, $dni, $direccion, $fechanacimiento, $email, $telefono, $centroimparte, $departamento, $cursoescolar) {
        parent::__construct($nombrecompleto, $dni, $direccion, $fechanacimiento, $email, $telefono);
        $this->centroimparte = $centroimparte;
        $this->departamento = $departamento;
        $this->cursoescolar = $cursoescolar;
    }

    // Getters
    public function getCentroimparte() {
        return $this->centroimparte;
    }

    public function getDepartamento() {
        return $this->departamento;
    }

    public function getCursoescolar() {
        return $this->cursoescolar;
    }

    // Setters
    public function setCentroimparte($centroimparte) {
        $this->centroimparte = $centroimparte;
    }

    public function setDepartamento($departamento) {
        $this->departamento = $departamento;
    }

    public function setCursoescolar($cursoescolar) {
        $this->cursoescolar = $cursoescolar;
    }

    public function MostrarDatos() {
        echo '<table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; width: 600px; margin: 20px auto;">';
        echo '<thead><tr style="background-color: #2196F3; color: white;"><th colspan="2">DATOS PERSONALES DEL PROFESOR</th></tr></thead>';
        echo '<tbody>';
        echo '<tr><td><strong>Nombre Completo:</strong></td><td>' . htmlspecialchars($this->nombrecompleto) . '</td></tr>';
        echo '<tr><td><strong>DNI:</strong></td><td>' . htmlspecialchars($this->dni) . '</td></tr>';
        echo '<tr><td><strong>Dirección:</strong></td><td>' . htmlspecialchars($this->direccion) . '</td></tr>';
        echo '<tr><td><strong>Fecha de Nacimiento:</strong></td><td>' . htmlspecialchars($this->fechanacimiento) . '</td></tr>';
        echo '<tr><td><strong>Email:</strong></td><td>' . htmlspecialchars($this->email) . '</td></tr>';
        echo '<tr><td><strong>Teléfono:</strong></td><td>' . htmlspecialchars($this->telefono) . '</td></tr>';
        echo '<tr style="background-color: #e3f2fd;"><td><strong>Centro donde Imparte:</strong></td><td>' . htmlspecialchars($this->centroimparte) . '</td></tr>';
        echo '<tr style="background-color: #e3f2fd;"><td><strong>Departamento:</strong></td><td>' . htmlspecialchars($this->departamento) . '</td></tr>';
        echo '<tr style="background-color: #e3f2fd;"><td><strong>Curso Escolar:</strong></td><td>' . htmlspecialchars($this->cursoescolar) . '</td></tr>';
        echo '</tbody></table>';
    }
}
?>