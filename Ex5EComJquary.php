<?php

if (isset($_POST['numero'])) {

    $campo1 = $_POST['numero'];

    $valorIncrementado=intval($campo1)+1;

    echo '<h1 style="color:blue; text-align:center;border: 2px solid black;"> O numero incrementado seria '.$valorIncrementado.'</h1>';

} else {

    echo 'Sem valor';
}
