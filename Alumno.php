<?php
require_once 'DatosPersonales.php';

class Alumno extends DatosPersonales {
    private $estudiosmatriculado;
    private $añocurso;
    private $centro;

    public function __construct($nombrecompleto, $dni, $direccion, $fechanacimiento, $email, $telefono, $estudiosmatriculado, $añocurso, $centro) {
        parent::__construct($nombrecompleto, $dni, $direccion, $fechanacimiento, $email, $telefono);
        $this->estudiosmatriculado = $estudiosmatriculado;
        $this->añocurso = $añocurso;
        $this->centro = $centro;
    }

    public function getEstudiosmatriculado() {
        return $this->estudiosmatriculado;
    }

    public function setEstudiosmatriculado($estudiosmatriculado) {
        $this->estudiosmatriculado = $estudiosmatriculado;
    }

    public function getAñocurso() {
        return $this->añocurso;
    }

    public function setAñocurso($añocurso) {
        $this->añocurso = $añocurso;
    }

    public function getCentro() {
        return $this->centro;
    }

    public function setCentro($centro) {
        $this->centro = $centro;
    }

    public function MostrarDatos() {
        echo '<table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; width: 600px; margin: 20px auto;">';
        echo '<thead><tr style="background-color: #4CAF50; color: white;"><th colspan="2">DATOS PERSONALES DEL ALUMNO</th></tr></thead>';
        echo '<tbody>';
        echo '<tr><td><strong>Nombre Completo:</strong></td><td>' . htmlspecialchars($this->nombrecompleto) . '</td></tr>';
        echo '<tr><td><strong>DNI:</strong></td><td>' . htmlspecialchars($this->dni) . '</td></tr>';
        echo '<tr><td><strong>Dirección:</strong></td><td>' . htmlspecialchars($this->direccion) . '</td></tr>';
        echo '<tr><td><strong>Fecha de Nacimiento:</strong></td><td>' . htmlspecialchars($this->fechanacimiento) . '</td></tr>';
        echo '<tr><td><strong>Email:</strong></td><td>' . htmlspecialchars($this->email) . '</td></tr>';
        echo '<tr><td><strong>Teléfono:</strong></td><td>' . htmlspecialchars($this->telefono) . '</td></tr>';
        echo '<tr style="background-color: #e8f5e9;"><td><strong>Estudios Matriculado:</strong></td><td>' . htmlspecialchars($this->estudiosmatriculado) . '</td></tr>';
        echo '<tr style="background-color: #e8f5e9;"><td><strong>Año del Curso:</strong></td><td>' . htmlspecialchars($this->añocurso) . '</td></tr>';
        echo '<tr style="background-color: #e8f5e9;"><td><strong>Centro:</strong></td><td>' . htmlspecialchars($this->centro) . '</td></tr>';
        echo '</tbody></table>';
    }
}
?>