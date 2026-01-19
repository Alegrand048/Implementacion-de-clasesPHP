<?php

class DatosPersonales {
    protected $nombrecompleto;
    protected $dni;
    protected $direccion;
    protected $fechanacimiento;
    protected $email;
    protected $telefono;

    public function __construct($nombrecompleto, $dni, $direccion, $fechanacimiento, $email, $telefono) {
        $this->nombrecompleto = $nombrecompleto;
        $this->dni = $dni;
        $this->direccion = $direccion;
        $this->fechanacimiento = $fechanacimiento;
        $this->email = $email;
        $this->telefono = $telefono;
    }

    public function getNombrecompleto() {
        return $this->nombrecompleto;
    }

    public function setNombrecompleto($nombrecompleto) {
        $this->nombrecompleto = $nombrecompleto;
    }

    public function getDni() {
        return $this->dni;
    }

    public function setDni($dni) {
        $this->dni = $dni;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function getFechanacimiento() {
        return $this->fechanacimiento;
    }

    public function setFechanacimiento($fechanacimiento) {
        $this->fechanacimiento = $fechanacimiento;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }
}
?>