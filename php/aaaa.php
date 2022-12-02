<?php

//somador
$numero1 = 10;
$numero2 = 20;
$resultado = ($numero1 + $numero2);

if ($numero1 + $numero2) {
   echo "o resultado é :$resultado <br>";
}

//ver hora 
$hora = 15;

if ($hora <= 12) {
   echo "o horario é do periodo da manhã";
} else {
   echo "o horario é do periodo da tarde  <br><br>";
};


//carro
$nome = "Guilherme";
$tipo = "Tesla Model S";
$preço = 669836.10;
$cor = "branco";

echo "O cliente $nome<br> comprou nesta quinta-feira um $tipo<br> da cor $cor<br> do valor de $preço reais a vista <br><br>";


//variavel
$l1 = 15;
$l1 += 20;
$aaa = 1;
$AAA = 6;

echo "aa deu $AAA <br>";
EcHo "aa deu $aaa <br>";
ECHO "o valor é $l1";

//teste

$b1 = <<<HTML
<b style="background-color: red;"><br>alegria</b>
<p style="color: purple;">$nome</p>\n
HTML;

echo $b1;
echo "\n";


$pessoas = [

   ['nome' => 'george',
    'idade' => '18',
   ],

   ['nome' => 'natalie',
    'idade' => '25',
   ],
];

echo "resultado 1 =>\n";
echo "{$pessoas[0]['nome']} - {$pessoas[0]['idade']}\n\n";  

echo "<br>resultado 2 =>\n";
echo "{$pessoas[1]['nome']} - {$pessoas[1]['idade']}\n\n";