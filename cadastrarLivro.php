<?php require_once("inc/head.php"); ?>
  <?php require_once("inc/header.php") ?>
  <?php require_once("config/conn.php");?>

    <?php
  if ($_REQUEST) {
    $nome = $_REQUEST["nome"];
    $email = $_REQUEST["autor"];
    $preco = $_REQUEST["preco"];

    if ($_FILES) {
      if($_FILES["livro"]["error"] == UPLOAD_ERR_OK) {
        $nomeImg = $_FILES["livro"]["name"];
        $nomeTemp = $_FILES["livro"]["tmp_name"];
        $pastaRaiz = dirname(__FILE__) . "/" ;
        $nomePasta = "img/uploads/";
        $caminhoCompleto = $pastaRaiz . $nomePasta . $nomeImg;
        move_uploaded_file($nomeTemp, $caminhoCompleto);
        $imagem = $nomePasta . $nomeImg;
      }
    }
 
$sql = "INSERT INTO  livros (nome, autor, imagem, preco) 
  values (:nome, :autor, :imagem, :preco)";

  $query = $db->prepare($sql);

  $salvou = $query->execute([
    ":nome" => $nome,
    ":autor" => $email,
    ":imagem"=>$imagem,
    ":preco" =>$preco
  ]); 
   }

?>

<?php if(isset($salvou) && $salvou == true):?>
    <div class="alert alert-success col-sm-12 m-auto my-5 text-center">Livro cadastrado com sucesso</div>
  <?php else : ?>
      <div class="alert alert-danger col-sm-12 m-auto my-5 text-center">Erro ao cadastrar livro</div>
<?php endif; ?>

<div class="container d-flex justify-content-center">
  <div class="cadastro-livro pt-5 w-50">
<form action="cadastrarLivro.php" method="post" class="" enctype="multipart/form-data">
      <div class="col-md-12">
        <label for="exampleInputNome">Nome do Livro</label>
        <input type="text" name="nome" class="form-control" id="inputNome" placeholder="Insira nome do livro">
      </div>
      <div class="col-md-12">
        <label for="exampleInputEmail1">Autor do Livro</label>
        <input type="text" name="autor" class="form-control" id="inputAutor" placeholder="Insira o autor do livro">
      </div>
       <div class="col-md-12">
        <label for="exampleInputEmail1">Preço livro</label>
        <input type="number" name="preco" class="form-control" id="inputAutor" placeholder="Insira o autor do livro">
      </div>
      <div class="col-md-12">
        <label for="inputFoto">Insira a imagem do livro</label>
        <input type="file" name="livro" class="form-control" id="inputFoto">
      </div>
      <div class="col-md-12 mt-3">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <a class="col-md-offset-9" href="login.php">Fazer login!</a>
      </div>
    </form>

    </div>

    </div>