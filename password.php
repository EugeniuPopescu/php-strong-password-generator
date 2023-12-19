<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password</title>

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<?php
$char = $_GET["length"] ?? "vuoto";
?>

<?php
function generatePassword($length)
{
    // caratteri per la password
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+{}|[]';

    // mischio i caratteri 
    $shuffled_characters = str_shuffle($characters);

    // estraggo la sottostringa della lunghezza che vogliamo
    $password = substr($shuffled_characters, 0, $length);

    return $password;
}
?>

<body class="text-white bg-dark">
    <div class="container">
        <?php
        $passwGenerated = generatePassword($char);
        echo "<p>$passwGenerated</p>";
        ?>
    </div>
</body>

<!-- script bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>