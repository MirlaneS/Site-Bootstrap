<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "academia1";
$port = "3306";

try{
    $conn = new pdo("mysql:host=$host;port=$port;dbname" . $dbname, $user, $pass);
    
    echo "conexão com banco de dados realizado com sucesso!";

}catch(pdoexception $error){

    echo "error: conexão com o banco de dados não realizada" .$error;
}

