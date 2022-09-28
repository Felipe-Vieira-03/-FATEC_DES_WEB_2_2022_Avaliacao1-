<?php

session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <center>
    <meta charset="UTF-8">
    <title>Seja Bem vindo ao nosso site</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
    
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Olá, <b><?php echo htmlspecialchars($_SESSION["username"]); ?>
        <br>
        </b>Nossa site consiste em um cadastro de motos para donos de estacionamentos</h1>
        <h2>Por favor, escolha a ação que quer efetuar em nosso site</h2>
    </div>
    <p>
        <a href="cadastrarmotos.php" class="btn btn-primary">Cadastrar uma moto</a>
       
        <a href="teladelogout.php" class="btn btn-danger">Efetuar o Logout da conta</a>
    </p>
    </center>
</body>
</html>