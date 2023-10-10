<!DOCTYPE html>
<html>
<head>
    <title>Lista de Produtos</title>
</head>
<body>
    <h1>Lista de Produtos</h1>
    <form action="carrinho.php" method="POST">
        <table>
            <thead>
                <tr>
                   <th>ID</th>
                   <th>Nome do Produto</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                    <td>1</td>
                    <td>Cadeira</td>
                    <td><input type="number" name="quantidade[1]" value="0" min="0" max="100"></td>
                    <td>R$ 100.00</td>
                    <td>
                        <input type="submit" name="comprar[1]" value="Comprar">
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Mesa</td>
                    <td><input type="number" name="quantidade[2]" value="0" min="0" max="100"></td>
                    <td>R$ 200.00</td>
                    <td>
                        <input type="submit" name="comprar[2]" value="Comprar">
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Sofa</td>
                    <td><input type="number" name="quantidade[3]" value="0" min="0" max="100"></td>
                    <td>R$ 300.00</td>
                    <td>
                        <input type="submit" name="comprar[3]" value="Comprar">
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Guarda-Roupa</td>
                    <td><input type="number" name="quantidade[4]" value="0" min="0" max="100"></td>
                    <td>R$ 500.00</td>
                    <td>
                        <input type="submit" name="comprar[4]" value="Comprar">
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Espelho</td>
                    <td><input type="number" name="quantidade[5]" value="0" min="0" max="100"></td>
                    <td>R$ 50.00</td>
                    <td>
                        <input type="submit" name="comprar[5]" value="Comprar">
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>janela</td>
                    <td><input type="number" name="quantidade[6]" value="0" min="0" max="100"></td>
                    <td>R$ 75.00</td>
                    <td>
                        <input type="submit" name="comprar[6]" value="Comprar">
                    </td>
                </tr>
            </tbody>
         </table>
       </form>
        <form action="listar.php" method="GET">
            <input type="submit" value="Listar Produtos">
        </form>
    </body>
   </html>
