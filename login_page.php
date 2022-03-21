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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

</head>



<?php
require_once __DIR__ . "/config.php";
require_once __DIR__ . "/app/repositories/UserRepository.php";
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

                <a class="h1eader__search-trigger" href="cadastro_usuario.php"></a>

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
                        <li><a href="about.html" title="">Sobre Nós</a></li>
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

            if (!empty($_GET['msg'])) {
                $link = $_GET['msg'];
                if ($link == 1) {
            ?><div class="alert-box alert-box--error hideit">
                        <p>Usuário ou senha Inválido!</p>
                    </div> <!-- end error -->
                <?php
                } elseif ($link == 2) {
                ?>
                    <div class="alert-box alert-box--error hideit">
                        <p>Usuário ou senha Vazios!</p>
                    </div> <!-- end error --><?php
                                            } else {
                                                echo "";
                                            }
                                        } else
                                                ?>

            <div class="s-content__header col-full">

                <h2 class="add-bottom text-center">Login</h3>

                    <form action="app/controllers/login_controller.php" method="POST">
                        <div>
                            <label class="text-left" for="sampleInput">Seu usuário</label>
                            <input class="full-width" type="text" placeholder="redBaron980" id="sampleInput" name="field_usuario">
                        </div>
                        <div>
                            <label class="text-left" for="sampleInput">Sua senha</label>
                            <input class="full-width" type="password" placeholder="coxinha123" id="sampleInput" name="field_senha">

                        </div>
                        <input class="btn--primary full-width" type="submit" value="ENTRAR">

                    </form>


                    <p>Caso não tenha uma conta, <a href="cadastro_usuario.php">cadastre-se</a></p>

            </div>

    </section> <!-- s-content -->



    <!-- s-footer
================================================== -->
    <footer class="s-footer">
        <div class="s-footer__bottom">
            <div class="row">
                <div class="col-full">
                    <div class="s-footer__copyright">
                        <span>© Macholandia 2022</span>
                        <span>FrontEnd feito pelo monstro <a href="https://twitter.com/xdinizz_" target="_blank">Gabriel Deniz</a>
                        </span>
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
    <script src="post/js/jquery-3.2.1.min.js"></script>
    <script src="post/js/plugins.js"></script>
    <script src="post/js/main.js"></script>

</body>

</html>