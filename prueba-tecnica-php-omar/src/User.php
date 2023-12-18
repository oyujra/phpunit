<?php
namespace Omar\PruebaTecnicaPhpOmar;

class User
{
    // Atributos
    private $nombre;
    private $correoElectronico;
    private $contrasena;

    // Constructor
    public function __construct($nombre, $correoElectronico, $contrasena)
    {
        $this->nombre = $nombre;
        $this->correoElectronico = $correoElectronico;
        $this->contrasena = $contrasena;
    }

    // Métodos para acceder y modificar la información
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getCorreoElectronico()
    {
        return $this->correoElectronico;
    }

    public function setCorreoElectronico($correoElectronico)
    {
        $this->correoElectronico = $correoElectronico;
    }

    public function getContrasena()
    {
        return $this->contrasena;
    }

    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;
    }
}
/*
// Ejemplo de uso
$user = new User("John Doe", "john@example.com", "secretpassword");

// Acceder a la información
echo "Nombre: " . $user->getNombre() . "\n";
echo "Correo Electrónico: " . $user->getCorreoElectronico() . "\n";
echo "Contraseña: " . $user->getContrasena() . "\n";

// Modificar la información
$user->setNombre("Jane Doe");
$user->setCorreoElectronico("jane@example.com");
$user->setContrasena("newpassword");

// Verificar los cambios
echo "Nombre (modificado): " . $user->getNombre() . "\n";
echo "Correo Electrónico (modificado): " . $user->getCorreoElectronico() . "\n";
echo "Contraseña (modificada): " . $user->getContrasena() . "\n";*/
