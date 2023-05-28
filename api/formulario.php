<?php

//     if(isset ($_POST['cadastrar']))
//    {
// //       print_r($_POST['nome']);
// //       print_r($_POST['email']);
// //       print_r($_POST['senha']);


// include_once('config.php');

//  $nome = $_POST['nome'];
//  $email = $_POST['email'];
//  $senha = $_POST['senha'];

//  $result = mysqli_query($conexao, "INSERT INTO acesso_login(nome, email, senha) VALUES('$nome', '$email', '$senha')");

// }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se o formulário foi enviado

    // Dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Validação dos campos (você pode adicionar mais validações conforme necessário)

    if (empty($nome) || empty($email) || empty($senha)) {
        // Campos obrigatórios não preenchidos
        $mensagem = 'Por favor, preencha todos os campos obrigatórios.';
    } else {
        // Conexão com o banco de dados
        $host = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = "login";

        // Criando a conexão
        $conexao = mysqli_connect($host, $db_user, $db_pass, $db_name);

        // Verificando se ocorreu algum erro na conexão
        if ($conexao->connect_error) {
            die('Erro na conexão com o banco de dados: ' . $conexao->connect_error);
        }

        // Inserir os dados no banco de dados
        $sql = "INSERT INTO acesso_login (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        if ($conexao->query($sql) === TRUE) {
            // Registro criado com sucesso
            $mensagem = 'Conta criada com sucesso!';
            // Redirecionar para a tela de login
            header('Location: /php/login.php');
            exit;
        } else {
            // Erro ao criar a conta
            $mensagem = 'Erro ao criar a conta: ' . $conexao->error;
        }

        // Fechar a conexão com o banco de dados
        $conexao->close();
    }
}
 
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastra-se</title>
    <link href="style3-criarconta.css" rel="stylesheet">
    <script type="text/javascript" src="" defer></script>
    <link rel="icon" href="img/logo1.png">
   
</head>
<body>
        <a href="home.php"><img src="img/logo1.png" class="logo"></a>
        
        <div class="container">
            <h2>Crie uma conta</h2>
           
            <form action="formulario.php" method="POST">

                <div class="input-field">
                    <input type="text" name="nome" placeholder="Digite seu nome" required>
                    <label for="nome">Nome:</label>
                </div>

                <div class="input-field">
                    <input type="email" name="email" placeholder="Informe seu Email" required>
                    <label for="nome">Email:</label>
                </div>
    
                <div class="input-field">
                    <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
                    <label for="senha">Senha:</label>
                </div>

                <div class="center">
                <input type="submit" name="cadastrar" value="cadastrar">
                </div>
            </form>
        </div>
    </body>

    </html>