<?php require_once("../conexao/conexao.php");?>
<?php
  if(isset($_POST["nome"])){
      $nome     = $_POST["nome"];
      $senha    = $_POST["senha"];
      $email    = $_POST["email"];
      $inserir  = "INSERT INTO clientes ";
      $inserir .= " (nome, email, senha) ";
      $inserir .= " VALUES ";
      $inserir .= " ('$nome', '$email','$senha')";
      $operecao_inserir   =  mysqli_query($conecta, $inserir);
      if(!$operecao_inserir){
        die("falha na consulta ao banco");  
      }else{
        header("Location:index.php");
      }
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login validação js</title>
  	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
  <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <!--CSS-->
  <link rel="stylesheet" href="css/style.css">
  <!-- Fonts google-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap">
  <script src="js/script_cadastro.js" defer></script>
</head>

<body>
  <form action="cadastro.php" method="post" >
    <img src="images/6ba9b497-0ee8-4fe5-945e-ea2f45e6db93_200x200 (1).png" alt="" style="height: 100%; width: 100%; max-width: 200px; max-height: 200px; margin-left: auto; margin-right: auto;">
    <h2 style="text-align: center;">
      Sign Up
    </h2>
    <div class="input">
        <input required type="text" id="nome" name="nome"minlength="5" autocomplete="off"/>
        <label for="nome">Nome</label>
        <span class="error"></span>
      </div>
    <div class="input">
      <input required name="email" id="email" type="email" autocomplete="off"/>
      <label for="email">Email</label>
      <span class="error"></span>
    </div>
    <div class="input">
      <input required type="password" name="senha" id="senha" minlength="6" maxlength="10" id="senha" autocomplete="off"/>
      <label for="senha">Senha</label>
      <span class="error"></span>
    </div>
    <h6 style="text-align:end">Ja tem conta?<a href="index.php">Clique aqui</a></h6>
    <button type="submit">Cadastrar</button>
  </form>
</body>
</html>