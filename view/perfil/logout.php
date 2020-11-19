<?php
session_start();
unset($_SESSION['nome']);
unset($_SESSION['nome']);
unset($_SESSION['autenticado_aluno']);
unset($_SESSION['autenticado_escola']);
unset($_SESSION['email']);
unset($_SESSION['senha']);

header('Location: ../../index.php');
 ?>
