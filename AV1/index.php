<!DOCTYPE html>
<html>
<head>
    <title>Lista de Produtos</title>
</head>
<body>
    <h1>Lista de Produtos</h1>
    <form action="adicionarAoCarrinho.php" method="POST">
        <table>
            <thead>
                <tr>
                   <th>ID</th>
                   <th>Nome do Produto</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Cadeira</td>
                    <td><input type="number" id="quantidade" name="quantidade" value="0" min="1" max="100"></td>
                    <td>R$ 100.00</td>
                    <td><a href="carrinho.php">
                        Comprar
                    </a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Mesa</td>
                    <td><input type="number" id="quantidade" name="quantidade" value="0" min="1" max="100"></td>
                    <td>R$ 200.00</td>
                    <td><a href="carrinho.php">
                        Comprar
                    </a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Sofa</td>
                    <td><input type="number" id="quantidade" name="quantidade" value="0" min="1" max="100"></td>
                    <td>R$ 300.00</td>
                    <td><a href="carrinho.php">
                        Comprar
                    </a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Guarda-Roupa</td>
                    <td><input type="number" id="quantidade" name="quantidade" value="0" min="1" max="100"></td>
                    <td>R$ 500.00</td>
                    <td><a href="carrinho.php">
                        Comprar
                    </a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Espelho</td>
                    <td><input type="number" id="quantidade" name="quantidade" value="0" min="1" max="100"></td>
                    <td>R$ 50.00</td>
                    <td><a href="carrinho.php">
                        Comprar
                    </a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>janela</td>
                    <td><input type="number" id="quantidade" name="quantidade" value="0" min="1" max="100"></td>
                    <td>R$ 75.00</td>
                    <td><a href="carrinho.php">
                        Comprar
                    </a></td>
                </tr>
            </tbody>
         </table>
       </form>
    </body>
   </html>
