<!DOCTYPE html>
<html>

<head>
    <style>
        table,
        tr {
            width: 99vw;
            font-size: 20px;
            padding: 15px;
            color: black;
            border: 5px solid black;
            font-weight: bold;
            background-image: linear-gradient(red, white);
        }

        td {
            border: 5px solid black;
            width: 180vw;
            text-align: center;
            padding: 5px;
            font-weight: bold;
        }

        h1 {
            font-size: 50px;
            text-align: center;
            background-image: linear-gradient(red, white);
        }
    </style>
</head>

<body style='background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,2));'>
    <h1><i>Tabuada</i></h1>
    <?php
    echo "<br><br>";
    echo "<center><table>";
    for ($x = 1; $x <= 10; $x++) {
        echo "<tr>";
        for ($y = 1; $y <= 10; $y++) {
            echo "<td>" . $y . " X " . $x . " = " . $x * $y . "</td>";
        }
        echo "</tr>";
    }
    echo "</table></center>";
    ?>
</body>

</html>