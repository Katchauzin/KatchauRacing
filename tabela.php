<?php include "conexao.php"; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Katchau Racing - Automóveis</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link id="tema-site" rel="stylesheet" href="css/light.css">
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Katchau Racing</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="inicio.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="">Automóveis</a></li>
                    <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
                    <li class="nav-item"><a class="nav-link" href="equipe.php">Equipe</a></li>

                    <li class="nav-item">
                        <button id="theme-toggle" class="theme-btn" aria-label="Trocar tema"></button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<div class="container mt-4">
    <h1 class="mb-4">Automóveis Cadastrados</h1>

    <a href="cadastrar.php" class="btn btn-success mb-3">Cadastrar Novo</a>

    <div class="row g-4">

        <?php
        $sql = "SELECT * FROM automoveis";
        $resultado = $con->query($sql);

        while ($carro = $resultado->fetch_assoc()) {
        ?>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="<?= $carro['imagem'] ?>" class="card-img-top" alt="<?= $carro['nome'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $carro['nome'] ?></h5>
                        <p class="card-text">
                            Fabricante: <?= $carro['fabricante'] ?><br>
                            Velocidade Máx.: <?= $carro['velocidade_max'] ?> km/h
                        </p>
                        <a href="editar.php?id=<?= $carro['id'] ?>" class="btn btn-warning">Editar</a>
                        <a href="deletar.php?id=<?= $carro['id'] ?>" class="btn btn-danger">Excluir</a>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
</div>
<footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">&copy; 2025 Katchau Racing. Todos os direitos reservados.</p>
    </footer>

<script src="js/tema.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
