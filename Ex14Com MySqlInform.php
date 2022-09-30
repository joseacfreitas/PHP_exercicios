<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ex14Com MySqlInform</title>

</head>

<body>

    <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        Musica: <input type="text" name="music">
        autor; <input type="text" name="autor">
        <input type="submit">

    </form>

</body>

</html>

<?php

$campo1 = $_GET['music'];
$campo2 = $_GET['autor'];

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

$blogs =$conn->query("INSERT INTO exemplo2.Musicas(musica, autor) VALUES ('$campo1', '$campo2');")

?>