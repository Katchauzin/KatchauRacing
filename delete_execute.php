<?php
include "conexao.php";

$id = $_GET['id'];

$sql = "DELETE FROM automoveis WHERE id=$id";

if ($con->query($sql)) {
    echo "<script>alert('Registro deletado!'); window.location='tabela.php';</script>";
} else {
    echo "<script>alert('Erro ao deletar.'); window.location='tabela.php';</script>";
}
?>
