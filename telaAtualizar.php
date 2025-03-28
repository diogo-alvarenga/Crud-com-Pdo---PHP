<?php 
    include 'conexao.php';
    $id = $_GET["i"];

    $sql = "Select * from aluno where id= :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id",$id,PDO::PARAM_INT);//so entra int
    $stmt->execute();

    $aluno = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
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
            <div class="cor">
            <form action="atualizar.php" method="post">
                <h2>Atualizar Cadastro</h2>

            <input type="hidden" name="txtId" value="<?php echo($aluno['id']); ?>">
            <label for="nome">Nome: </label>
            <input type="text" name ="novonome" required value="<?php echo($aluno['nome']); ?>">
            <br>

            <label for="email">Email: </label>
            <input type="text" name="novoemail" required max-Lenght="100" value="<?php echo($aluno['email']); ?>">

            <br>
            <label for="idade">Idade:</label>

            <input type="number" name="novaidade" required min="0" step="1" value="<?php echo($aluno['idade']); ?>">

            <br>
            <br>

            <div>
                <input type="submit" value="Enviar">
                <Button type="reset">Limpar dados</Button>
            </div>

            </form>
            </div>
        </div>
    </div>

</body>
</html>
