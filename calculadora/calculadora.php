<?php

if (isset($_POST['calcular'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacao = $_POST['operacao'];

    if (empty($num1) || empty($num2)) {
        echo "Preencha todos os campos.";
        exit;
    }

    switch ($operacao) {
        case '+':
            $resultado = $num1 + $num2;
            break;
        case '-':
            $resultado = $num1 - $num2;
            break;
        case '*':
            $resultado = $num1 * $num2;
            break;
        case '/':
             if ($num2 == 0) {
                 echo "Erro: Divisão por zero.";
                exit;
            }
            $resultado = $num1 / $num2;
            break;
            default:
            echo "Operação inválida.";
            exit;
    }

    echo "Resultado: $resultado";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Simples</title>
</head>
<body>
    <h1>Calculadora Simples</h1>
    <form method="post">
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1" required><br><br>

        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2" required><br><br>

        <label for="operacao">Operação:</label>
        <select id="operacao" name="operacao" required>
            <option value="+">Soma</option>
            <option value="-">Subtração</option>
            <option value="*">Multiplicação</option>
            <option value="/">Divisão</option>
    </select><br><br>
    
    <Input type="submit" name="calcular" value="Calcular">
    </form>
</body>
</html>