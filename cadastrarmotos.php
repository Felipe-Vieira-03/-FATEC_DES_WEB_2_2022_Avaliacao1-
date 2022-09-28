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
        <meta charset="UTF-8">
        <title>Cadastro de motos</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <link rel="stylesheet" href="style.css">
        <style type="text/css">
            body{ font: 14px sans-serif; }
            .wrapper{ width: 350px; padding: 20px; }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <h2>Cadastro de motos</h2>
            <div class="form-group">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <label>Insira aqui o modelo da moto</label>
                    <input type="text" name="modelo" class="form-control">
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <label>Insira a quantidade de cilindradas da moto</label>
                    <input type="text" name="cilindradas" class="form-control">
                    <span class="help-block"></span>
                </div>

                <div class="form-group">
                    <label>Insira o fabricante da moto</label>
                    <input type="text" name="fabricante" class="form-control">
                    <span class="help-block"></span>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Efetuar cadastro da moto">
                </div>
                    <br>
                <a href="lermotos.php" class="btn btn-primary">Ler o arquivo com todos os cadastros</a>

            </form>
        </div> 

        <?php
        $filename = "Epilef_cadastrodemotos.txt";
        if(!file_exists($filename)){
            $handle = fopen($filename, "w");
        }else{
            $handle = fopen($filename, "a");
        }
            fwrite($handle, $_POST['modelo'].'<br>');
            fwrite($handle, $_POST['cilindradas'].'<br>');
            fwrite($handle, $_POST['fabricante'].'<br>');
            fflush($handle);
            fclose($handle);
        
        ?>
    </body>
</html> 