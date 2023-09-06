<!DOCTYPE html>
<html>
<head>
    <title>Leitor de Arquivos</title>
</head>
<body>
    <h3>Conteúdo do arquivo:</h3>
    <?php
        $arquivo = "texto.txt";
        $ler = fopen($arquivo, "r");

        while (!feof($ler)) {
            $valor = fgets($ler);
            echo "<h3>$valor</h3>";
        }

        fclose($ler);
    ?>
</body>
</html>