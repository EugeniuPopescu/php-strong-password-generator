<?php
function generatePassword($length, $characters)
{
    $password = "";

    // lista caratteri casiali max
    $maxRandNumb = strlen($characters) - 1;

    // ciclo while
    while (strlen($password) < $length) {
        $randNumber = rand(0, $maxRandNumb);
        $password .= $characters[$randNumber];
    }

    return htmlspecialchars($password);
}
