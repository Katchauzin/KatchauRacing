<?php
include "conexao.php";

$nome = $_POST['nome'];
$fabricante = $_POST['fabricante'];
$vel = $_POST['velocidade'];
$img = $_POST['imagem'];

$sql = "INSERT INTO automoveis (nome, fabricante, velocidade_max, imagem)
        VALUES ('$nome', '$fabricante', '$vel', '$img')";

if ($con->query($sql)) {
    echo "<script>alert('Carro cadastrado com sucesso!'); window.location='tabela.php';</script>";
} else {
    echo "<script>alert('Erro ao cadastrar.'); window.location='cadastrar.php';</script>";
}
?>
