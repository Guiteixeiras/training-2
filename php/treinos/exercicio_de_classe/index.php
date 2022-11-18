<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Teste_classe</title>
</head>
<body>
    <pre>
<?php
 /*   require_once 'Lampada.php';
$l1 = new Lampada;
 

$l1->cor = "branca";
$l1->modelo = "Fluorecente";
$l1->interrupitor = true;


//mostra os objetos dentro de l1
//print_r($l1);

//$l1->mudar_cor();
$l1->modelo = "led";
print_r($l1);
*/ 


require_once 'Lampada.php';

$c1 = new Caneta ();
$c1->setModelo("Fabercastell"); 
$c1->setPonta(0.7);
print_r($c1);
?>    
</pre>
</body>
</html>