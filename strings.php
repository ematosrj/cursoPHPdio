<?php 

//Uma "string" em PHP é um tipo de dado que representa uma sequência de caracteres. Uma string pode conter letras, números, símbolos e espaços. É usado para armazenar e manipular texto em um programa PHP. As strings em PHP podem ser definidas usando aspas simples (') ou aspas duplas (").

//echo "curso tipos de variaveis em php"; //primeira string

//$string = "curso de php"; //essa variavel declara uma string
//echo "$string";

$valorDia = "80";
$gorgetas = "15";
$soma = $valorDia + $gorgetas;

echo "$soma";

$texto = "<h1>Texto h1</h1>"; //quando se adiciona um html a string abre pelo localhost para observar o resultado.
echo $texto;

//quebra de linha
//$mensagem = "Olá, \"Mundo\"!"; // Inclusão de aspas duplas dentro da string
//$novaLinha = "Primeira linha\nSegunda linha"; // Quebra de linha
//$tabulacao = "Texto antes\tTexto depois"; // Tabulação

//outros tipos de strings
//$nomeCompleto = $nome . " " . $sobrenome; // Concatenação de strings
//$tamanho = strlen($nomeCompleto); // Obtém o comprimento da string
//$maiusculas = strtoupper($nomeCompleto); // Converte para maiúsculas
//$minusculas = strtolower($nomeCompleto); // Converte para minúsculas
//$substituir = str_replace("João", "Maria", $nomeCompleto); // Substitui parte da string


?>