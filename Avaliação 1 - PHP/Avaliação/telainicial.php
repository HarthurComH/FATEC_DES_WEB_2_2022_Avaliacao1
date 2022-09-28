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
    <title>Welcome</title>
    <style type="text/css">
        body{ font: 25px arial; text-align: center; background-color: blanchedalmond }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Olá, <b><?php echo htmlspecialchars($_SESSION["username"]); ?>
        <br>
        </b>Bem-vindo</h1>
        O que deseja fazer? </h1>
    </div>
    <p>

        <a href="cadastrar.php" class="btn btn-primary">Cadastrar Pessoas</a>
        <br><br>

        <a href="mostrardados.php" class="btn btn-danger">Mostrar usuarios cadastrados</a>
        <br><br>

        <a href="index.php" class="btn btn-danger">Sair</a>
        
    </p>
</body>
</html>