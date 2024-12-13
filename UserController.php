<?php

class UserController {
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = htmlspecialchars($_POST['name']);
            $birthday = htmlspecialchars($_POST['birthday']);
            // Логика создания пользователя
            echo "User created: $name, $birthday";
        } else {
            echo $twig->render('create_user.html.twig');
        }
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = intval($_POST['id']);
            $name = htmlspecialchars($_POST['name']);
            // Логика обновления пользователя
            echo "User with ID $id has been updated with new name: $name";
        } else {
            // Получение текущих данных пользователя
            $user = $this->getUserById($_GET['id']);
            echo $twig->render('update_user.html.twig', ['user' => $user]);
        }
    }

    public function delete() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = intval($_POST['id']);
            // Логика удаления пользователя
            echo "User with ID $id has been deleted.";
        } else {
            echo $twig->render('delete_user.html.twig');
        }
    }

    private function getUserById($id) {
        // Логика получения данных пользователя по ID
        return ['id' => $id, 'name' => 'Иван'];
    }
}



