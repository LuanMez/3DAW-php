<?php
$cpf = $_POST["cpf"];
$novaSala = $_POST["novaSala"];

$servidor = "localhost";
$username = "root";
$senha = "";
$database = "concurso";
$conn = new mysqli($servidor, $username, $senha, $database);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$comandoSQL = "UPDATE candidatos SET sala_prova = '$novaSala' WHERE cpf = '$cpf'";
$resultado = $conn->query($comandoSQL);

if ($resultado === TRUE) {
    echo "Sala de prova atualizada com sucesso!";
} else {
    echo "Erro ao atualizar sala de prova: " . $conn->error;
}

$conn->close();
?>