<?php require_once('./php/tools.php'); //REQUIRE DA PÁGINA DE FUNÇÕES

?>


<!DOCTYPE html>

 <html lang="pt-br">
  <?php montar_layout('head'); ?>

<body>
  <?php
    montar_layout('menu');
    validar_login();
    montar_conteudo('add_prof');

  ?>

</body>
<?//php montar_layout('footer'); ?>
