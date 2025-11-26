<?php ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Katchau Racing - Equipe</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link id="theme-link" rel="stylesheet" href="css/light.css">
    
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.html">Katchau Racing</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="inicio.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="tabela.php">Automóveis</a></li>
                    <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
                    <li class="nav-item"><a class="nav-link active" href="">Equipe</a></li>
                    <li class="nav-item">
                    <button id="theme-toggle" class="theme-btn" aria-label="Trocar tema"></button>


                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="bg-white shadow-sm py-5 mb-5">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-3">Nossa Equipe</h1>
            <p class="lead">Conheça os integrantes que aceleram junto com a Katchau Racing!</p>
        </div>
    </header>

    <main class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm p-4">
                    <h2 class="mb-4">Integrantes da Equipe</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Thiago Monteiro Alcantara - Matrícula: 2025 0299 9704</li>
                        <li class="list-group-item">Rafael Ferreira dos Santos - Matrícula: 2025 0232 3051</li>
                        <li class="list-group-item">Gabriel Torres Cosme - Matrícula: 2025 0308 0054</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">&copy; 2025 Katchau Racing. Todos os direitos reservados.</p>
    </footer>
<script src="js/tema.js"></script>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
