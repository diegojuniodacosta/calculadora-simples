<?php 

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <div style="text-align: center;">
        <h1>Calculadora Prática</h1>
        <form action="calcula.php" method="get">
        <input type="text" name="valor1" autofocus required> <br><br>
        <select name="operacao" required>
            <option value="">Escolha a operação</option>
            <option value="adicao">Adição</option>
            <option value="subtracao">Subtração</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="divisao">Divisão</option>
        </select> <br><br>
        <input type="text" name="valor2" required> <br><br>
        <input type="submit" value="Cálculo">
        <input type="reset" value="Limpar">
        </form>
    </div>
</body>
</html>