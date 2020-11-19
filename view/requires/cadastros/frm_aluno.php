<main>
      <div class="min container mb-1">
      <div class="row">
      <div class="col-5 mx-auto mt-5">
      <h3 class="mb-4 borda bg-success" >Cadastro Usuário</h3>

      <form method="POST" action="../../php/actions/db_aluno.php">

      <div class="form-group">
      <label class="label-form" for="nome">Nome:</label>
      <input type="text" class="form-control" name="nome" id="nome" placeholder="digite seu nome" onkeyup="valida_campos()" required>
      </div>
      <div class="form-group">
      <label class="label-form" for="nome">Data de Nascimento: </label>
      <input type="date" class="form-control" name="dn" id="dn"   onkeyup="valida_campos()" required>
      </div>
      <div class="form-group">
      <label class="label-form" for="nome">E-mail:</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="digite seu email" onkeyup="valida_campos()" required>
      </div>
      <div class="form-group">
      <label class="label-form" for="nome">Crie sua Senha:</label>
      <input type="password" class="form-control" name="senha" id="senha" placeholder="sua senha de acesso"   onkeyup="valida_campos()" required>
      </div>
      <div class="form-group">
      <label class="label-form" for="nome">Escola que Estuda:</label>
      <input type="text" class="form-control" name="escola" id="escola" placeholder="campo opcional"   onkeyup="valida_campos()">
      </div>

      <button type="submit" name="cadastrar" class="btn btn-success text-light mb-2" style="width: 100%;">Cadastrar</button>
      </div>

      </form>
      </div>
      </div>
      </div>
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
