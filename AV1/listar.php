<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>Todos os Produtos</h1>
    <table>
       <tr>
       <th>ID</th>
       <th>Quantidade</th>
       <th>Valor</th>
       <th>Total</th>
       </tr>
    </table>

<?php

    $id= "";
    $quantidade= "";
    $valor= "";
    $total= "";

    $arqCarrinho = fopen("carrinho.txt", "r") or die("Erro ao abrir arquivo");

    $x = 1;
    $linha[] = fgets($arqCarrinho);

    while(!feof($arqCarrinho){

        $linha[] = fgets($arqCarrinho);
        $colunaDados = explode(";", $linha[$x]);
        $id = $colunaDados[0];
        $quantidade = $colunaDados[1];
        $valor = $colunaDados[2];
        $total = $quantidade * $valor;

        echo "<tr>";
        echo "<td>". $id . "</td>";
        echo "<td>". $quantidade . "</td>";
        echo "<td>". $valor . "</td>";
        echo "<td>". $total . "</td>";
        echo "<tr>";
        //criar um botao de excluir para cada produto
        $x++;
    }
    fclose($arqCarrinho);
?>
</body>

</html>
