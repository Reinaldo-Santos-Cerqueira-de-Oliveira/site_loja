<?php require_once("../conexao/conexao.php");?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Site Loja</title>
  	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
  <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <!--CSS-->
  <link rel="stylesheet" href="css/style.css">
  <!-- Fonts google-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap">
  <script src="js/script.js" defer></script>
</head>
<body>
  <form action="">
    <img src="images/6ba9b497-0ee8-4fe5-945e-ea2f45e6db93_200x200 (1).png" alt="" style="height: 100%; width: 100%; max-width: 200px; max-height: 200px; margin-left: auto; margin-right: auto;">
    <h2 style="text-align: center;">
      Sign In
    </h2>
    <div class="input">
      <input required type="email"/>
      <label style>Email</label>
      <span class="error"></span>
    </div>
    <div class="input">
      <input required type="password" minlength="6" maxlength="10"/>
      <label style>Senha</label>
      <span class="error"></span>
    </div>
    <button type="submit">Sign in</button>
    <div class="social-icons">
      <div class="social_icon">
        <h6> Ainda não possui conta?<a href="cadastro.php">Clique aqui</a></h6>
        <h6>Ou escolha alguma dessas redes socias</h6>
        <span><a href=""><i class="fab fa-facebook-square"></i></a></span>
        <span><a href=""><i class="fab fa-google-plus-square"></i></a></span>
      </div>
    </div>
  </form>
</body>
</html>