<?php
require 'conexao2.php'; // Aqui o $pdo PRECISA ser criado dentro deste arquivo

// CONFIRMA que a conexão existe
if (!isset($pdo)) {
    die("Erro: conexão com o banco não estabelecida. Verifique o arquivo conexao.php");
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Recebe os dados do formulário
    $nome = trim($_POST["nome"]);
    $email = trim($_POST["email"]);
    $cpf = trim($_POST["cpf"]);
    $assunto = trim($_POST["assunto"]);
    $mensagem = trim($_POST["mensagem"]);

    // Prepara a query para a tabela contato do banco katchau_db
    $sql = "INSERT INTO contato (nome, email, cpf, assunto, mensagem) 
            VALUES (:nome, :email, :cpf, :assunto, :mensagem)";
    
    $stmt = $pdo->prepare($sql);

    // Executa com segurança
    $executou = $stmt->execute([
        ':nome' => $nome,
        ':email' => $email,
        ':cpf' => $cpf,
        ':assunto' => $assunto,
        ':mensagem' => $mensagem
    ]);

    // Se salvou com sucesso, volta para contato limpando os campos
    if ($executou) {
        header("Location: contato.php?sucesso=1");
        exit();
    } else {
        header("Location: contato.php?erro=1");
        exit();
    }
}
?>
