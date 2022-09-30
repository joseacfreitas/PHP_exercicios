<?php

if (isset($_POST['numero1'])) {
    $campo1 = $_POST['numero1'];
    $campo2 = $_POST['numero2'];
    $soma = intval($campo1) + ($campo2);

    echo '<h1 style="color:blue; text-align:center;border: 2px solid black;">A soma é: ' . $soma . '</h1>';
}

header( "refresh:3;url=Ex5_HTML.php" );

?>