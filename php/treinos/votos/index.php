<?php

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

/*
$idade = $_GET["idade"];

if ($idade>=18) {
    $a = "pode votar";
    $b = "pode dirigir";
}else {
    $a = "não pode votar";
    $b = "não pode dirigir";
}

echo "com esta idade você $a e também $b :)";
*/
