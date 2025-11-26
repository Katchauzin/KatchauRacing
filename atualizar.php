<?php
include "conexao.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$fabricante = $_POST['fabricante'];
$vel = $_POST['velocidade'];
$img = $_POST['imagem'];

$sql = "UPDATE automoveis SET 
            nome='$nome',
            fabricante='$fabricante',
            velocidade_max=$vel,
            imagem='$img'
        WHERE id=$id";

if ($con->query($sql)) {
    echo "<script>alert('Registro atualizado!'); window.location='tabela.php';</script>";
} else {
    echo "<script>alert('Erro ao atualizar.'); history.back();</script>";
}
?>
 