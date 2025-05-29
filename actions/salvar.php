<?php
include_once("../config/database/database.php");

// Pega os dados do formulário
$imagem = $_POST['imagem'] ?? '';
$titulo = $_POST['titulo'] ?? '';
$descricao = $_POST['descricao'] ?? '';
$data = $_POST['data_criacao'] ?? '';

// Previne SQL injection com prepare
$stmt = $con->prepare("INSERT INTO alunos (imagem, titulo, descricao, data_criacao) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $imagem, $titulo, $descricao, $data);

// Tenta executar
try {
    $stmt->execute();
    header("Location: ../index.php");
    exit;
} catch (mysqli_sql_exception $e) {
    echo "Erro ao salvar: " . $e->getMessage();
}
?>
