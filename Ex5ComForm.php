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


    <form method="get" action="Ex5ComForm.php">
        Operando1:
        <input class="txt" type="text" name="numero1"><br>

        Operando2:
        <input class="txt" type="text" name="numero2">

        <input class="btn" type="submit" />
    </form>


</body>

</html>

<?php

if (isset($_GET['numero1'])) {
    $campo1 = $_GET['numero1'];
    $campo2 = $_GET['numero2'];
    $soma = intval($campo1) + ($campo2);

    echo '<h1 style="color:blue; text-align:center;border: 2px solid black;">A soma é: ' . $soma . '</h1>';
} else {
    echo 'Sem valor';
}

?>