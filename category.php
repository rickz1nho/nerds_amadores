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



<?php
require_once __DIR__ . "/config.php";
require_once __DIR__ . "/app/repositories/UserRepository.php";
$repository = new UserRepository();
$cat = $_GET['cat'];
if ($cat == 1) {
    $categoria = " Cripto";
} elseif ($cat == 2) {
    $categoria = " Software";
} elseif ($cat == 3) {
    $categoria = " Hardware";
} elseif ($cat == 4) {
    $categoria = " Tecnologias em Geral";
};
?>

<body id="top">

    <!-- pageheader
================================================== -->
    <div class="s-pageheader add-bottom">

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
                        <li><a href="#sobrenos" title="">About</a></li>
                    </ul> <!-- end header__nav -->

                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

                </nav> <!-- end header__nav-wrap -->

            </div> <!-- header-content -->
        </header> <!-- header -->

    </div> <!-- end s-pageheader -->
    <section class="s-content">

        <div class="row narrow">
            <div class="col-full s-content__header" data-aos="fade-up">
                <h1> <?php echo $categoria ?> </h1>
            </div>
        </div>

        <div class="row masonry-wrap">
            <div class="masonry">

                <div class="grid-sizer"></div>

                <?php

                $lastPost = $repository->getLastPostIdWCat($categoria);
                $todos = $repository->countPostsByCat($categoria);
                $i = $lastPost + 1;
                $j = 1;

                do {
                    $i = $repository->getPreviousPostIdWCat($i, $categoria);
                    $j++;
                    $img = $repository->getImagemById($i);
                ?>

                    <article class="masonry__brick entry format-standard" data-aos="fade-up">

                        <div class="entry__thumb">
                            <a href="post.php?id=<?php echo $i ?>" class="entry__thumb-link">
                                <img src="<?php echo $img ?>" srcset="<?php echo $img ?> 1x, <?php echo $img ?> 2x" alt="">
                            </a>
                        </div>

                        <div class="entry__text">
                            <div class="entry__header">

                                <div class="entry__date">
                                    <a href="post.php?id=<?php echo $i ?>"><?php echo $repository->getDataById($i); ?></a>
                                </div>
                                <h1 class="entry__title"><a href="post.php?id=<?php echo $i ?>"><?php echo $repository->getTituloById($i); ?></a>
                                </h1>

                            </div>
                            <div class="entry__excerpt">
                                <p>
                                    <?php echo $repository->getAutorById($i); ?>
                                </p>
                            </div>
                            <div class="entry__meta">
                                <span class="entry__meta-links">
                                    <a href="category.html"><?php echo $repository->getCategoriaById($i); ?></a>
                                </span>
                            </div>
                        </div>

                    </article> <!-- end article -->
                <?php } while ($j <= $todos); ?>
            </div> <!-- end masonry -->
        </div> <!-- end masonry-wrap -->
    </section> <!-- s-content -->

    <!-- s-extra
    ================================================== -->
    <section class="s-extra">

        <div class="row top" id="sobrenos">
            <div class="col-full text-center md-six tab-full about">
                <h3>Sobre Nerds Amadores...</h3>

                <p>
                    Um blog feito com muito carinho, especialmente para a professora Marcela Turim Koshevic.
                </p>
            </div> <!-- end about -->

        </div> <!-- end row -->

        <div class="row bottom tags-wrap">
            <div class="col-full tags">
                <h3>Categorias</h3>

                <div class="tagcloud">
                    <a href="category.php?cat=1">Criptomoedas</a>
                    <a href="category.php?cat=2">Software</a>
                    <a href="category.php?cat=3">Hardware</a>
                    <a href="category.php?cat=4">Tecnologias no Geral</a>
                </div> <!-- end tagcloud -->
            </div> <!-- end tags -->
        </div> <!-- end tags-wrap -->

    </section> <!-- end s-extra -->



    <!-- s-footer
================================================== -->
    <footer class="s-footer">
        <div class="s-footer__bottom">
            <div class="row">
                <div class="col-full">
                    <div class="s-footer__copyright">
                        <span>© Nerds Amadores 2022</span><br>
                        <span>FrontEnd feito pelo monstro <a href="https://instagram.com/gabxdinizz" target="_blank">Gabriel Diniz</a></span><br>
                        <span>BackEnd feito pelo monstro <a href="https://instagram.com/anthonyvogado" target="_blank">Anthony Vogado</a></span><br>
                        <span>BackEnd feito pelo monstro <a href="https://instagram.com/rickzinho" target="_blank">Matheus Ferreira</a></span><br>
                        <span>Modelagem e documentação feita pelo monstro Guilherme Royer</span>
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