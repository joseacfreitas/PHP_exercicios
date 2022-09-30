<?php

include_once 'Ex5_PHP.php';

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/style.css" rel="stylesheet">

    <style>
        form {
            position: relative;
            border: 2px solid black;
            padding: 10px;
        }

        .txt {
            position: relative;
            align-items: center;
            font-size: 18px;
            background-color: black;
            color: white;
        }

        .btn {
            position: relative;
            top: -1vw;
            left: 15%;
            color: white;
            padding: 10px;
            background-color: black;
            border-radius: 50px;
        }
    </style>

</head>

<body style='background-color: lightgray;'>

    <form method="post" action="">

        Operando1:
        <input class="txt" type="number" name="numero1"><br>

        Operando2:
        <input class="txt" type="number" name="numero2">

        <input class="btn" type="submit" />
    </form>

</body>

</html>