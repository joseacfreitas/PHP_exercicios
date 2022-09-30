<!DOCTYPE html>

<html lang="pt">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

</head>

<body>

    <p>Conteudo estatico</p>

    <?php

    $nome = 'Freitas';

    $musicas = array("exemplo11", "exemplo12", "exemplo21", "exemplo22");

    echo "<p> Ola " . $nome . " O valor é " . $musicas[1] . "</p><br>";

    $musicas[4] = "exemplo31";

    echo "<p>Ola " . $nome . " O valor é " . $musicas[4] . "</p><br>";

    foreach ($musicas as $value) {
        echo "$value <br><br>";
    }

    ?>

</body>

</html>