<!-- inclusione file main.php -->
<?php include __DIR__ . "/partials/main.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="text-white bg-dark">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center">
        <div class="m-5">
            <h1 class="text-warning">Strong Passord Generator</h1>
            <p>Generate a secure Password (wright length)</p>

            <div class="">
                <!-- form -->
                <form action="form.php">
                    <!-- row length -->
                    <div class="row">
                        <div class="col-6">
                            <span class="fs-3">Password length:</span>
                        </div>
                        <div class="col-6">
                            <div class="input-group">
                                <!-- il name serve per passare il nome del form -->
                                <input name="length" type="number" class="form-control" placeholder="Length..">
                                <button class="btn btn-outline-secondary" type="submit">></button>
                            </div>
                        </div>
                    </div>
                    <!-- row options -->
                    <div class="row my-3">
                        <div class="col-6">
                            <span class="">Chose if your password does have:</span>
                        </div>
                        <div class="col-6">
                            <div>
                                <input type="checkbox" name="numbers"> Include numbers
                            </div>
                            <div>
                                <input type="checkbox" name="letters"> Include letters
                            </div>
                            <div>
                                <input type="checkbox" name="symbols"> Include symbols
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <?php if ($pwdLength) { ?>
            <div class="card m-5 p-3">
                <!-- controllo SE l'errore è falso -->
                <?php if (!$error) { ?>
                    <p class="fs-3 text-primary">Your Password is:</p>
                    <p class="fs-5"><?php echo $result ?></p>
                <?php } else { ?>
                    <p class="fs-3 text-danger">ERROR:</p>
                    <p class="fs-5"><?php echo $error ?></p>
                <?php } ?>
                <a href="form.php">Retry</a>

            </div>
        <?php } ?>

    </div>
</body>

<!-- script bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha385-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>