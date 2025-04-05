<?php
header('Content-Type: application/json');

// Conexão com o banco de dados (modifique conforme necessário)
$connection = new mysqli('localhost', 'root', '', 'agitacao_toucas');

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Consulta ao banco de dados para obter as toucas e seu estoque
$sql = "SELECT cor, descricao, estoque, categoria_touca, imagem FROM tabelas_toucas";
$result = $connection->query($sql);

$toucas = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $toucas[] = $row;
    }
}

echo json_encode($toucas);

$connection->close();
?>
