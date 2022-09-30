<!DOCTYPE html>

<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>3 Numeros</title>

    <style>
        body {

            background-color: NavajoWhite;
        }

        .box {
            position: absolute;
            width: 40vw;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: 2px solid black;
            text-align: center;
            padding: 20px;
            background-color: SandyBrown;
            font-weight: bold;
        }

        .btn {
            padding: 10px;
            width: 10vw;
            background-color: black;
            color: white;
            border-radius: 7px;
            font-size: 20px;
        }

        .box1 {
            position: absolute;
            width: 60vw;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: 2px solid black;
            text-align: center;
            padding: 15px;
            background-color: DarkGoldenrod;
            font-weight: bold;
            font-size: 30px;
        }

        .box2 {
            position: relative;
            width: 60vw;
            border: 2px solid black;
            text-align: center;
            padding: 20px;
            background-color: DarkGoldenrod;
            font-weight: bold;
            font-size: 30px;
            color: white;
        }

        .res {
            position: relative;
            top: 6rem;
            left: 33rem;
            width: 25vw;
            border: 2px solid black;
            text-align: center;
            padding: 15px;
            font-size: 30px;
            background-color: Goldenrod;
        }

        .res1 {
            padding: 15px;
            font-weight: bold;
        }

        .inp1 {
            width: 15vw;
            padding: 15px;
            background-color: black;
            color: white;
            border-radius: 7px;
            font-size: 20px;
        }

        .inp {
            width: 10vw;
            font-size: 20px;
        }

        legend {
            font-size: 28px;
        }
    </style>

</head>

<body>

    <fieldset class="box">

        <legend>Vamos ordenar 3 numeros?</legend>
        <p id="btn"><button class="btn">IR</button> </p>

    </fieldset>

    <fieldset class="box1" hidden>

        <legend>Insira Tres numeros:</legend><br>

        <fieldset class="box2">

            <legend>Só numeros entre 0 e 255</legend>

            <form method="POST">

                <input type="text" name="n1" class="inp" placeholder="1º Numero">
                <input type="text" name="n2" class="inp" placeholder="2º Numero">
                <input type="text" name="n3" class="inp" placeholder="3º Numero">

                <p id="btn1" class="btn1"><input class="inp1" type="submit"> </p>

            </form>

        </fieldset>

    </fieldset>

    <div class="res">

        <legend class="res1">Numeros Ordenados</legend>

        <?php

        if ($_POST) {
            $n1 = $_POST["n1"];
            $n2 = $_POST["n2"];
            $n3 = $_POST["n3"];


            if (($n1 >= $n2) and ($n1 >= $n3))
                $maior = $n1;

            elseif (($n2 >= $n1) and ($n2 >= $n3))
                $maior = $n2;

            else
                $maior = $n3;


            if (($n1 <= $n2) and ($n1 <= $n3))
                $memor = $n1;

            elseif (($n2 <= $n1) and ($n2 <= $n3))
                $menor = $n2;

            else
                $menor = $n3;

            $meio = ($n1 + $n2 + $n3) - ($maior + $menor);

            echo $menor . ' - ' . $meio . ' - ' . $maior;

            echo '<body style="background-color: rgb(' . $n1 . ',' . $n2 . ',' . $n3 . ');"></body>';
        }

        ?>
        
    </div>

    <script>
        $(document).ready(function() {

            $(".btn").click(function() {

                $(".box").fadeOut(2000)
                $(".box1").fadeIn(2000)
            });

            $("#btn1").click(function() {

                $(".box1").hide()
            });

        });
    </script>

</body>

</html>