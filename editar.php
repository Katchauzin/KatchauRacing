<?php 
include "conexao.php";
$id = $_GET['id'];

$sql = "SELECT * FROM automoveis WHERE id=$id";
$carro = $con->query($sql)->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Automóvel</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body class="bg-light">

<div class="container mt-4">

<h1>Editar Automóvel</h1>

<form action="atualizar.php" method="post">

    <input type="hidden" name="id" value="<?= $carro['id'] ?>">

    <label class="form-label">Nome:</label>
    <input type="text" name="nome" class="form-control" value="<?= $carro['nome'] ?>" required>

    <label class="form-label mt-3">Fabricante:</label>
    <input type="text" name="fabricante" class="form-control" value="<?= $carro['fabricante'] ?>" required>

    <label class="form-label mt-3">Velocidade Máx.:</label>
    <input type="number" name="velocidade" class="form-control" value="<?= $carro['velocidade_max'] ?>" required>

    <label class="form-label mt-3">Imagem:</label>
    <input type="text" name="imagem" class="form-control" value="<?= $carro['imagem'] ?>" required>

    <button class="btn btn-warning mt-3">Salvar Alterações</button>

</form>

</div>

</body>
</html>
