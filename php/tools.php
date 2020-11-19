<?php
require_once "actions/db_connect.php";


function montar_conteudo($value1, $value2){

 return require_once "../requires/$value1/{$value2}.php";
}

function montar_layout($value){


 return require_once "../requires/layout/{$value}.php";
}


function validar_login()
{
  if (!isset($_SESSION['nome'])) {
  	header('Location: ../../index.php');
  }

}

function capturar_id () //esta função captura o id da escola logada;
{
  $email = $_SESSION['email']; //A VARIAVEL RECEBE O EMAIL QUE FOI PASSADO PELO LOGIN;
  $connect = mysqli_connect("localhost", "root", "vertrigo", "abaybyra"); //variavel de conexão no banco;
  $sql1 = "SELECT id_escola as id from escola where email ='{$email}'";
  $result = $connect->query($sql1);
  $row = $result->fetch_all();
  $id = (int)$row['0']; //
  return  $id;
}

function dados_user():array
//esta função é responsável por coletar dados do aluno ou escola;
{
  $connect = mysqli_connect("localhost", "root", "vertrigo", "abaybyra"); //variavel de conexão no banco;
  $email = $_SESSION['email']; //A VARIAVEL RECEBE O EMAIL QUE FOI PASSADO PELO LOGIN;
  $senha =   $_SESSION['password']; //A VARIAVEL A SENHA QUE FOI PASSADA PELO LOGIN;

//SE O ALUNO ESTIVER AUTENTICADO:
  if (isset($_SESSION['autenticado_aluno'])) {
    $sql = "select nome,data_nascimento,email,escola,codigo from usuario where email= '{$email}' and senha= '{$senha}'";
    $result = $connect->query($sql);
    $row = $result->fetch_all(MYSQLI_ASSOC);

  }

//SE FOR ESCOLA LOGADA AUTENTICADA:
  if (isset($_SESSION['autenticado_escola'])) {
    $sql = "select nome,email,nome_responsavel,endereco,telefone from escola where email= '{$email}' and senha= '{$senha}'";
    $result = $connect->query($sql);
    $row = $result->fetch_all(MYSQLI_ASSOC);
  }


  return $row;
}

function exibir_professores():array
//esta função é responsável por coletar dados do aluno ou escola;
{

  $connect = mysqli_connect("localhost", "root", "vertrigo", "abaybyra"); //variavel de conexão no banco;
  $email = $_SESSION['email']; //A VARIAVEL RECEBE O EMAIL QUE FOI PASSADO PELO LOGIN;
  $senha =   $_SESSION['password']; //A VARIAVEL A SENHA QUE FOI PASSADA PELO LOGIN;
  $id = capturar_id();  //esta variavel recebe o retorno de uma função que captura o id da escola logada;


//SE FOR ESCOLA LOGADA AUTENTICADA:
  if (isset($_SESSION['autenticado_escola'])) {

    $sql =  "select prof.codigo, e.nome as escola, u.nome as professor from professor prof
             join escola e on e.id_escola = prof.id_escola
             join usuario u on u.codigo = prof.codigo where e.id_escola ={$id};";

    $result = $connect->query($sql);
    $row = $result->fetch_all(MYSQLI_ASSOC);
  }


  return $row;
}





 ?>
