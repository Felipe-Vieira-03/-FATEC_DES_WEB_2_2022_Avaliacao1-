
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
    <title>Página para ler os arquivos adicionados no documento .txt</title>
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
        </b>Esses são os cadastros do arquivo: </h1>
    </div>
</body>
</html>

<?php

$arquivodetexto = 'Epilef_cadastrodemotos.txt';


$handle = fopen( $arquivodetexto, 'r' );


$leituradetxt = fread( $handle, filesize($arquivodetexto) );


echo $leituradetxt;

fclose($handle);
?>

<html>
    <br><br>
        <a href="PaginaInicial.php" class="btn btn-primary">Voltar para a pagina inicial</a>
       
       <a href="teladelogout.php" class="btn btn-danger">Sair da conta</a>
       </html>