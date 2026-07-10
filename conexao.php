<?php

$conexao = mysqli_connect(
    "localhost",
    "root",
    "",
    "rincon_pizzas"
);
if(!$conexao){
    die ("Erro na conexão!");
}