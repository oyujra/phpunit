<?php
namespace Omar\PruebaTecnicaPhpOmar;
use Omar\PruebaTecnicaPhpOmar\User;
use Omar\PruebaTecnicaPhpOmar\Exceptions\UserDoesNotExistException;

class UserRepository
{
    // Almacenamiento de usuarios (ejemplo: array)
    private $users = [];

    // Método para guardar un usuario en el repositorio
    public function saveUser(User $user)
    {
        // Aquí podrías implementar la lógica para almacenar el usuario en tu sistema (base de datos, archivo, etc.)
        // En este ejemplo, se guarda en un array en memoria.
        $this->users[] = $user;
    }

    // Método para actualizar un usuario en el repositorio
    public function updateUser(User $user)
    {
        // Implementa la lógica para actualizar el usuario en tu sistema (base de datos, archivo, etc.)
        // En este ejemplo, se busca el usuario por su correo electrónico y se actualiza.
        foreach ($this->users as $key => $existingUser) {
            if ($existingUser->getCorreoElectronico() === $user->getCorreoElectronico()) {
                $this->users[$key] = $user;
                break;
            }
        }
    }

    // Método para eliminar un usuario del repositorio
    public function deleteUser(User $user)
    {
        // Implementa la lógica para eliminar el usuario en tu sistema (base de datos, archivo, etc.)
        // En este ejemplo, se busca el usuario por su correo electrónico y se elimina.
        foreach ($this->users as $key => $existingUser) {
            if ($existingUser->getCorreoElectronico() === $user->getCorreoElectronico()) {
                unset($this->users[$key]);
                break;
            }
        }
    }

    // Método para obtener todos los usuarios del repositorio
    public function getAllUsers()
    {
        return $this->users;
    }
    public function getByIdOrFail(Id $id)
    {
        // Implementa la lógica para obtener un usuario por ID
        // Si el usuario no existe, lanza una excepción

        // Este es solo un ejemplo básico, debes adaptarlo según tu implementación real
        throw new UserDoesNotExistException("User with ID {$id->getValue()} not found");
    }
}
/*
// Ejemplo de uso
$userRepository = new UserRepository();

// Crear usuarios
$user1 = new User("John Doe", "john@example.com", "secretpassword");
$user2 = new User("Jane Doe", "jane@example.com", "anotherpassword");

// Guardar usuarios
$userRepository->saveUser($user1);
$userRepository->saveUser($user2);

// Obtener todos los usuarios
$allUsers = $userRepository->getAllUsers();
foreach ($allUsers as $user) {
    echo "Nombre: " . $user->getNombre() . ", Correo Electrónico: " . $user->getCorreoElectronico() . "\n";
}

// Actualizar un usuario
$userToUpdate = new User("John Doe Updated", "john@example.com", "newpassword");
$userRepository->updateUser($userToUpdate);

// Obtener todos los usuarios después de la actualización
$updatedUsers = $userRepository->getAllUsers();
foreach ($updatedUsers as $user) {
    echo "Nombre: " . $user->getNombre() . ", Correo Electrónico: " . $user->getCorreoElectronico() . "\n";
}

// Eliminar un usuario
$userToDelete = new User("Jane Doe", "jane@example.com", "anotherpassword");
$userRepository->deleteUser($userToDelete);

// Obtener todos los usuarios después de la eliminación
$remainingUsers = $userRepository->getAllUsers();
foreach ($remainingUsers as $user) {
    echo "Nombre: " . $user->getNombre() . ", Correo Electrónico: " . $user->getCorreoElectronico() . "\n";
}
*/