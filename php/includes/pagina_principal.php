<main>
     <div class="container-fluid mt-5">
     <div id="index-body"  class="container-fluid row">
       <div id="logo-body" class="col-sm-8 container">
         <img src="./images/global/logo-branco.jpg" alt="Abá Ybyrá">
       </div>

       <div id="login-container min bg-sucess" class= "col-4 border my-2 bg-white">

         <div id='login' class="p-2 w-100 float-right d-lg-flex flex-column">

<?php

     /* SE A SESSÃO nao_autenticado for iniciada, exibe a msg de login e senha invalidos.
          O UNSET esvazia o conteúdo da váriavel para nao ficar exibindo a msg toda hora
          mesmo depois de logado
      */ ?>

      <?php if (isset($_SESSION['status_cadastro'])): ?>

       <div class="alert alert-success" role="alert">
         Cadastro realizado com sucesso!
       </div>

      <?php endif;
    //  unset($_SESSION['status_cadastro']);
      ?>

           <?php if (isset($_SESSION['nao_autenticado'])): ?>
            <label class="text-danger"><strong>Senha ou usuário invalidos!</strong><br> tente novamente</label>

           <?php endif;
           unset($_SESSION['nao_autenticado']);
           ?>

           <form  id="form-login" class="p-2 d-flex flex-column justify-content-start" action="login.php" method="POST">
             <div class="email-container form-group">
               <label for="email">Email</label>
               <input type="email" id='email' name='email' class="form-control " placeholder="Digite seu email" required>
             </div>
             <div class="password-container form-group">
               <label for="password">Senha</label>
               <input type="password" id='password' name='password' class="form-control" placeholder="Digite sua senha" required>
             </div>
                  <button type="submit"  class="btn btn-success text-light mb-2" name="signin" form="form-login">Entrar</button>
                  <a role="button" class="btn btn-warning" href='aluno.php'>Cadastrar</a>

           </form>
           <div id="buttons" class="d-flex flex-column px-2">
             <p class="text-center"></p>
             <a  class="btn btn-danger mt-0 mb-2" href='./view/cadastros/cadastro-escola.php' target='_self'>Sou escola</a>

           </div>
         </div>
       </div>
     </div>
     </div>
   </main>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
