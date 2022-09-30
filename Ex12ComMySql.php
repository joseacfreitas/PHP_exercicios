<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username,$password);

//$conn->query("CREATE DATABASE exemplo");

//$conn->query("CREATE TABLE exemplo.musicaLoucas(musica varchar(100) PRIMARY KEY, autor varchar(100) NOT NULL)");

$conn->query ("INSERT INTO exemplo.musicaLoucas(`musica`, `autor`) VALUES ('CABANA', 'JOSE');");



$conn->close();

?>