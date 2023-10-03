  <?php
    $id= "";
    $quantidade= "";
    $valor= "";
    $arqCarrinho = fopen("carrinho.txt", "r") or die("Erro ao abrir arquivo");
    $arqDisc = fopen("carrinhoNovo.txt", "w") or die("Erro ao abrir arquivo");
    $x = 0;
    $linha[] = fgets($arqAluno);

     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $procurar = $_POST["procurar"]

        while(!feof($arqCarrinho){

        $linha[] = fgets($arqCarrinho);
        $colunaDados = explode(";", $linha[$x]);
        $id = $colunaDados[0];

        if()

        $quantidade = $colunaDados[1];
        $valor = $colunaDados[2];

        $texto = $id ";" .
        $quantidade  ";" . $valor ";";
          fwrite($arqCarrinho, $texto);
          fclose($arqCarrinho);
  ?>
