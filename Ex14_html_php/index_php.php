<?php

$campo1 = $_GET['music'];
$campo2 = $_GET['autor'];

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

$blogs =$conn->query("INSERT INTO exemplo2.Musicas(musica, autor) VALUES ('$campo1', '$campo2');")

?>