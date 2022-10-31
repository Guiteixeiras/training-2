<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrição</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
  
    <?php
    $nome = $_GET["nome"];
    $sobrenome = $_GET["sobrenome"];
    $ano = $_GET["ano"];
    $sexo = $_GET["sexo"];
    
    $idade = date("Y") - $ano;
    
    echo "$nome é do sexo $sexo e tem $idade anos"
    
    ?>
</body>

</html>