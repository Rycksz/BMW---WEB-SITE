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
    
</header>
<!-- 
     <div class="content">
            <div class="textbox">
                <h2>ESCOLHA SUA BMW</h2>
            </div> -->

       <div class="card">
        <div>
            <h1>BMW i8</h1>
            <h2>elétrico</h2>
            <span>R$ 100.000</span>
            <button> COMPRAR </button>
        </div>

        <div class="card2">
        <div>
            <h1>BMW iX3</h1>
            <h2>elétrico</h2>
            <span>R$ 200.000</span>
            <button> COMPRAR </button>
        </div>

        <div class="card3">
        <div>
            <h1>BMW X5</h1>
            <h2>elétrico</h2>
            <span>R$ 300.000</span>
            <button> COMPRAR </button>
        </div>

        <div class="imgbox">
                <img src="img/bmw01.png"  class="bmw01">
            </div>

            <div class="img2">
                <img src="img/bmw2.png"  class="bmw02">
            </div>

            <div class="img3">
                <img src="img/bmw3.png"  class="bmw03">
            </div>
       </div>  
       
      

           
</body>
</html>