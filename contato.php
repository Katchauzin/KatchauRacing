<?php
$sucesso = isset($_GET["sucesso"]);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Katchau Racing - Contato</title>
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
                <li class="nav-item"><a class="nav-link" href="tabela.php">Automóveis</a></li>
                <li class="nav-item"><a class="nav-link active" href="contato.php">Contato</a></li>
                <li class="nav-item"><a class="nav-link" href="equipe.php">Equipe</a></li>
                <li class="nav-item"><button id="theme-toggle" class="theme-btn" aria-label="Trocar tema"></button></li>
            </ul>
        </div>
    </div>
</nav>

<header class="bg-white shadow-sm py-5 mb-5">
    <div class="container text-center">
        <h1 class="display-4 fw-bold mb-3">Entre em contato com a equipe!</h1>
        <p class="lead">Preencha o formulário abaixo e aceleraremos juntos.</p>
    </div>
</header>

<main class="container mb-5">
    <?php if ($sucesso): ?>
        <div class="alert alert-success text-center">Mensagem enviada com sucesso!</div>
    <?php endif; ?>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">

                    <form method="POST" action="salvar_contato.php">
                        <div class="mb-3">
                            <label class="form-label">Nome:</label>
                            <input type="text" name="nome" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">E-mail:</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">CPF:</label>
                            <input type="text" name="cpf" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Assunto:</label>
                            <input type="text" name="assunto" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Mensagem:</label>
                            <textarea name="mensagem" rows="5" class="form-control" required></textarea>
                        </div>

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</main>

<footer class="bg-dark text-white text-center py-3">
    <p class="mb-0">&copy; 2025 Katchau Racing. Todos os direitos reservados.</p>
</footer>

<script src="js/tema.js"></script>
<script src="js/validacao.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
