<!-- inclusione file main.php -->
<?php include __DIR__ . "/partials/main.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password</title>

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="text-white bg-dark">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="card m-5 p-3">

            <!-- controllo SE l'errore è falso -->
            <?php if (!$error) { ?>
                <p class="fs-2 text-primary">Your Password is:</p>
                <p class="fs-4"><?php echo $result ?></p>
            <?php } else { ?>
                <p class="fs-2 text-danger">ERROR:</p>
                <p class="fs-4"><?php echo $error ?></p>
            <?php } ?>
            <a href="form.php">Go to form</a>

        </div>
    </div>
</body>
<!-- script bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>