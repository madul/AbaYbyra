<div class="container">

  <div class="row mt-5">


    <div id="menu_late" class="col-sm-2 mt-5 borda2">
      <nav class="nav flex-column " >
        <a class="nav-link mb-2 borda2 active bg-success" href="../perfil/profile.php">Dados Pessoais</a>
        <a class="nav-link mb-2 borda2 bg-success" href="../perfil/aluno_area.php">História e atividades</a>
  <?php if (isset($_SESSION['autenticado_escola'])): ?>
        <a class="nav-link mb-2 borda2 bg-success" href="../perfil/escola_add.php">Adicionar Professores</a>
        <a class="nav-link mb-2 borda2 bg-success" href="../perfil/escola_professor.php">Lista de Professores</a>
  <?php endif; ?>
      </nav>
    </div>

    <div class="ml-5 col-md">
      <?php if (isset($_SESSION['update'])): ?>

        <div class="alert alert-success" role="alert">
        <strong>Seus dados foram atualizados com sucesso</strong>
      </div>

      <?php endif;
            unset($_SESSION['update']);
          ?>
      <form action="../../php/actions/update.php" method="post">

<?php if (isset($_SESSION['autenticado_aluno'])): ?>
    <?php foreach ($result = dados_user() as $key => $value): ?>
    <div class="form-group">
    <div class="alert alert-success" role="alert">
    <strong>MEU ID: </strong> <?php echo $value['codigo'] ?>
    </div>

        <label class="label-form" for="nome">Nome:</label>
        <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $value['nome'];?>" onkeyup="" >
        </div>
        <div class="form-group">
        <label class="label-form" for="nome">Data de Nascimento: </label>
        <input type="date" class="form-control" value="<?php echo $value['data_nascimento'];?>" name="dn" id="dn" required>
        </div>
        <div class="form-group">
        <label class="label-form" for="nome">E-mail:</label>
        <input type="email" class="form-control" name="email" id="email" value="<?php echo $value['email'];?>" onkeyup="valida_campos()" disabled>
        </div>
        <div class="form-group">
        <label class="label-form" for="nome">Escola que Estuda:</label>
        <input type="text" class="form-control" name="escola" id="escola" value="<?php echo $value['escola'];?>"  onkeyup="valida_campos()">
        </div>

        <div class="form-group">
        <label class="label-form" for="nome" onClick="copiarTexto()">clique aqui para copiar </label>
        <input type="text" class="form-control" id="link" name="link" value="<?php echo $value['codigo'];?>" disabled>
        </div>
        <button type="submit" name="update"  class="btn btn-success text-light mb-2" style="width: 100%;">Atualizar dados</button>

    <?php endforeach; ?>
  <?php endif; ?>

  <?php if (isset($_SESSION['autenticado_escola'])): ?>


    <?php foreach ($result = dados_user() as $key => $value): ?>
    <div class="form-group">
        <label class="label-form" for="nome">Nome:</label>
        <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $value['nome'];?>" onkeyup="" disabled>
        </div>
        <div class="form-group">
        <label class="label-form" for="nome">E-mail:</label>
        <input type="email" class="form-control" name="email" id="email" value="<?php echo $value['email'];?>" onkeyup="valida_campos()" disabled>
        </div>
        <div class="form-group">
        <label class="label-form" for="nome">Responsável:</label>
        <input type="text" class="form-control" name="responsavel" id="escola" value="<?php echo $value['nome_responsavel'];?>"  onkeyup="valida_campos()">
        </div>

        <div class="form-group">
        <label class="label-form" for="nome">Telefone:</label>
        <input type="text" class="form-control" name="telefone" id="escola" value="<?php echo $value['telefone'];?>"  onkeyup="valida_campos()">
        </div>

        <div class="form-group">
        <label class="label-form" for="nome">endereco:</label>
        <input type="text" class="form-control" name="escola" id="escola" value="<?php echo $value['endereco'];?>"  onkeyup="valida_campos()" disabled>
        </div>


        <button type="submit" name="escola_update" class="btn btn-success text-light mb-2" style="width: 100%;">Atualizar dados</button>

    <?php endforeach; ?>




<?php endif ?>
        </form>
      </div>

</div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
