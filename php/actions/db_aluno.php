<?php
session_start();
    require_once "db_connect.php";

    if(isset($_POST['cadastrar'])){
        $nome = $_POST['nome'];
        $data_nascimento = $_POST['dn'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $escola = $_POST['escola'];
        $codigo_aluno = uniqid(rand());

        $sql = "INSERT INTO usuario VALUES (null, '{$nome}', '$data_nascimento', '$email', '$senha', '$escola', '$codigo_aluno')";


    if (mysqli_query($connect, $sql)==true) {
      $_SESSION['status_cadastro'] = true;
      $_SESSION['nome_aluno'] = $_POST['nome'];

    }



echo "$sql";
  header("Location: ../../index.php");
    }




?>
