<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Area de Cadastro</title>
</head>
<body>
    <div class="titulo">
        <h1>Faça Seu Cadastro</h1>
    </div>
    
    <form method="POST" action="cadastro.php">
<div class="container-php">

<div class="campo">
 <label>Nome:</label>
<input type="text" 
name="nome"
placeholder="Digite Seu Nome"
required>
</div>

<div class="campo">
<label>Telefone:</label>
<input type="text"
name="telefone"
placeholder="Digite seu Telefone"
required>
</div>

<div class="campo">
<label>CPF:</label>
<input type="text"
name="cpf"
placeholder="Digite seu CPF"
required>
</div>

<div class="campo">
<label>Endereço:</label>
<input type="text"
name="endereco"
placeholder="Digite seu Endereço"
required>
</div>

<div class="campo">
<label>CEP:</label>
<input type="text"
name="cep"
placeholder="Digite seu CEP">
</div>

</div>

<button>
    Finalizar Cadastro
</button>


    </form>
</body>
</html>