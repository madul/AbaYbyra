<main>
  <div class="container">
  <div class="row">
  <div class="col-5 mx-auto pt-2">
  <h3 class="mb-2 text-center">Cadastre sua Escola</h3>
  <form method="POST" action="../../php/actions/db_escola.php">
  <div class="form-group">
  <label class="label-form" for="nome">Nome:</label>
  <input type="text" class="form-control" name="nome" id="nome" placeholder="digite seu nome" onkeyup="valida_campos()">
  </div>
  <div class="form-group">
  <label class="label-form" for="nome">E-mail:</label>
  <input type="email" class="form-control" name="email" id="email" placeholder="digite seu email"  onkeyup="valida_campos()">
  </div>
  <div class="form-group">
  <label class="label-form" for="nome">Crie sua Senha:</label>
  <input type="password" class="form-control" name="senha" id="senha" placeholder="digite sua senha" onkeyup="valida_campos()">
  </div>
  <div class="form-group">
  <label class="label-form" for="nome">Nome Responsável: </label>
  <input type="text" class="form-control" name="nome_resp" id="nome_resp" placeholder="nome responsável" onkeyup="valida_campos()">
  </div>
  <div class="form-group">
  <label class="label-form" for="nome">Telefone</label>
  <input type="text" class="form-control" name="telefone" placeholder="número de contato"  onkeyup="valida_campos()">
  </div>
  <div class="form-group">
  <label class="label-form" for="nome">Endereço:</label>
  <input type="text" class="form-control" name="endereco" placeholder="endereço"  onkeyup="valida_campos()">
  </div>

  <button type="submit" name="cadastrar" style="width: 100%;"class="btn btn-danger" id="cadastrar-escola">Cadastrar</button>
  </form>
  </div>
  </div>
  </div>
  </div>
</main>
