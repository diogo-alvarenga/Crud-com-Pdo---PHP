<?php

include 'conexao.php';

$id = $_POST["txtId"];//id do aluno a ser atualizado
$novoNome = $_POST["novonome"];//novo nome do aluno
$novoEmail = $_POST["novoemail"];
$novaIdade = $_POST["novaidade"];



//query sql para atualizar o nome do aluno
$sql = "update aluno set nome = :nome, 
    email = :email,
    idade = :idade
    where id = :id";
$stmt = $pdo->prepare($sql);//prepara o query
$stmt -> execute([ //executa a query com os valores
    'nome' => $novoNome,
    'idade' => $novaIdade,
    'email' => $novoEmail,
    'id' => $id
]);

header("Location: consultar.php")

?>

