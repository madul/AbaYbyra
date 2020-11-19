<?php

    require_once "db_connect.php";
    session_start();
    if(isset($_POST['cadastrar_professor'])){

        $codigo = $_POST['codigo_professor'];
        $email = $_SESSION['email'];

        $sql1 = "SELECT id_escola as id from escola where email ='{$email}'";
        $result = $connect->query($sql1);
        $row = $result->fetch_all();
        $id = (int)$row['0'];

        $sql1 = "SELECT codigo from usuario where codigo ='{$codigo}'";
        $result2 = $connect->query($sql1);
        $row2 = $result2->fetch_all();
        var_dump($row2);


        $sql = "INSERT into professor values (null,{$id},'{$codigo}');";
      //  mysqli_query($connect, $sql);

      if (empty($row2)) {
        $_SESSION['codigo_falha'] = true;
        echo $_SESSION['codigo_falha'];
        header('Location: ../../view/perfil/escola_add.php');
      }

      if (mysqli_query($connect, $sql) === true) {
        $_SESSION['professor_add'] = true;
        	header('Location: ../../view/perfil/escola_add.php');
      }else {
        $_SESSION['professor_falha'] = true;
          	header('Location: ../../view/perfil/escola_add.php');
      }

    }


?>
