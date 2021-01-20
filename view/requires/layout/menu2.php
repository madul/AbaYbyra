<?php session_start();

?>
<header>
      <nav id="header" class="top-container navbar navbar-dark navbar-expand-md bg-success">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbar" aria-controls="conteudoNavbar" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="conteudoNavbar" class="collapse navbar-collapse justify-content-end">
          <div class="mr-5 nav-container navbar-nav justify-content-between w-50">


            <?php if (isset($_SESSION['autenticado_aluno']) || isset($_SESSION['autenticado_escola'])): ?>

              <div class="btn-group text-success">
              <button type="button" class="text-center btn btn-success">Meu Perfil</button>
              <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Dropdown</span>
              </button>
              <div class="dropdown-menu">
                <a class="text-center dropdown-item text-success" href="./view/perfil/profile.php">Meus Dados</a>
                <a class="text-center dropdown-item text-success " href="./view/perfil/aluno_area.php">Área do aluno</a>

               <?php if(isset($_SESSION['autenticado_escola'])): ?>
                 <a class="text-center dropdown-item text-success " href="./view/perfil/escola_add.php">Adicionar Professor</a>
                  <a class="text-center dropdown-item text-success " href="./view/perfil/escola_professor.php">Lista Professores</a>
               <?php endif; ?>


                <div class="dropdown-divider text-success"></div>
                <a href="./php/actions/perfil/logout.php" class="dropdown-item  text-center text-danger header-icon nav-item nav-link"><strong>logout</strong></a>

              </div>
            </div>



            </a>
            <?php endif; ?>
              <a href="index.php" class="header-icon nav-item nav-link">INÍCIO</a>
              <a href="./view/pages/sobre.php" class="header-icon nav-item nav-link">SOBRE</a>
              <a href="#" class="header-icon nav-item nav-link">BLOG</a>
              <a href="#" class="header-icon nav-item nav-link">CONTATO</a>


          </div>
        </div>
        </nav>
    </header>
