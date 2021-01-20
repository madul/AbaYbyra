<?php require_once('../../php/tools.php'); //REQUIRE DA PÁGINA DE FUNÇÕES

?>
<!DOCTYPE html>

<html lang="pt-br">
<head>
  <?php montar_layout('head');

  ?>
</head>

<body class="bg-success">
  <?php
    montar_layout('menu');
    montar_conteudo('perfil-body', 'meus_dados'); //CONTEÚDO PÁGINA INDEX
    validar_login();
  ?>

</body>
<?php //montar_layout('footer'); ?>
