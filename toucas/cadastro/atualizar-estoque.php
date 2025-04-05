<?php
header('Content-Type: application/json');

// Conexão com o banco de dados
$connection = new mysqli('localhost', 'root', '', 'agitacao_toucas');

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Verificar se os dados foram passados por POST
if (isset($_POST['cor']) && isset($_POST['estoque'])) {
    $cor = $connection->real_escape_string($_POST['cor']);
    $estoque = (int) $_POST['estoque']; // Garantir que o estoque seja um número inteiro

    // Atualizar o estoque no banco de dados
    $sql = "UPDATE tabelas_toucas SET estoque = $estoque WHERE cor = '$cor'";

    if ($connection->query($sql) === TRUE) {
        echo json_encode([
            'status' => 'success',
            'message' => 'Estoque atualizado com sucesso!'
        ]);
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Erro ao atualizar o estoque: ' . $connection->error
        ]);
    }
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Faltando dados para atualização.'
    ]);
}

$connection->close();
?>
