<?php
session_start();
require_once "db_connect.php";


if(empty($_SESSION['email']) || empty($_SESSION['password'])) {
		header('Location: ../../index.php');
	exit();
}

if(isset($_POST['update'])){
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $escola = $_POST['escola'];

    $usuario =  $_SESSION['email'];
    $senha =   $_SESSION['password'];


    $sql = "UPDATE  usuario set nome='{$nome}', data_nascimento='{$data_nascimento}',escola='{$escola}' where email = '{$usuario}' and senha = '{$senha}'";

    if (mysqli_query($connect, $sql)===true) {
    $_SESSION['update'] = true;
    $_SESSION['nome'] = $_POST['nome'];

    }
  }


  if (isset($_POST['escola_update'])) {
    $responsavel = $_POST['responsavel'];
    $telefone = $_POST['telefone'];

    $usuario =  $_SESSION['email'];
    $senha =   $_SESSION['password'];

    $sql = "UPDATE escola set nome_responsavel='{$responsavel}', telefone='{$telefone}' where email = '{$usuario}' and senha = '{$senha}'";
    echo "$sql";
    if (mysqli_query($connect, $sql)===true) {
    $_SESSION['update'] = true;

    $_SESSION['nome'] = $_POST['responsavel'];
    }
  }



  header('Location: ../../view/perfil/profile.php');

	exit();

 ?>
