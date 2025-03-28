<?php

$host = 'localhost'; // Endereço do servidor MYSQL
$dbname = 'escola'; // Nome do banco de dados
$user = 'root'; // Usuario do banco
$pass = ''; //Senha do banco (PADRAO VAZIA DO XAMPP)

try{
    //Criando a conexão PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass,[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //Ativa o modo de erros do PDO
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC //Define o padrão de retorno como array associativo
    ]);

}catch(PDOExeption $e){
    //em caso de erro, exibe a mensagem e encerra o script
    die("Erro de conexão: ". $e->getMessage());
}

?>