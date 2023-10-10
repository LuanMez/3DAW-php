<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $quantidades = $_POST['quantidade'];
    
    // Se o arquivo não existir...
    if (!file_exists("carrinho.txt")) {
        // ... criar um arquivo com o cabeçalho
        $arqCarrinho = fopen("carrinho.txt", "w");
        $cabecalho = "id: quantidade: valor:\n";
        fwrite($arqCarrinho, $cabecalho);
    } else {
        $arqCarrinho = fopen("carrinho.txt", "a");
    }

    foreach ($quantidades as $id => $quantidade) {
        if ($quantidade > 0) {
            $valor = 0;

            // Defina o preço com base no ID do produto
            switch ($id) {
                case 1:
                    $valor = 100.00;
                    break;
                case 2:
                    $valor = 200.00;
                    break;
                case 3:
                    $valor = 300.00;
                    break;
                case 4:
                    $valor = 500.00;
                    break;
                case 5:
                    $valor = 50.00;
                    break;
                case 6:
                    $valor = 75.00;
                    break;
            }

            $texto = $id . ";" . $quantidade . ";" . $valor . ";\n";
            fwrite($arqCarrinho, $texto);
        }
    }

    fclose($arqCarrinho);
    echo "Produto(s) adicionado(s) ao carrinho com sucesso.";
} else {
    echo "Nenhum produto foi adicionado ao carrinho.";
}
?>
<br>
<a href="index.php">Voltar para o menu</a>
