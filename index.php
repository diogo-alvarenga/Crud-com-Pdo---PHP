<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
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
            <form action="cadastrar.php" method="post">

            <h2>Criar Cadastro</h2>

            <label for="nome">Nome: </label>
            <input type="text" name ="nome" required >
            <br>

            <label for="email">Email: </label>
            <input type="text" name="email" required max-Lenght="100">

            <br>
            <label for="idade">Idade:</label>

            <input type="number" name="idade" required min="0" step="1">

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