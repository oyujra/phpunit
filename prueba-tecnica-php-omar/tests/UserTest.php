<?php

use PHPUnit\Framework\TestCase;
use Omar\PruebaTecnicaPhpOmar\User;
use Omar\PruebaTecnicaPhpOmar\UserRepository;

class UserTest extends TestCase
{
    public function testCrearUsuario()
    {
        $user = new User("John Doe", "john@example.com", "secretpassword");

        $this->assertInstanceOf(User::class, $user);
        $this->assertEquals("John Doe", $user->getNombre());
        $this->assertEquals("john@example.com", $user->getCorreoElectronico());
        $this->assertEquals("secretpassword", $user->getContrasena());
    }

    public function testActualizarUsuario()
    {
        $user = new User("John Doe", "john@example.com", "secretpassword");

        $user->setNombre("John Doe Updated");
        $user->setCorreoElectronico("john.updated@example.com");
        $user->setContrasena("newpassword");

        $this->assertEquals("John Doe Updated", $user->getNombre());
        $this->assertEquals("john.updated@example.com", $user->getCorreoElectronico());
        $this->assertEquals("newpassword", $user->getContrasena());
    }

    public function testGuardarYObtenerUsuarios()
    {
        $userRepository = new UserRepository();

        $user1 = new User("John Doe", "john@example.com", "secretpassword");
        $user2 = new User("Jane Doe", "jane@example.com", "anotherpassword");

        $userRepository->saveUser($user1);
        $userRepository->saveUser($user2);

        $allUsers = $userRepository->getAllUsers();

        $this->assertCount(2, $allUsers);

        $this->assertEquals("John Doe", $allUsers[0]->getNombre());
        $this->assertEquals("john@example.com", $allUsers[0]->getCorreoElectronico());
        $this->assertEquals("secretpassword", $allUsers[0]->getContrasena());

        $this->assertEquals("Jane Doe", $allUsers[1]->getNombre());
        $this->assertEquals("jane@example.com", $allUsers[1]->getCorreoElectronico());
        $this->assertEquals("anotherpassword", $allUsers[1]->getContrasena());
    }

    public function testEliminarUsuario()
    {
        $userRepository = new UserRepository();

        $user = new User("John Doe", "john@example.com", "secretpassword");

        $userRepository->saveUser($user);

        $allUsersBeforeDeletion = $userRepository->getAllUsers();
        $this->assertCount(1, $allUsersBeforeDeletion);

        $userRepository->deleteUser($user);

        $allUsersAfterDeletion = $userRepository->getAllUsers();
        $this->assertCount(0, $allUsersAfterDeletion);
    }
}
