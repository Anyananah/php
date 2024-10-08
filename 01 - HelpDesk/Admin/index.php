<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HelpDesk</title>

    <link rel="stylesheet" href="../Assets/Css/bootstrap.min.css">
    
    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>

</head>
<body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
      <img src="../Assets/Img/logo.png" width="30" height="30" class="d-inline-block-align-top">
      Help Desk
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="valida_login.php" method="post">
                <div class="form-group">
                  <input name="Email" type="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                  <input name="Senha" type="password" class="form-control" placeholder="Senha">
                </div>

                <?php if(isset($_GET['login']) && $_GET['login'] == 'error'){?>
                  <div class="text-danger">
                    Usuário ou senha inválido!
                  </div>
                <?php };?>

                <?php if(isset($_GET['login']) && $_GET['login'] == 'error2'){?>
                  <div class="text-danger">
                    Faça o login antes de acessar a página.
                  </div>
                <?php };?>

                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
    
</body>
</html>