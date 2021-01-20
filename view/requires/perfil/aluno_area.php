<?php require_once('../../php/tools.php'); //REQUIRE DA PÁGINA DE FUNÇÕES

?>
<!DOCTYPE html>

<html lang="pt-br">
<head>
  <?php montar_layout('head');

  ?>
</head>

<body>
  <?php
    montar_layout('menu');
    montar_conteudo('perfil-body', 'conteudo_aluno'); //CONTEÚDO PÁGINA INDEX
    validar_login();
    montar_layout('footer'); ?>

</body>

</html>
