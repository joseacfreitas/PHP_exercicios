<!DOCTYPE html>

<html lang="pt">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

</head>

<body>

    <a href="Ex5iVariaveisDeSeccao.php?reset">Volata a 0 </a>

    <a href="Ex5iVariaveisDeSeccao.php">Incrementa </a>

    <a href="Ex5iVariaveisDeSeccao.php?diminui">Decrementa </a>

    <?php

    if (isset($_GET['reset'])) {

        session_start();
        if (isset($_SESSION['numero'])) {
            session_unset();
        }
    } else {

        session_start();
        if (isset($_SESSION['numero'])) {

            if (isset($_GET['diminui']))

                $_SESSION['numero'] = $_SESSION['numero'] - 1;

            else

                $_SESSION['numero'] = $_SESSION['numero'] + 1;
        } else {

            $_SESSION['numero'] = 0;
        }
        echo '<h1>' . $_SESSION['numero'] . '</h1>';
    }

    ?>

</body>

</html>