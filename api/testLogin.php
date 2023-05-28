<?php

    session_start();


//print_r($_REQUEST);
if(isset($_POST['entrar']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
    //ACESSA
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // print_r('email: ' . $email); 
    // print_r('senha: ' . $senha);

     $sql = "SELECT * FROM acesso_login WHERE email = '$email' and senha = '$senha'";
      
     $result = $conexao->query($sql);
    //  print_r($sql);
    //  print_r($result);

     if(mysqli_num_rows($result) < 1)
     {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header("Location: login.php");
     }
     else
     {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header("Location: conta_usuario.php");
     }
     
}


else
{
    //nao acessa
    header('Location:login.php');
    exit;
}

?>
