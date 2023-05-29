<?php
session_start();
// print_r($_SESSION);

if((!isset($_SESSION['email'])== true) and (!isset ($_SESSION['senha'])==true) )
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location:login.php');

}
$logado = $_SESSION['email'];

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style-sistema.css" rel="stylesheet">
    <script type="text/javascript" src="./index.js" defer></script>
    <title>BMW - SUA CONTA</title>
</head>
<body>

    <section class="sec">
        <header>
            <a href="#"><img src="img/logo1.png" class="logo"></a>
            <ul>
                <li><a href="home.php">Início</a></li>
                <li><a href="#">Comprar</a></li>
                <li><a href="#">Ofertas</a></li>
                <li><a href="#">carrinho</a></li>
                <li><a href="login.php">Sair</a></li>   
            </ul>


            <div class="mobile-menu-icon">
                <button onclick="menuShow()"><img class="icon" src="img/menu.png"></button>
              </div>


            <div class="mobile-menu">
                <ul>
                    <li><a href="#">Início</a></li>
                    <li><a href="#">Comprar</a></li>
                    <li><a href="#">Ofertas</a></li>
                    <li><a href="#">carrinho</a></li>
                    <li><a href="sair.php">Sair</a></li>
                </ul>
            </div>

            <?php
 
             echo "<h6>Bem Vindo <u>$logado</u></h6>";


            ?>
</body>
</html>