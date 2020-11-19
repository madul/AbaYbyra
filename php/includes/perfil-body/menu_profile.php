<nav class="nav flex-column " >
  <a class="nav-link mb-2 borda2 active bg-success" href="profile.php">Dados Pessoais</a>
  <a class="nav-link mb-2 borda2 bg-success" href="aula-aluno.php">História e atividades</a>

  <?php if (isset($_SESSION['autenticado_escola'])): ?>
  <a class="nav-link mb-2 borda2 bg-success" href="profile_escola.php">Adicionar Professores</a>
  <a class="nav-link mb-2 borda2 bg-success" href="professores_escola.php">Professores</a>

<?php endif; ?>
