<!DOCTYPE html>
<html>
<head>
    <title>Lista de Produtos no Carrinho</title>
</head>
<body>
    <h1>Todos os Produtos no Carrinho</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Quantidade</th>
            <th>Valor</th>
            <th>Total</th>
        </tr>

        <?php
        $arqCarrinho = fopen("carrinho.txt", "r") or die("Erro ao abrir arquivo");
        
        while (!feof($arqCarrinho)) {
            $linha = fgets($arqCarrinho);
            $colunaDados = explode(";", $linha);

            if (count($colunaDados) >= 3) {
                $id = $colunaDados[0];
                $quantidade = $colunaDados[1];
                $valor = $colunaDados[2];
                $total = $quantidade * $valor;

                echo "<tr>";
                echo "<td>" . $id . "</td>";
                echo "<td>" . $quantidade . "</td>";
                echo "<td>" . $valor . "</td>";
                echo "<td>" . $total . "</td>";
                echo "<td>";
                
                echo "<form action='excluir.php' method='POST'>";
                echo "<input type='hidden' name='id_excluir' value='$id'>";
                echo "<input type='submit' value='Excluir'>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
        }

        fclose($arqCarrinho);
        ?>
    </table>
    <br>
    <a href="index.php">Voltar para o menu</a>
</body>
</html>
