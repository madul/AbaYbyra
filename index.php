<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php require_once('./php/includes/links-header.php');?>
    <title>Aba Ybyra</title>
</head>

<body>
    
    <?php require_once("./php/includes/header.php");?>
    <main>
      <div id="index-body"  class="container-fluid row">
        <div id="logo-body" class="col-sm-8 container">
          <img src="./images/global/logo-branco.jpg" alt="Abá Ybyrá">
        </div>

        <div id="login-container" class= "col-4 border my-2 bg-white">
          <div id='login' class="p-2 w-100 float-right d-lg-flex flex-column">  
            <form id="form-login" class="p-2 d-flex flex-column justify-content-start" action="./php/aluno.php" method="POST">
              <div class="email-container form-group">
                <label for="email">Email</label>
                <input type="email" id='email' name='email' class="form-control " placeholder="Digite seu email" required>
              </div>
              <div class="password-container form-group">
                <label for="password">Senha</label>
                <input type="password" id='password' name='password' class="form-control" placeholder="Digite sua senha" required>
              </div>
            </form>
            <div id="buttons" class="d-flex flex-column px-2">
              <button type="submit" id='entrar-btn' class="btn text-light mb-2" name="signin" form="form-login">Entrar</button>
              <p>Cadastrar</p>
              <a id="escola-cad" class="btn mt-0 mb-2" href='' target='_self'>Escola</a>
              <a id="aluno-cad" class="btn my-2" href='' target='_self'>Aluno</a>
              <a id="professor-cad" class="btn my-2" href='' target='_self'>Professor</a>
            </div>
          </div>
        
        </div>
      </div>
    </main>
    
    <?php 
      require_once("./php/includes/footer.php");
      require_once("./php/includes/links-body.php");
    ?>
</body>

</html>