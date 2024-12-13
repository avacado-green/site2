<?php

class AuthController {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);
            $rememberMe = isset($_POST['remember_me']);

            // Логика проверки пользователя
            if ($this->authenticate($username, $password)) {
                $_SESSION['user'] = $username;
                if ($rememberMe) {
                    $token = bin2hex(random_bytes(32));
                    setcookie('remember_me', $token, time() + (86400 * 30), "/");
                    $this->storeToken($username, $token);
                }
                header("Location: /dashboard");
                exit();
            } else {
                echo "Invalid credentials";
            }
        } else {
            echo $twig->render('login.html.twig');
        }
    }

    private function authenticate($username, $password) {

        return true;
    }

    private function storeToken($username, $token) {
    }
}



