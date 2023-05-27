
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style-home.css" rel="stylesheet">
    <script type="text/javascript" src="./index.js" defer></script>
    <link rel="icon" href="img/logo1.png">
   
    <title>BMW - WEB SITE</title>
</head>
<body>
    <section class="sec">
        <header>
            <a href="#"><img src="img/logo1.png" class="logo"></a>
            <ul>
                <li><a href="#">Início</a></li>
                <li><a href="#">Comprar</a></li>
                <li><a href="#">Ofertas</a></li>
                <li><a href="login.php">Entrar</a></li>
                <li><a href="formulario.php">Cadastra-se</a></li>   
            </ul>


            <div class="mobile-menu-icon">
                <button onclick="menuShow()"><img class="icon" src="img/menu.png"></button>
              </div>


            <div class="mobile-menu">
                <ul>
                    <li><a href="#">Início</a></li>
                    <li><a href="#">Comprar</a></li>
                    <li><a href="#">Ofertas</a></li>
                    <li><a href="login.php">Entrar</a></li>
                    <li><a href="formulario.php">Cadastra-se</a></li>
                </ul>
            </div>

        </header>
        <div class="content">
            <div class="textbox">
                <h2>O PURO PRAZER<br><span> DIRIGIR 100% elétrico.</h2>
                    <p> BMW ELÉTRICOS</p>
                    <a href="#"> SAIBA MAIS</a>
            </div>
            <div class="imgbox">
                <img src="img/bmw01.png"  class="bmw01"> 
            </div>
        </div>
        <ul class="thumb">
            <li><img src="img/bmw01.png" onclick="imgSlider('img/bmw01.png');changeBgColor('#4682B4')"></li>
            <li><img src="img/bmw2.png" onclick="imgSlider('img/bmw2.png');changeBgColor('#363636')"></li>
            <li><img src="img/bmw3.png" onclick="imgSlider('img/bmw3.png');changeBgColor('#A9A9A9');"></li>   
        </ul>
    </section>
    
</body>
</html>