<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Dio PHP</title>
</head>
<body>
    <?php 
    
    $string = "Curso na DIO";
    $numeros = 50;
    $array = array("php","css","java")

    ?>
    <h4>Tipos de Variaveis DIO
<?php 

echo $string;

?>


    </h4>

    <h4>ESSA É UMA VARIAVEL DO TIPO NUMEROS/INTEREGER
PARA IMPLEMENTAR ESSA VARIAVEL <br><br> UTILIZAMOS SOMENTE OS NUMEROS DESTA FORMA :

<?php 

echo $numeros;

?>
    </h4>

    <h4>ESSA É UMA VARIAVEL COM UM ARRAY , PARA IMPLEMENTAR UM ARRAY EM UMA VARIAVEL <br><br>UTILIZAMOS DESTA FORMA.</h4>
=>

<?php

print_r($array);

?>
</body>
</html>