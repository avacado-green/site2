<?php
function validateRequestData($data) {
    if (preg_match('/<[^<]+?>/', $data)) {
        throw new Exception("Неверные данные: обнаружены HTML-теги.");
    }


    return true;
}
