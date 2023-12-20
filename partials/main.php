<?php

include __DIR__ . "/functions.php";

$result = "";
$error = false;

// con il ternario 
// $pwdLength = (isset($_GET["pwdLength"]) ? $_GET["pwdLength"] : false);

// operatore di covalescenza nulla
$pwdLength = $_GET["length"] ?? false;
$checkNumbers = $_GET["numbers"] ?? false;
$checkLetters = $_GET["letters"] ?? false;
$checkSymbols = $_GET["symbols"] ?? false;

// stringa caratteri per la password
$characters = "";

if ($checkNumbers) {
    $characters .= "0123456789";
}

if ($checkLetters) {
    $characters .= "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
}

if ($checkSymbols) {
    $characters .= "!@#$%^&*()_+{}|[]{}~<>";
}

// controllo SE è selzionata almeno una check box
if (!$checkNumbers && !$checkLetters && !$checkSymbols) {
    $error = "Seleziona almeno una check box";
}

// controlli SE si veriifcano errori nello scrivere la lunghezza
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
    $result = generatePassword($pwdLength, $characters);
}
