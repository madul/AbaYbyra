 <?php
  echo $_POST['remover'];


  require_once "db_connect.php";
  session_start();

  if(empty($_SESSION['email']) || empty($_SESSION['password'])) {
  		header('Location: ../../index.php');
  	exit();
  }

  if(isset($_POST['remover'])){
    $email =  $_SESSION['email'];
    $senha =   $_SESSION['password'];
    $codigo = $_POST['remover'];

    $email = $_SESSION['email']; //A VARIAVEL RECEBE O EMAIL QUE FOI PASSADO PELO LOGIN;
    $sql1 = "SELECT id_escola as id from escola where email ='{$email}'";
    $result = $connect->query($sql1);
    $row = $result->fetch_all();
    $id_escola = (int)$row['0'];



    $sql = "DELETE from professor where codigo='{$codigo}' and id_escola='{$id_escola}';";

    if (mysqli_query($connect, $sql)===true) {
    $_SESSION['prof_removido'] = true;

      }
    }

  header('Location: ../../view/perfil/escola_professor.php');



  	exit();

   ?>
