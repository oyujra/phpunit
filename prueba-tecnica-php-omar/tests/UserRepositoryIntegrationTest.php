// tests/UserRepositoryIntegrationTest.php
<?php

use PHPUnit\Framework\TestCase;
use Omar\PruebaTecnicaPhpOmar\UserRepository;
use Omar\PruebaTecnicaPhpOmar\Id;
use Omar\PruebaTecnicaPhpOmar\Exceptions\UserDoesNotExistException;

class UserRepositoryIntegrationTest extends TestCase
{
    private $userRepository;

    protected function setUp(): void
    {
        // Puedes inicializar el repositorio aquí o en el método de prueba específico
        $this->userRepository = new UserRepository();
    }

    public function testWhenUserIsNotFoundByIdErrorIsThrown(): void
    {
        $this->expectException(UserDoesNotExistException::class);

        // Usa un ID que sabes que no existe
        $nonExistentId = new Id();

        // Intenta obtener un usuario con el ID inexistente
        $this->userRepository->getByIdOrFail($nonExistentId);
    }

    // Puedes agregar más pruebas de integración aquí
}
