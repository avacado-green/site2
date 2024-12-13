<?php

class Render {
    public static function renderExceptionPage($exception) {
        return "
            <!DOCTYPE html>
            <html lang='ru'>
            <head>
                <meta charset='UTF-8'>
                <title>Ошибка</title>
            </head>
            <body>
                <h1>Произошла ошибка</h1>
                <p>Сообщение: " . htmlspecialchars($exception->getMessage()) . "</p>
                <p>Код ошибки: " . htmlspecialchars($exception->getCode()) . "</p>
            </body>
            </html>
        ";
    }
}

try {
    $app = new Application();
    echo $app->run();
} catch (Exception $e) {
    echo Render::renderExceptionPage($e);
}
