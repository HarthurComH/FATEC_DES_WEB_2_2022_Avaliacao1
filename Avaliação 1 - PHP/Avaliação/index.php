<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    if($_POST['username'] == 'fatec' and $_POST['password'] == 'araras'){
        $_SESSION['loggedin'] = TRUE;
        $_SESSION["username"] = 'Usuário(a)';
         header("location: telainicial.php");
    } else {
        $_SESSION['loggedin'] = FALSE;
    }
}

?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style type="text/css">
        body{ font: 16px arial; background-color: blanchedalmond }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Insira os dados para login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Usuario</label>
                <input type="text" name="username" class="form-control" value="fatec">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="password" class="form-control" value="araras">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Entrar">
            </div>
        </form>
    </div>    
</body>
</html>


