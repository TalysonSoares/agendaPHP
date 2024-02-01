<?php

    include_once('config/url.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
        <title>Agenda de Contatos</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="<?= $BASE_URL ?>index.php">
                    <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Logo">
                </a>
                <div>
                    <div class="navbar-nav">
                        <a id="home-link" class="nav-link" href="<?= $BASE_URL ?>index.php">Agenda</a>
                        <a id="home-link" class="nav-link" href="<?= $BASE_URL ?>create.php">Adicionar Contato</a>
                    </div>
                </div>
            </nav>
        </header>