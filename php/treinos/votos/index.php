<?php

$idade = $_GET["idade"];

if ($idade>=18) {
    $a = "pode votar";
    $b = "pode dirigir";
}else {
    $a = "não pode votar";
    $b = "não pode dirigir";
}

echo "com esta idade você $a e também $b :)";
