<?php

include __DIR__ . "/functions.php";

$result = "";
$error = false;

// con il ternario 
// $pwdLength = (isset($_GET["pwdLength"]) ? $_GET["pwdLength"] : false);

// operatore di covalescenza nulla
$pwdLength = $_GET["length"] ?? false;

// controlli SE
if ($pwdLength === false) {
    // SE non metto nessun valore
    $error = "Non hai specificato la lunghezza della password";
} elseif ($pwdLength == "") {
    //SE c'è una stringa vuota
    $error = "La lunghezza della password non può essere una stringa vuota";
} elseif (!is_numeric($pwdLength)) {
    // SE se metto un valore NON numerico
    $error = "la lunghezza della password deve essere un valore numerico";
} elseif ($pwdLength < 8 || $pwdLength > 255) {
    // SE è compreso tra 8 e 255
    $error = "La lunghezza della password deve essere compresa tra 8 e 255";
}

if (!$error) {
    // genera password
    $result = generatePassword($pwdLength);
}
