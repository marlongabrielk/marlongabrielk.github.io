<?php
// Inclui o arquivo de configuração do banco de dados
include('../database/database.php');

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $prazo = $_POST['prazo'];
    $vendedor = $_POST['vendedor'];
    $armacao = $_POST['armacao'];
    $lente = $_POST['lente'];
    $observacoes = $_POST['observacoes'];

    // Prepara e executa a consulta SQL para inserir os dados no banco de dados
    $sql = "INSERT INTO tabela_dados (prazo, vendedor, armacao, lente, observacoes) VALUES ('$prazo', '$vendedor', '$armacao', '$lente', '$observacoes')";

    if ($conn->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir os dados: " . $conn->error;
    }
}
?>
