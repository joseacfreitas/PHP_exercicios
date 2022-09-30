<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("falhou: " . $conn->connect_error . "<br/>");
}

echo "Sucesso<br>";

$sql = "CREATE DATABASE exemplo2";

if ($conn->query($sql) === TRUE) {
    echo "Sucesso em criar a base de dados<br/>";
} 
else
{
    echo "Falha ao criar a base de dados<br/>";
}

$sql = "CREATE TABlE exemplo2.Musicas(
    musica varchar(100) PRIMARY KEY, 
    autor varchar(100) NOT NULL
    )";
if ($conn->query($sql) === TRUE) {
    echo "Sucesso em criar uma tabela<br/>";
} 
else 
{
    echo "Falha ao criar uma tabela<br/>" . $conn->error;
}

$sql = "INSERT INTO exemplo2.Musicas(`musica`, `autor`) VALUES ('macaco gosta de banana', 'José Cid')";

if ($conn->query($sql) === TRUE) {
    echo "Sucesso em inserir registo.<br/>";
} 
else 
{
    echo "Falha ao inserir registo<br/>" . $sql . "<br>" . $conn->error;
}

echo "<br> RESULTADO DO SELECT:<br>";

$sql = "SELECT musica , autor FROM exemplo2.Musicas";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        
        echo "musica: " . $row["musica"] ."<br>  autor: " . $row["autor"] . "<br>";
    }
} 
else 
{
    echo "nada<br>";
}

$conn->close();
