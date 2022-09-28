<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome=$_POST['nome'];
    $sobrenome=$_POST['sobrenome'];
    $idade=$_POST['idade'];

    $handle = fopen("dados.txt", "a");
    fwrite($handle, $nome."\n");
    fwrite($handle, $sobrenome."\n\n");
    fwrite($handle, $idade. "\n\n\n");
    fflush($handle);
    fclose($handle);

}

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
    <title>Cadastro</title>
    <style type="text/css">
        body{ font: 16px arial; text-align: center; background-color: blanchedalmond }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Cadastro de Usuarios</h1>
        <br>      
    </div>
    <p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group p-5">
                <label>Nome</label>
                <input type="text" name="nome" class="" value="">
                <span class="help-block"></span>
            </div>    
            <div class="form-group p-5">
                <label>Sobrenome</label>
                <input type="text" name="sobrenome" class="" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group p-5">
                <label>Idade</label>
                <input type="text" name="idade" class="" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Cadastrar">
            </div>
        </form>

        <br><br>

        <a href="telainicial.php" class="btn btn-danger">Voltar</a>
    </p>
</body>
</html>