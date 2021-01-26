<?php require_once("../conexao/conexao.php");?>
<?php
  if(isset($_POST["nome_produto"])){
      $nome_produto = $_POST["nome_produto"];
      $descricao    = $_POST["descricao"];
      $preco        = $_POST["preco"];
      $estoque      = $_POST["estoque"];

      $inserir  = "INSERT INTO produtos ";
      $inserir .= " (nome, descricao, preco,estoque) ";
      $inserir .= " VALUES ";
      $inserir .= " ('$nome', '$descricao', $preco, '$estoque')";
      $operecao_inserir   =  mysqli_query($conecta, $inserir);
      if(!$operecao_inserir){
        die("falha na consulta ao banco");  
      }else{
        header("Location:cadastro_produtos.php");
      }
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <form action="cadastro_produtos.php" method="post">
    <img src="images/6ba9b497-0ee8-4fe5-945e-ea2f45e6db93_200x200 (1).png" alt="" style="height: 100%; width: 100%; max-width: 200px; max-height: 200px; margin-left: auto; margin-right: auto;">
    <h2 style="text-align: center;">
      Cadastro de produtos
    </h2>
        <div class="input">
            <input required name="nome_produto" id="nome_produto" type="text"/>
            <label for="nome_produto">Nome do produto</label>
            <span class="error"></span>

        </div>        
        <div class="input">
            <input required name="descricao" id="descricao" type="text"/>
            <label for="descricao">Descricao</label>
        </div>        
        <div class="input">
            <input required name="preco" id="preco" type="number"/>
            <label for="preco">Preço do produto</label>
        </div>       
        <div class="input">
            <input required name="estoque" id="estoque" type="text"onkeypress="return event.charCode >= 48 && event.charCode <= 57"/>
            <label for="estoque">Estoque</label>
        </div>
        <div class="input">
            <input required name="imagem_grande" id="imagem_grande" type="file"/>
            <label for="imagem_grande">Imagem grande</label>
        </div>
        <div class="input">
        <input required name="imagem_pequena" id="imagem_pequena" type="file"/>
            <label for="imagem_pequena">Imagem pequena</label>
        </div>
        <button type="submit">Cadastrar produto</button>
    </form>
</body>
</html>