<?php
session_start();
require_once "db_connect.php";


if(empty($_POST['email']) || empty($_POST['password'])) {
		header('Location: ../../index.php');
	exit();
}

$usuario = $_POST['email'];
$senha =  $_POST['password'];

$_SESSION['email'] = $usuario;
$_SESSION['password'] = $senha;

//mysqli_query($connect, $sql);

$query = "select * from usuario where email = '{$usuario}' and senha = '{$senha}'";
$query2 = "select * from escola where email = '{$usuario}' and senha = '{$senha}'";


$result = mysqli_query($connect, $query);
$result2 = mysqli_query($connect, $query2);

$row = mysqli_num_rows($result);
$row2 = mysqli_num_rows($result2);

if($row == 1) {
	$usuario_bd = mysqli_fetch_assoc($result);
	$_SESSION['nome'] = $usuario_bd['nome'];
  $_SESSION['autenticado_aluno'] = true;
header('Location: ../../view/perfil/aluno_area.php');
	exit();
}


if($row2 == 1) {
	$usuario_bd = mysqli_fetch_assoc($result2);
	$_SESSION['nome'] = $usuario_bd['nome'];
  $_SESSION['autenticado_escola'] = true;
	header('Location: ../../view/perfil/aluno_area.php');
	exit();
}


	$_SESSION['nao_autenticado'] = true;
  	header('Location: ../../index.php');

	exit();

 ?>
