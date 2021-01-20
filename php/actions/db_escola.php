<?php

    require_once "db_connect.php";

    if(isset($_POST['cadastrar'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
    //    $codigo_aluno = $_POST['codigo_aluno'];
    //    $codigo_professor = $_POST['tefone'];

        $sql = "INSERT INTO escola VALUES (null,'$nome', '$email', '$senha', '$nome_responsavel', '$endereco', '$telefone');";

        if (mysqli_query($connect, $sql)==true) {
          $_SESSION['status_cadastro'] = true;
        //  $_SESSION['nome_aluno'] = $_POST['nome'];

        }
    //    mysqli_query($connect, $sql);
      //  echo "$sql";
        header("Location: ../../index.php");
    }


?>
