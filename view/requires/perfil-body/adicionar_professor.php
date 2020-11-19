<?php

if (!isset($_SESSION['autenticado_escola'])){

  header('location: index.php');

} ?>
<div class="container ">

  <div class="row mt-5">

    <div class="col-sm-2 mt-5 borda2 ">
      <nav class="nav flex-column " >
        <a class="nav-link mb-2 borda2 active bg-success" href="../perfil/profile.php">Dados Pessoais</a>
        <a class="nav-link mb-2 borda2 bg-success" href="../perfil/aluno_area.php">História e atividades</a>
  <?php if (isset($_SESSION['autenticado_escola'])): ?>
        <a class="nav-link mb-2 borda2 bg-success" href="../perfil/escola_add.php">Adicionar Professores</a>
        <a class="nav-link mb-2 borda2 bg-success" href="../perfil/escola_professor.php">Lista de Professores</a>
  <?php endif; ?>
      </nav>
    </div>

    <div class="mt-5 col-md-5">

      <form action="../../php/actions/cadastrar_professor.php" method="post">
    <?php foreach ($result = dados_user() as $key => $value): ?>
      <div class="form-group">




  <?php if (isset($_SESSION['professor_add'])): ?>

    <div class="alert alert-success" role="alert">
    <strong>Professor adicionado com sucesso</strong>
  </div>

  <?php endif;
        unset($_SESSION['professor_add']);
      ?>


  <?php if (isset($_SESSION['codigo_falha'])): ?>

    <div class="alert alert-danger" role="alert">
    <strong>Falha</strong> o codigo não foi identificado
  </div>

  <?php endif;
  unset($_SESSION['codigo_falha']);
  ?>


        <label class="label-form" for="nome">Cadastrar Professor</label>
        <input type="text" class="form-control" name="codigo_professor" id="codigo_professor" placeholder="insira o ID" onkeyup="" >
        </div>

        <button type="submit" name="cadastrar_professor" class="btn btn-success text-light mb-2" style="width: 100%;">Cadastrar</button>

    <?php endforeach; ?>

        </form>
      </div>



</div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
