<?php




    include 'conexao.php'; //Inclui a conexao com o banco

    //Dados do aluno a serem inseridos
    $nome = $_POST['nome'];

    $email = $_POST['email'];

    $idade = $_POST['idade'];
    //Query SQL para insercao dos dados
    $sql = "INSERT INTO aluno(nome, email, idade) VALUES (:nome, :email, :idade)";

    $stmt = $pdo -> prepare($sql);//Prepara a query para execuçao para receber os 
    //valores dinamicos(que serao informados no placeholder)


    // -> usar algo dentro do objeto
    $stmt -> execute([ //subistitui os paceholders pelos valores reais
        'nome' => $nome,
        'email' => $email,
        'idade' => $idade
    ]);

    header("Location: consultar.php")



?>

