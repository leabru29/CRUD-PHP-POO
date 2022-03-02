<?php 
use \App\Session\Login;

$usuarioLogado = Login::obterUsuarioLogado();

$usuario = $usuarioLogado ? $usuarioLogado['name'].'<a href="logout.php" class="text-light font-weight-bold mx-2">Sair</a>' : '<a href="login.php" class="font-weight-bold text-light mx-2">Entrar</a>';

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD com PHP</title>
  </head>
  <body class="bg-secondary text-light">
    <div class="container">
      <div class="jumbotron text-center bg-primary">
        <h1>Sistema de cadastro em PHP</h1>
        <p>Exemplo de CRUD em PHP</p>

        <hr class="border-light">
        <div class="d-flex justify-content-start m-2">
          <?=$usuario?>
        </div>
      </div>
    
