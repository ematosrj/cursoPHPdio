<?php
//AULA SOBRE CONSTANTES PHP

//define("CONSTANT", "TIPOS DE VARIAVEIS EM PHP");
//echo CONSTANT;

//um entregador de delivery recebe 80 reais de pagamento por dia e tambem tem as gorgetas faça o código.
define("valorDia", "80");
define("gorgetas", "40");
echo valorDia + gorgetas;

//outro dia valor diminuiu

//define("gorgetas", "15");
echo valorDia + gorgetas;

//apareceu este erro Warning: Constant gorgetas already defined in C:\xampp\htdocs\Curso PHP DIO\constantes.php on line 14 ou seja a constante já foi declarada e não pode ser mudada.

?>