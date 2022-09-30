<!DOCTYPE html>

<html lang="pt">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <style>
        input {
            position: relative;
            top: 20vw;
            left: 22%;
            border: 2px solid black;
            padding: 10px; 
           
        }

        h1 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 32%;
            border: 2px solid black;
            padding: 10px; 
        }

        a {
            position: relative;
            top: 10vw;
            left: 44%;
            font-size: 30px;
            color: black;
        }

        #contener{

            background-color: red;
        }

    </style>

    <script>
        function actualizavalor() 
        {

            let numero1 = document.getElementById("i1").value;

            let numero2 = document.getElementById("i2").value;

            document.getElementById("h1").href = "Ex5cComForm.php?numero1=" + numero1+ " & numero2=" +numero2 ;
        }
    </script>

</head>

<body style='background-color: NavajoWhite'>


    <a id="h1" href="Ex5cComForm.php">Clique aqui</a>

    <input id="i1" type="text" onkeyup="actualizavalor()"></input>

    <input id="i2" type="text" onkeyup="actualizavalor()"></input>

    <p id="p1"></p>

    <?php
    if (isset($_GET['numero1'])) {
        $campo1 = $_GET['numero1'];
        $campo2 = $_GET['numero2'];
        $soma = intval($campo1) + ($campo2);
        $mult = intval($campo1) * ($campo2);
        $divis = intval($campo1) / ($campo2);
        $subt = intval($campo1) - ($campo2);

        echo '<h1 style="color:blue; text-align:center;border: 2px solid black;background-color: SandyBrown;">
        A soma é: ' . $soma . '<br>
        A multiplicaçao é: ' . $mult . '<br>
        A Divisao é: ' . $divis . '<br>
        A Subtraçao é: ' . $subt . '<br>
        </h1>';
        
    }

    ?>

</body>

</html>