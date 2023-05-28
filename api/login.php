
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sessão</title>
    <link href="style-login.css" rel="stylesheet">
    <script type="text/javascript" src="" defer></script>
    <link rel="icon" href="img/logo1.png">
   
</head>
<body>
        <a href="home.php"><img src="img/logo1.png" class="logo"></a>
        
        <div class="container">
            <h2>Entrar</h2>
           
            <form action="testLogin.php" method="POST">
                <div class="input-field">
                    <input type="email" name="email" placeholder="email" required>
                    <label for="nome">Email:</label>
                </div>
    
                <div class="input-field">
                    <input type="password" name="senha" placeholder="senha" required>
                    <label for="senha">Senha:</label>
                </div>
    
                <div class="center">
                <input type="submit" name="entrar" value="entrar">
                </div>
                
            </form>
            <div class="link">
                <a href=""><p>Esqueceu a sua senha ?</p></a>
                <a href="formulario.php"><p>Cadastra-se Aqui!</p></a>
            </div>
        </div>
    </body>

    </html>