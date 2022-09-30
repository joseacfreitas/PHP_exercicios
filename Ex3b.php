<DOCTYPE html>

    <html>

    <body style='background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1));;  '>

        <div style='display:table;'>

            <?php

            "<style='display:table;'>";

            echo "<h1> Tabuadas</h1>";

            for ($x_0 = 1; $x_0 <= 10; $x_0++) {

                for ($x_1 = 0; $x_1 <= 10; $x_1++) {

                    echo
                    "
                <table 
                style='border: 4px solid blue; width:180px;
                font-size:22px;
                padding: 5px;
                color:black;
                font-weight: bold;
                padding-left: 37px;
                background-image: linear-gradient(red, yellow);'>
            
                <tr 
                style='border:1px solid black;'>
                <td>" . $x_0 . " x " . $x_1 . " = " . $resul = $x_0 * $x_1 . "
                </td>
                </tr>

                </table>
                ";
                }
                echo "<br>";
            }

            ?>
        </div>

    </body>

    </html>