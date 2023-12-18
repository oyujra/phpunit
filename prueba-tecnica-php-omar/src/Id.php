<?php

namespace Omar\PruebaTecnicaPhpOmar;

class Id
{
    private $value;

    public function __construct($value = null)
    {
        // Si se proporciona un valor, podrías realizar validaciones aquí
        $this->value = $value ?? uniqid(); // Por ejemplo, genera un ID único si no se proporciona uno
    }

    public function getValue()
    {
        return $this->value;
    }
}
