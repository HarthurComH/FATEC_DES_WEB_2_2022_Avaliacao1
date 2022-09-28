<?php

$handle = fopen("dados.txt", "r");
while (!feof($handle)) {
        $line = fgets($handle);
        echo $line ."<br>";
    }
fclose($handle);

?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <style type="text/css">
        body{ font: 20px arial; text-align: center; background-color: blanchedalmond }
    </style>
</head>
<body>
<p>

<a href="cadastrar.php" class="btn btn-primary">Cadastrar Pessoas</a>
<br><br>

<a href="index.php" class="btn btn-danger">Sair</a>
        
</p>

</body>
</html>    