<?php require 'config.php'?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Classificados</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="./" class="navbar-brand">Classificados</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
                        <li><a href="meus-anuncios.php">Meus Anúncios</a></li>
                        <li><a href="sair.php">Sair</a></li>
                    <?php else: ?>
                        <li><a href="cadastre-se.php">Cadastra-se</a></li>
                        <li><a href="login.php">Login</a></li>
                    <?php endif; ?>
                </ul>
            </div>              
        </nav>