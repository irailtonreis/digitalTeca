<?php 
  session_start();
  if($_SESSION){
    $nivel_acesso = $_SESSION["nivel_acesso"];
    $nome = $_SESSION["nome"];
  }
?>
<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="#"><span>DigitalTeca</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <?php if(isset($nivel_acesso) && $nivel_acesso == 1): ?>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastroRedator.php">Cadastro de Redator</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listarRedator.php">Listar Redatores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listarNoticias.php">Listar Notícias</a>
        </li>
      <?php else: ?>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Notícias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contato</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Localização</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastrarLivro.php">CadastrarLivro</a>
        </li>
      <?php endif; ?>
    </ul>
    <?php if(isset($nivel_acesso) && $nivel_acesso == 1): ?>
      <div class="form-inline my-2 my-lg-0">
        <div class="name-user">Olá, <?= $nome; ?></div>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> Sair</button>
      </div>
    <?php else: ?>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
      </form>
    <?php endif; ?>
  </div>
</nav>