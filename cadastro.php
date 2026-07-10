<?php
include("conexao.php");

$nome = $_POST["nome"];

$telefone = $_POST["telefone"];

$cpf = $_POST["cpf"];

$endereco = $_POST["endereco"];

$cep = $_POST["cep"];

$sql = "INSERT INTO clientes
(nome,telefone,cpf,endereco,cep)

VALUES
('$nome','$telefone','$cpf','$endereco','$cep')";

mysqli_query($conexao, $sql);


echo "
<script>
    alert('Cadastro realizado com sucesso!');
    window.location.href = 'index.html';
</script>
";
exit();
?>