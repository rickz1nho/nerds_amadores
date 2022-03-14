<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/0a30d20add.js" crossorigin="anonymous"></script>
    <!-- Codigo copiado-->
    <link href="assets/css/external.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Termino do codigo copiado-->

    <title>Notícias de Tecnlogia</title>
</head>

<body>

    <!--<div class="preloader">
        <div class="loader-eclipse">
            <div class="loader-content"></div>
        </div>
    </div>-->
    <div id="wrapper" class="wrapper clearfix">
        <div id="top-bar" class="top-bar bitcoin-tracker-dark">
            <div class="container-fluid pr-0 pl-0">
                <div class="row clearfix">
                    <div class="topbarBitcoinTracker"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark py-4 h-25">
        <div class="row">
            <div class="col">
                <h3 class="text-white">Notícias de Tecnlogia</h1>

            </div>
            <script src="assets/js/jquery-3.3.1.min.js"></script>
            <script src="assets/js/plugins.js"></script>
            <script src="assets/js/bitcoinPriceWidgets.js"></script>
            <script src="assets/js/bitcoinPrice.js"></script>
            <script src="assets/js/bitcoinTracker.js"></script>
            <?php

            require_once __DIR__ . "/config.php";
            require_once __DIR__ . "/app/repositories/UserRepository.php";
            if (isset($_SESSION['usuario'])) {
            ?>
                <div class="col mt-2">
                    <p class="text-white"> Olá, <?= $_SESSION['usuario']['nome'] ?>
                        @<?= $_SESSION['usuario']['usuario'] ?></p>
                </div>
            <?php } ?>


            <?php
            if (!isset($_SESSION['usuario'])) {
            ?>
                <div class="col">
                    <a class="btn btn-default text-white" href='login_page.php'>Realizar login </a>

                    <a class="btn btn-default text-white" href='cadastro_usuario.php'>Cadastre-se</a>
                </div>
            <?php
            } else {
            ?>
                <div class="col">
                    <a class="btn btn-default text-white" href='valida_login.php'>Meu perfil</a>
                </div>

            <?php
            }


            $repository = new UserRepository();
            $titulo = $repository->view(1);
            $id = $repository->getPubliId($titulo);

            echo "<a href='post.php?id=$id'>" . $repository->view(2) . "</a>" ?>

            <?php
            if (!empty($repository->getPubliId($titulo))) {

                echo '<form action="app/controllers/controllerForm.php?action=delete&msg=' . $titulo . '" method="POST">
                <button type="submit" class="button-67" onclick="return confirm(`Tem certeza que deseja deletar essa publicacao?`)">Deletar pulicação</button>

                </form>';
            }
            ?>

        </div>
    </div>
    <br>
    <br>
</body>

</html>