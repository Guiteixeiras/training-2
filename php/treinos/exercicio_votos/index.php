<?php

//ver nota do aluno

$nota1 = $_GET["nota1"];
$nota2 = $_GET["nota2"];

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

echo "sua primeira nota foi $nota1 ja a segunda foi $nota2 fazendo com que sua média fosse $media \n";
echo " e com esta media o aluno $a";


//ver se pode dirigr e votar

$idade = $_GET["idade"];

if ($idade <= 16) {
    $c = "não pode votar";
    $v = "não pode dirigir";
} else {
    if ($idade >= 16 && $media < 18) {
        $c = "pode votar caso queira";
        $v = "não pode dirigir";
    } else {
        $c = "é para votar";
        $v = "pode dirigir";
    }
}

echo "\n sua idade é de $idade anos e com esta idade você $c e também $v :)";
