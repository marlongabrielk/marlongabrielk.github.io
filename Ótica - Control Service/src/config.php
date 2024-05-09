<?php
include('../database/database.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prazo = $_POST['prazo'];
    $vendedor = $_POST['vendedor'];
    $armacao = $_POST['armacao'];
    $lente = $_POST['lente'];
    $observacoes = $_POST['observacoes'];
    $sql = "INSERT INTO tabela_dados (prazo, vendedor, armacao, lente, observacoes) VALUES ('$prazo', '$vendedor', '$armacao', '$lente', '$observacoes')";

    if ($conn->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir os dados: " . $conn->error;
    }
}
?>
