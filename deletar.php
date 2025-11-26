<?php
include "conexao.php";

$id = $_GET['id'];

echo "
<script>
if (confirm('Tem certeza que deseja excluir?')) {
    window.location.href = 'delete_execute.php?id=$id';
} else {
    window.location.href = 'tabela.php';
}
</script>
";
