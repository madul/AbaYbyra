<?php
if (!isset($_SESSION['nome'])) {
  header('Location: index.php');
}
 ?>
<main>
 <div id="aluno-body" class=" row w-100">
    <div id="lateral-aluno" class="bg-success col-sm-3 col-lg-2 h-100 d-flex flex-column justify-items-center align-items-center">
      <nav id="menu-alunos" class="h-100 nav text-light d-flex flex-column align-items-start justify-content-center">

          <div class="nav-item w-100">
            <div class="nav-link h4" type="button" data-toggle="collapse" data-target="#historias-itens" aria-controls="historias-itens" aria-haspopup="true" aria-expanded="false" aria-label="modulos da história">
              Histórias
            </div>
              <div id="historias-itens"  class="collapse">
                <div class="d-flex flex-column align-items-center">
                <a class="nav-item text-white" href="#historia" onclick="showModulo(1)">Módulo 1</a>
                <a class="nav-item text-white" href="#modulo2" onclick="showModulo(2)">Módulo 2</a>
                <a class="nav-item text-white" href="#modulo3" onclick="showModulo(3)">Módulo 3</a>
              </div>
            </div>
          </div>
          <div class="nav-item">

            <div class="nav-link h4 disabled" type="button" data-toggle="collapse" data-target="#exercicios-itens" aria-controls="historias-itens" aria-haspopup="true" aria-expanded="false" aria-label="modulos da história">
            Exercícios
            </div>
              <div id="exercicios-itens"  class="collapse">
                <div class="d-flex flex-column align-items-center">
                <a class="nav-item text-white" href="#">Módulo 1</a>
                <a class="nav-item text-white" href="#">Módulo 2</a>
                <a class="nav-item text-white" href="#">Módulo 3</a>
              </div>
            </div>
          </div>
      </nav>
    </div>

    <div id="conteudo" class="col-sm-9 col-lg-10 h-100 ml-2 row align-items-center justify-items-center">
      <h2 id="modulo0">Bem vindo <?php echo $_SESSION['nome'];  ?>  Se divirta muito.</h2>

      <div id="modulo1" class="h-100 ml-2 row align-items-center justify-items-center">
        <button type='button' id="previous" class="col-1 btn"  onclick="outraImagem(-1)" disabled='disabled'>
          <img src="./images/previous.png" alt="cartão anterior">
        </button>


        <div id="card" class="col-10 my-lg-3 d-flex align-items-center justify-content-center ">
          <img id="primeira-imagem" class="img-historia border" src="./images/mod1-hist-card1.png" alt="cartao 1 historia modulo 1">
          <img class="img-historia border" src="./images/mod1-hist-card2.png" alt="cartao 2 historia modulo 1">
          <img class="img-historia border" src="./images/mod1-hist-card3.png" alt="cartao 3 historia modulo 1">
          <img class="img-historia border" src="./images/mod1-hist-card4.png" alt="cartao 4 historia modulo 1">
          <img class="img-historia border" src="./images/mod1-hist-card5.png" alt="cartao 5 historia modulo 1">

        </div>


        <button type='button' id="next" class="col-1 btn" onclick="outraImagem(1)">
          <img src="./images/next.png" alt="próximo cartão">
        </button>
      </div>
      <div id="modulo2" class="col-sm-9 col-lg-10 h-100 ml-2 row align-items-center justify-items-center">
        <h2>Módulo 2 disponível em breve</h2>
      </div>
      <div id="modulo3" class="col-sm-9 col-lg-10 h-100 ml-2 row align-items-center justify-items-center">
        <h2>Módulo 3 disponível em breve</h2>
      </div>
    </div>

  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</main>
