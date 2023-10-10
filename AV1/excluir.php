<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_excluir'])) {
    $id_excluir = $_POST['id_excluir'];

    $arqCarrinho = fopen("carrinho.txt", "r") or die("Erro ao abrir arquivo");
    $arqCarrinhoNovo = fopen("carrinhoNovo.txt", "w") or die("Erro ao abrir arquivo");

    while (!feof($arqCarrinho)) {
        $linha = fgets($arqCarrinho);
        $colunaDados = explode(";", $linha);
        $id = trim($colunaDados[0]);

        if ($id != $id_excluir) {
            fwrite($arqCarrinhoNovo, $linha);
        }
    }

    fclose($arqCarrinho);
    fclose($arqCarrinhoNovo);

    // Remova o arquivo antigo e renomeie o novo arquivo para o nome original
    unlink("carrinho.txt");
    rename("carrinhoNovo.txt", "carrinho.txt");

    echo "Produto excluído com sucesso.";
} else {
    echo "Nenhum produto foi excluído.";
}
?>
<br>
<a href="listar.php">Voltar para a lista de produtos</a>
