<?php
// dados para a conexão  com o sgbd
$servidor = 'localhost';
$login ='root';
$senha = 'root';
$banco = 'sisteminha';

//conectando no banco de dados
$conexao = mysqli_connect($servidor, $login, $senha, $banco);

//dados do formulário
$nome = $_POST['user'];
$login = $_POST['login'];
$password = $_POST['senha'];

$insert = "INSERT INTO tb_user(id_user, nm_user, login, senha)
        VALUE (null,'$nome','$login', '$password')";

$sql = mysqli_query($conexao, $insert);

 
echo "Nome: $nome, Sexo: Binário, Login: $login, Senha: $senha,";
?>