<?php
function generatePassword($length)
{
    $password = "";

    // stringa caratteri per la password
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+{}|[]';

    // lista caratteri casiali max
    $maxRandNumb = strlen($characters) - 1;

    // ciclo while
    while (strlen($password) < $length) {
        $randNumber = rand(0, $maxRandNumb);
        $password .= $characters[$randNumber];
    }

    return htmlspecialchars($password);
}
