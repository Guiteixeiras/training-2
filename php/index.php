<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!--esse codigo so fundiona pelo shell-->

<body>

    <input type="number" name="valor1">

    <input type="number" name="valor2">

    <?php

    echo "Calculadora<br>";

    $valor1 = readline('Digite o primeiro numero: ');
    echo "\n";

    $valor2 = readline('Digite o segundo numero: ');
    echo "\n";

    $soma = ("$valor1" + "$valor2");
    $div = ("$valor1" / "$valor2");
    $mult = ("$valor1" * "$valor2");
    $sub = ("$valor1" - "$valor2");

    echo "Sua soma da $soma \n";
    echo "Sua divisão da $div \n";
    echo "Sua multiplicação da $mult \n";
    echo "Sua subtração da $sub \n";

    function writemsg() {
        echo 'DEU CERTOO';
    }

    writemsg();

    ?>
</body>

</html>