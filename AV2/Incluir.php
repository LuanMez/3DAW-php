<?php
$servidor = "localhost";
$user = "root";
$pass = "";
$banco = "concurso";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli($servidor, $user, $pass, $banco);

    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $salaProva = $_POST["salaProva"];

    $sql = "INSERT INTO fiscais (nome, cpf, sala_prova) VALUES ('$nome', '$cpf', '$salaProva')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Fiscal inserido com sucesso!";
    } else {
        echo "Erro ao inserir fiscal: " . $conn->error;
    }
}
?>