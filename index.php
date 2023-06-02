<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de Login</title>
    <!--Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="card">
              <div class="card-body">
                  <form action="login.php" method="POST">
                      <div>
                          <div class="mb-3">
                              <label>Usuário</label>
                              <input type="text" name="usuario" class="form-control">
                          </div>
                      </div>
                      <div>
                          <div class="mb-3">
                              <label>Senha</label>
                              <input type="password" name="senha" class="form-control">
                          </div>
                      </div>
                      <div>
                          <div class="mb-3">
                              <button type="submit" class="btn btn-primary">Enviar</button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
        </div>
    </div>
</div>
</body>
</html>