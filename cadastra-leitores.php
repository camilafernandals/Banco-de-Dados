<?php
include "config.php";
if (!$conn){
    die("Falha na conexão " . mysqli_connect_error());
}

//Recebe os dados do formulário
$nome = 'Camila Fernanda';
$dtnasc = '28-03-2007';
$celular = '(81) 99486-3357';
$email = 'cmlfernandalsilva@gmail.com';
$ra = '633114526';
$endereco = 'Rua Patinho Tucano';
$num_end = '15';
$bairro = 'Jardim Paulista Baixo';
$cidade = 'Paulista ';

//Cria variável para inserir um registro
$sql = "INSERT INTO `leitores` 
(`Nome`, `DtNasc`, `Celular`, `Email`, `RA`, `Endereco`, `NumEnd`, `Bairro`, `CidadeUF`) VALUES
('$nome', '$dtnasc', '$celular', '$email', '$ra', '$endereco', '$num_end', '$bairro', '$cidade')";

//Executa a consulta SQL. Se falhar, exibe o erro do banco de dados
$query = mysqli_query(mysql:$conn,query:$sql) or 
die(mysqli_error(mysql:$db));

if($query){
    echo "<center>";
    echo "Cadastro realizado com sucesso! <br>";
    echo "<a href='index.php'><button title='Home page'>Voltar</button></a>";
    echo "</center>";
}
else{
    echo "<center>";
    echo "Erro ao cadastrar!<br>";
    echo "a href='index.php'>button title='Home Page'>Voltar<button></a>";
    echo "</center>";
}
?>
