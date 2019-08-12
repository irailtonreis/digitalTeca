
<?php require_once("config/conn.php");?>

<!DOCTYPE html>
<html lang="en">
  <?php require_once("inc/head.php"); ?>
<body>
  <?php require_once("inc/header.php") ?>

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/banner01.png" alt="Primeiro Slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/banner02.png" alt="Segundo Slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/banner03.png" alt="Terceiro Slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>
  </div>
<section class="livros">
   <div class="container">
    <div class="mt-5">
      <h1>Novidades</h1>
    </div>
      <?php
      $sql = "SELECT * FROM livros";
      $query = $db->prepare($sql);
      $query->execute();
      ?>
       <div class="row py-5 mb-5 text-center">
      <?php  while($result = $query->fetch(PDO:: FETCH_ASSOC)){ ?>
     <div class="item-livro  col-lg-3 col-md-4 col-sm-6  "><img src="<?=  $result['imagem']; ?>" alt="">
      <p class="mt-2"><span><?=  $result['nome']; ?></span> </p>
        <p class=""><span>Autor: <?=   $result['autor']; ?></span> </p>
        <p class=""><span>R$<?=  $result['preco']; ?></span> </p>
        <button class="btn btn-primary">Comprar</button>
        </div>
     <?php  } ?>
     </div>
     

    
   
    
  </div> <!--Fim container livros-->

</section>
 
    <div class="container">
    <form class="mt-5" action="utils/salvarContato.php" method="POST">
      <h1>Preencha o formulário para entrar em contato</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum reiciendis eveniet, similique obcaecati qui corporis dolore quisquam placeat incidunt facilis? Facere aspernatur dolorum vitae sequi ut at doloremque, quia aut.</p>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="input-nome">Nome</label>
          <input type="text" class="form-control" name="nome" id="input-nome" placeholder="Insira seu nome">
        </div>
        <div class="form-group col-md-6">
          <label for="input-email">E-mail</label>
          <input type="email" class="form-control" name="email" id="input-email" placeholder="Email@exemplo.com">
        </div>
        <div class="form-group col-md-12">
          <label for="textarea-mensagem">Mensagem</label>
          <textarea name="mensagem" class="form-control" id="textarea-mensagem" rows="10" placeholder="Insira sua mensagem aqui..."></textarea>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <div class="pt-5">
      <h1>Localização</h1>
      <p>Verifique a localização da nossa biblioteca</p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.983057080286!2d-46.64885008593059!3d-23.569051984679056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59be874e1f11%3A0x3b0b41a1b5ea3fd!2sBiblioteca!5e0!3m2!1spt-BR!2sbr!4v1565381574508!5m2!1spt-BR!2sbr" width="100%" height="450px" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
  <?php require_once("inc/footer.php"); ?>
</body>
</html>