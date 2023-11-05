<?php


echo "Calculadora Prática \n";

$valor1 = $_GET['valor1'];

$valor2 = $_GET['valor2'];

$operacao = $_GET['operacao'];

switch ($operacao) {
    case 'adicao':
        $total = $valor1 + $valor2;
        break;
    case 'subtracao':
        $total = $valor1 - $valor2;
        break;
    case 'multiplicacao':
        $total = $valor1 * $valor2;
        break;
    case 'divisao':
        $total = $valor1 / $valor2;
        break;
    default:
        echo " Operação não identificada \n";
        break;
}

echo "O total é : $total";
