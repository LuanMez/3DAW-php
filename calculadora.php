<?php
    $valor1 = 0;
    $valor2 = 0;
    $resultado = 0;
    $calculo = 'Adicao';

    if (isset($_GET["valor1"]) && isset($_GET["valor2"]) && isset($_GET["calculo"])) {
        $valor1 = $_GET["valor1"];
        $valor2 = $_GET["valor2"];
        $calculo = $_GET["calculo"];
            
        switch ($calculo) {
            case 'Adicao':
                 $resultado = $valor1 + $valor2;
                 break;

            case 'Subtracao':
                 $resultado = $valor1 - $valor2;
                break;

            case 'Multiplicacao':
                $resultado = $valor1 * $valor2;
                break;

            case 'Divisao':
                $resultado = $valor1 / $valor2;
            }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form method="get" action="">
        <input type="number" name="valor1">
        <input type="number" name="valor2"><br><br>
        <select name="calculo"> 
            <option value="Adicao">Adição</option>
            <option value="Subtracao">Subtração</option>
            <option value="Multiplicacao">Multiplicação</option>
            <option value="Divisao">Divisão</option>
        </select><br><br>
        <input type="submit" value="calcular"><br><br>
    </form>
    <p>O resultado é <?= $resultado ?></p>
</body>
</html>
