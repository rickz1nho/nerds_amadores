<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="post/css/base.css">
    <link rel="stylesheet" href="post/css/vendor.css">
    <link rel="stylesheet" href="post/css/main.css">

    <!-- script
    ================================================== -->
    <script src="post/js/modernizr.js"></script>
    <script src="post/js/pace.min.js"></script>

</head>



<?php
require_once __DIR__ . "/config.php";
require_once __DIR__ . "/app/repositories/UserRepository.php";
if (isset($_SESSION['usuario'])) {
    header("location: {$base_path}/index.php?msg=1");
}
?>

<body id="top">

    <!-- pageheader
================================================== -->
    <div class="s-pageheader">

        <header class="header">
            <div class="header__content row">

                <div class="header__logo">
                    <a class="logo" href="index.php">
                        <img src="post/images/logo.png" alt="Homepage">
                    </a>

                </div> <!-- end header__logo -->

                <a class="hieader__search-trigger" href="login_page.php"></a>

                <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

                <nav class="header__nav-wrap">

                    <h2 class="header__nav-heading h6">Site Navigation</h2>

                    <ul class="header__nav">
                        <li><a href="index.php" title="">Página Principal</a></li>
                        <li class="has-children">
                            <a href="#0" title="">Categorias</a>
                            <ul class="sub-menu">
                                <li><a href="category.html">Cripto</a></li>
                                <li><a href="category.html">Software</a></li>
                                <li><a href="category.html">Hardware</a></li>
                                <li><a href="category.html">Tecnlogias em Geral</a></li>
                            </ul>
                        </li>
                        <li><a href="sobrenos.php" title="">Sobre Nós</a></li>
                    </ul> <!-- end header__nav -->

                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

                </nav> <!-- end header__nav-wrap -->

            </div> <!-- header-content -->
        </header> <!-- header -->

    </div> <!-- end s-pageheader -->


    <!-- s-content
================================================== -->
    <section class="s-content s-content--narrow s-content--no-padding-top">
        <div class="row format-standard">


            <?php
            require_once __DIR__ . "/config.php";
            if (isset($_SESSION['usuario'])) {
                header("location: {$base_path}/index.php?msg=1");
            }
            ?>

            <div class="s-content__header col-full">

                <h2 class="add-bottom text-center">Cadastro</h3>

                    <form action="app/controllers/userController.php?action=register" method="POST">
                        <div>
                            <label class="text-left" for="sampleInput">Insira seu nome</label>
                            <input class="full-width" type="text" placeholder="Anderson Cardoso" id="sampleInput" name="field_nome_cadastro">
                        </div>
                        <div>
                            <label class="text-left" for="sampleInput">Escolha um usuário</label>
                            <input class="full-width" type="text" placeholder="wuju333" id="sampleInput" name="field_usuario_cadastro">
                        </div>
                        <div>
                            <label class="text-left" for="sampleInput">Insira um email</label>
                            <input class="full-width" type="email" placeholder="jubirainer@gmail.com" id="sampleInput" name="field_email_cadastro">
                        </div>
                        <div>
                            <label class="text-left" for="sampleInput">Escolha uma senha</label>
                            <input class="full-width" type="password" placeholder="coxinha123" id="sampleInput" name="field_senha_cadastro">
                        </div>

                        <input class="btn btn--primary full-width" type="submit" value="REGISTRAR">

                    </form>

                    <p>Ja tem uma conta registrada? <a href="login_page.php">Entre aqui</a></p>

            </div>

    </section> <!-- s-content -->



    <!-- s-footer
================================================== -->
    <footer class="s-footer">
        <div class="s-footer__bottom">
            <div class="row">
                <div class="col-full">
                    <div class="s-footer__copyright">
                        <span>© Nerds Amadores 2022</span><br>
                        <span>Feito por <a href="https://instagram.com/gabxdinizz" target="_blank">Gabriel Diniz</a></span><br>
                        <span>Feito por <a href="https://instagram.com/anthonyvogado" target="_blank">Anthony Vogado</a></span><br>
                        <span>Feito por <a href="https://instagram.com/rickz1nho" target="_blank">Matheus Ferreira</a></span><br>
                        <span>Feito por Guilherme Royer</span>
                    </div>

                    <div class="go-top">
                        <a class="smoothscroll" title="Back to Top" href="#top"></a>
                    </div>
                </div>
            </div>
        </div> <!-- end s-footer__bottom -->


    </footer> <!-- end s-footer -->


    <!-- preloader
================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>


    <!-- Java Script
================================================== -->
    <script src="js/post/jquery-3.2.1.min.js"></script>
    <script src="js/post/plugins.js"></script>
    <script src="js/post/main.js"></script>

</body>

</html>