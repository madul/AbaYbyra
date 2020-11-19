<?php

    require_once "db_connect.php";

    if(isset($_POST['cadastrar'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $escola = $_POST['escola'];
        $telefone = $_POST['telefone'];

        $sql = "INSERT INTO professor VALUES (null,'$nome', '$email', '$senha', '$escola', '$telefone');";

        mysqli_query($connect, $sql);

        header("Location: ../../index.php");
    }




?>
