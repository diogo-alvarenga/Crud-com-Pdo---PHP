<?php
    include 'conexao.php';

    $sql = "SELECT * FROM aluno";

    $stmt = $pdo ->query($sql);
    $alunos = $stmt -> fetchAll();



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="menu">

<div class="opc">
    <a href="index.php">Criar Cadastro</a>

    <a href="consultar.php">Consultar Cadastros</a>
</div>

</div>

<div class="container">
        <div class="box">
    <table >
    <div ><tr><th>ID</th> <th>NOME</th> <th>E-MAIL</th> <th>IDADE</th colspan="2"></tr></div>

    <?php     
        foreach($alunos as $aluno){
        echo "<tr>";
        echo "<td> {$aluno['id']} </td> "; 
        echo "<td> {$aluno['nome']} </td>";
        echo "<td> {$aluno['email']} </td>";
        echo "<td> {$aluno['idade']} </td>";
        echo "<td> <a class='botaolink' href='telaAtualizar.php?i={$aluno['id']}'> Editar </a></td>";
        echo "<td> <a class='botaolink' href='excluir.php?i={$aluno['id']}' onclick=\"return confirm('Deseja realmente excluir?')\"> Excluir </a> </td>";
        echo"<tr>";
    } ?> 

    </table>


    
</div>
</div>
</body>
</html>