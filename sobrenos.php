<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Nerds Amadores</title>
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

<body id="top">
    <!-- pageheader
    ================================================== -->
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

    <body id="top">

        <div class="s-pageheader">

            <header class="header">
                <div class="header__content row">

                    <div class="header__logo">
                        <a class="logo" href="index.php">
                            <img src="post/images/logo.png" alt="Homepage">
                        </a>

                    </div> <!-- end header__logo -->

                    <?php
                    if (!isset($_SESSION['usuario'])) {
                    ?>
                        <a class="h1eader__search-trigger" href="cadastro_usuario.php"></a>
                        <a class="hieader__search-trigger" href="login_page.php"></a>
                    <?php
                    } else {
                    ?>
                        <a class="h2eader__search-trigger" href="meuperfil.php"></a>
                        <form name="logout" action="app/controllers/logout.php" method="POST">

                            <a class="h3eader__search-trigger" href="javascript: submitform()"></a>
                        </form>

                        <script type="text/javascript">
                            function submitform() {
                                document.logout.submit();
                            }
                        </script>
                    <?php
                    }
                    ?>


                    <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

                    <nav class="header__nav-wrap">

                        <h2 class="header__nav-heading h6">Site Navigation</h2>

                        <ul class="header__nav">
                            <li><a href="index.php" title="">Página Principal</a></li>
                            <li class="has-children">
                                <a href="#0" title="">Categorias</a>
                                <ul class="sub-menu">
                                    <li><a href="category.php?cat=1">Cripto</a></li>
                                    <li><a href="category.php?cat=2">Software</a></li>
                                    <li><a href="category.php?cat=3">Hardware</a></li>
                                    <li><a href="category.php?cat=4">Tecnlogias em Geral</a></li>
                                </ul>
                            </li>
                            <li><a href="sobrenos.php" title="">Sobre nós</a></li>
                        </ul> <!-- end header__nav -->

                        <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

                    </nav> <!-- end header__nav-wrap -->

                </div> <!-- header-content -->
            </header> <!-- header -->

        </div> <!-- end s-pageheader -->


        <section class="s-content s-content--narrow s-content--no-padding-bottom">
            <div class="row">

                <div class="s-content__header col-full">
                    <h1 class="s-content__header-title">
                        Um pouco mais sobre nós...
                    </h1>
                </div> <!-- end s-content__header -->

                <div class="s-content__media col-full">
                    <div class="s-content__post-thumb text-center">
                        <img src="images/Screenshot_3.png" style="width:65%;">
                    </div>
                </div> <!-- end s-content__media -->

                <div class="col-full s-content__main">

                    <p class="lead">Um grupo de alunos do IFPR/Foz com um potencial de desenvolvimento inimaginável.</p>

                    <p></p>
                </div> <!-- end s-content__main -->

            </div> <!-- end row -->

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
        <script src="post/js/jquery-3.2.1.min.js"></script>
        <script src="post/js/plugins.js"></script>
        <script src="post/js/main.js"></script>

    </body>

    </html>