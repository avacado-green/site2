<?php

if (isset($_GET['name']) && isset($_GET['birthday'])) {
    $name = htmlspecialchars($_GET['name']);
    $birthday = htmlspecialchars($_GET['birthday']);

    // Реализуйте логику сохранения пользователя в хранилище (например, в базе данных)
    // Для примера сохраним данные в текстовый файл

    file_put_contents('users.txt', "Name: $name, Birthday: $birthday" . PHP_EOL, FILE_APPEND);

    echo "User saved: $name, $birthday";
} else {
    echo "Invalid request. Missing 'name' or 'birthday' parameter.";
}
