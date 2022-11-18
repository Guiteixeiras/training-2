<?php

//questão 1

$valor1 = rand(1,10);
$valor2 = rand(10,30);
$valor3 = rand(5,40);
$valor4 = rand(1,30);

$soma = ("$valor1" + "$valor2" + "$valor3" + "$valor4");
$r = ("$soma" / 2);

//questão 2
$anos = array("Guilherme"=>"19", "Diego"=>"32", "Edney"=>"58");
echo "Guilherme " . $anos['Guilherme'] . " anos <br>";

//questão 3
print_r($r);

//questão 4 
$numero = rand(1,2);

switch ($numero) {
    case"1":
        print_r("<br>Verdadeiro");
        break;
        case"2":
            print_r("<br>Falso");
            break;
}

//questão 5
$A = rand(1,20);
$B = rand(1,20);

if ($A > $B) {
    $a = "<br>A maior que B";
} else {
        $a = "<br>A menor que B";
}
echo $a;

//questão 6

$nom = $_GET["nom"];
$ida = $_GET["ida"];

if ($ida >= 18) {
    $g = "voce e maior de idade";
} else {
    $g = "voce e menor de idade";
}
echo "<br>Seu nome é $nom e $g";

//questão 7 
$parcela = 10;
$porcentagem = 16;  
$produto = array("secador"=>"90", "moletom"=>"100", "celular"=>"900");
$pro = $produto[$_GET["pro"]];
$result = "$pro" * ("$porcentagem" / 100);
$ace = "$pro" - "$result";
$vf = "$ace" / "$parcela";
echo "<br> voce comprou um " . $_GET['pro'] . " pelo valor de R$ $pro,00 contudo com 16% de 
desconto fica R$ $ace,00 e parcelando 10 vezes fica R$ $vf,00";

//questão 8

$nota1 = rand(1,10);    
$nota2 = rand(1,10);
$notaf = ("$nota1" + "$nota2");
$media = ("$notaf" / 2);

if ($media <= 5) {
    $a = "esta reprovado";
} else {
    if ($media >= 6 && $media < 7) {
        $a = "esta de recuperação";
    } else {
        $a = "esta aprovado";
    }
}

echo "<br>sua primeira nota foi $nota1 ja a segunda foi $nota2 fazendo com que sua média fosse $media \n";
echo " e com esta media o aluno $a";


?>
