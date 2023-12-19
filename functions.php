<?php
function generatePassword($length)
{
    // caratteri per la password
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+{}|[]';

    // mischio i caratteri 
    $shuffleChar = str_shuffle($characters);

    // estraggo la sottostringa della lunghezza che vogliamo
    $password = substr($shuffleChar, 0, $length);

    return $password;
}
