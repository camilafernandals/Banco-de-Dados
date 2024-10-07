<?php
include "config.php";
if (!$conn){
    die("Falha na conexão {mysqli_connect_error()}");
}

//Recebe os dados do formulário
$nome = '';
$dtnasc = '';
$celular = '';
$email = '';
$ra = '';
$endereco = '';
$num_end = '';
$bairro = '';
$cidade = '';

//Cria variável para inserir um registro
?>