<?php

include 'conexao.php';

$sql1 = "select from aluno id where nome";//

$id = $_GET["i"]; //id do aluno a ser excluido
 
//query sql para deletar um aluno pelo id
$sql = "Delete from aluno where id = :id"; 

$stmt = $pdo ->prepare($sql);//prepara a query
$stmt -> execute(['id' => $id]); //executa a query processando a id

header("Location: consultar.php")

?>

