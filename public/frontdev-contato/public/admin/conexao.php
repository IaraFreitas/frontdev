<?php 

$host = 'localhost'; //endereço do servidor local ou remoto
$dbname = 'db_frontdev'; //nome do banco de dados deste projeto que foi criado no mysql
$username = 'root'; //nome do usuário do banco de dados
$password = ''; //senha do usuário do banco de dados

try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {
    echo 'Erro de conexão:' . $e->getMessage();
}

?>