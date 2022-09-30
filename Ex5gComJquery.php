<?php



if (isset($_POST['operando1']) && isset($_POST['operando2'])) {

    echo $_POST['operando1'];

    if (($_POST['operando1'] == '') || ($_POST['operando2'] == ''))

        echo  'valores invalidos';

    else {

        $resultado = $_POST['operando1'] +  $_POST['operando2'];

        echo '<h1>A soma é: ' . $resultado . '</h1>';
    }
}
