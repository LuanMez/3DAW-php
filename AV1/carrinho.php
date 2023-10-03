</head>
<body>
<?php
            $id = $_POST['id'];
            $quantidade = $_POST['quantidade'];
            $valor = $_POST['valor'];

            $texto = $id. ";" .
            $quantidade .  ";" . $valor . ";";

            // Se o arquivo não existir...
            if(!file_exists("carrinho.txt") {
            // ... criar um arquivo com o cabeçalho
                $arqCarrinho = fopen("carrinho.txt", "w");
                $cabecalho = "id: valor: quantidade:";
                fwrite($arqCarrinho;$cabecalho);
                fwrite($arqCarrinho;$texto);
            } else {
                $arqAluno = fopen("carrinho.txt", "a");
              fwrite($arqCarrinho, $texto);
            }
            fclose($arqCarrinho);
            echo "Deu tudo certo";
            }
?>
 <a href="index.php">
                Voltar para o menu
            </a>
</body>
</html>
