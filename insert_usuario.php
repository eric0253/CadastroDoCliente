<?php
/*Criando conexão com o banco de dados */

$servidor = 'localhost';
$user = 'root';
$password = 'root';
$banco = 'sistema';

$conexao = mysqli_connect($servidor,$user,$password,$banco);

/*Recebendo dados do form */

$user_nome = $_POST ['nome'];
$user_login = $_POST ['login'];
$user_senha = $_POST ['senha'];
$user_email = $_POST ['e-mail'];


/*Comando para insert into*/
$sql = "INSERT INTO usuarios (nm_user, login, senha, email) values ('$user_nome','$user_login','$user_senha','$user_email')";

/*Comando para enviar os dados o banco*/
$insert = mysqli_query($conexao, $sql);

header('Location: ../index.html?msg=1')


?>
