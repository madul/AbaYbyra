<?php

if (!isset($_SESSION['autenticado_escola'])){

  header('location: index.php');

} ?>
<div class="container ">

  <div class="row mt-5">

    <div class="col-sm-2 ml-2 mt-5 borda2 ">
      <nav class="nav flex-column " >
        <a class="nav-link mb-2 borda2 active bg-success" href="../perfil/profile.php">Dados Pessoais</a>
        <a class="nav-link mb-2 borda2 bg-success" href="../perfil/aluno_area.php">História e atividades</a>
    <?php if (isset($_SESSION['autenticado_escola'])): ?>
        <a class="nav-link mb-2 borda2 bg-success" href="../perfil/escola_add.php">Adicionar Professores</a>
        <a class="nav-link mb-2 borda2 bg-success" href="../perfil/escola_professor.php">Lista de Professores</a>
    <?php endif; ?>
      </nav>
    </div>

    <div class="mt-5 col-md">

<?php if (isset($_SESSION['prof_removido'])): ?>

  <div class="alert alert-success" role="alert">
  <strong>Professor removido com sucesso</strong>
</div>

<?php endif;
unset($_SESSION['prof_removido']);
 ?>

  <table class="table">
  <thead>

    <tr class="bg-success text-white">
      <th scope="col">Nome do Professor</th>
        <th scope="col">Disciplina</th>
      <th scope="col">Codigo</th>
      <th scope="col">ação</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($professores = exibir_professores() as $key => $value): ?>
    <tr>

      <td><?php echo $value['professor']; ?></td>
      <td>em breve</td>
      <td><?php echo $value['codigo']; ?></td>
      <td>
      <form action="../../php/actions/delete_prof.php" method="post">
      <button type="submit" name="remover" class="btn btn-warning btn-sm" value="<?php echo $value['codigo']; ?>">remover</button>
    </form>
      </td>

    </tr>
    <tr>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

      </div>

</div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
