<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Automóvel</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body class="bg-light">

<div class="container mt-4">

<h1>Cadastrar Automóvel</h1>

<form action="inserir.php" method="post">

    <label class="form-label">Nome:</label>
    <input type="text" name="nome" class="form-control" required>

    <label class="form-label mt-3">Fabricante:</label>
    <input type="text" name="fabricante" class="form-control" required>

    <label class="form-label mt-3">Velocidade Máx.:</label>
    <input type="number" name="velocidade" class="form-control" required>

    <label class="form-label mt-3">URL da Imagem:</label>
    <input type="text" name="imagem" class="form-control" required>

    <div class="d-flex gap-2 mt-3">
    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href="javascript:history.back()" class="btn btn-secondary">Voltar</a>
    </div>



</form>

</div>

</body>
</html>
