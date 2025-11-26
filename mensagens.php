<?php
include "conexao.php";
include "navbar.php";
?>

<div class="container mt-5">
    <h2 class="mb-4">Mensagens Recebidas</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Assunto</th>
                <th>Mensagem</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>

        <?php
        $sql = "SELECT * FROM contatos ORDER BY data_envio DESC";
        $result = $conexao->query($sql);

        while($row = $result->fetch_assoc()):
        ?>

        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nome'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['assunto'] ?></td>
            <td><?= $row['mensagem'] ?></td>
            <td><?= $row['data_envio'] ?></td>
        </tr>

        <?php endwhile; ?>

        </tbody>
    </table>
</div>
