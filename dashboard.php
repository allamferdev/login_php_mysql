<?php
session_start();
if(empty($_SESSION)){
    print "<script>location.href='index.php'</script>";
}
?>

<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de Login</title>
    <!--Estilo-->
    <link rel="stylesheet" href="assets/style.css">
    <!--Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">Sistema Administrativo</a>
            <?php
                print "Olá, " . $_SESSION['nome'];
                print "<a href='logout.php' class='btn btn-danger'>Sair</a>";
            ?>
        </div>
    </nav>
</body>
</html>