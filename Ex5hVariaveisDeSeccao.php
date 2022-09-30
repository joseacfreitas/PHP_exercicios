<!DOCTYPE html>

<html lang="pt">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

</head>

<body>

    <?php

    session_start();

    if (isset($_SESSION['numero'])) {

        $_SESSION['numero'] = $_SESSION['numero'] + 1;

    } else {
        
        $_SESSION['numero'] = 1;
    }

    echo '<h1>' . $_SESSION['numero'] . '</h1>';


    ?>

</body>

</html>