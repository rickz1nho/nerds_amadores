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
    <link rel="stylesheet" href="css/post/base.css">
    <link rel="stylesheet" href="css/post/vendor.css">
    <link rel="stylesheet" href="css/post/main.css">

    <!-- script
    ================================================== -->
    <script src="js/post/modernizr.js"></script>
    <script src="js/post/pace.min.js"></script>

</head>



<?php
require_once __DIR__ . "/config.php";
require_once __DIR__ . "/app/repositories/UserRepository.php";
$repository = new UserRepository();
?>

<body id="top">

    <!-- pageheader
================================================== -->
    <div class="s-pageheader">

        <header class="header">
            <div class="header__content row">

                <div class="header__logo">
                    <a class="logo" href="index.html">
                        <img src="images/logo.svg" alt="Homepage">
                    </a>
                </div> <!-- end header__logo -->


                <div class="header__search">
                </div> <!-- end header__search -->


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
                        <li><a href="about.html" title="">About</a></li>
                    </ul> <!-- end header__nav -->

                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

                </nav> <!-- end header__nav-wrap -->

            </div> <!-- header-content -->
        </header> <!-- header -->

    </div> <!-- end s-pageheader -->

    <div class="pageheader-content row">
    <?php $lastPost = $repository->getLastPostId(); 
        $img = $repository->getImagemById($lastPost);

        $previous1 = $repository->getPreviousPostId($lastPost);
        $img2 = $repository->getImagemById($previous1);

        $previous2 = $repository->getPreviousPostId($previous1);
        $img3 = $repository->getImagemById($previous2);

        $previous3 = $repository->getPreviousPostId($previous2); 
        $img4 = $repository->getImagemById($previous3);

        $previous4 = $repository->getPreviousPostId($previous3);
        $img5 = $repository->getImagemById($previous4);

        $previous5 = $repository->getPreviousPostId($previous4);
        $img6 = $repository->getImagemById($previous5);

        $previous6 = $repository->getPreviousPostId($previous5);
        $img6 = $repository->getImagemById($previous6);

        $previous7 = $repository->getPreviousPostId($previous6);
        $img6 = $repository->getImagemById($previous7);

        $previous8 = $repository->getPreviousPostId($previous7);
        $img6 = $repository->getImagemById($previous8);
    ?>
        <div class="col-full">

            <div class="featured">

                <div class="featured__column featured__column--big">

                    <div class="entry" style="background-image:url('<?php echo $img ?>');">

                        <div class="entry__content">
                            <span class="entry__category"><a href="#0"><?php echo $repository->getCategoriaById($lastPost); ?></a></span>

                            <h1><a href="post.php?id=<?php echo $lastPost ?>" title=""><?php echo $repository->getTituloById($lastPost); ?></a></h1>

                            <div class="entry__info">
                                <a href="#0" class="entry__profile-pic">
                                    <img class="avatar" src="images/avatars/user-03.jpg" alt="">
                                </a>

                                <ul class="entry__meta">
                                    <li><a href="#0"><?php echo $repository->getAutorById($lastPost); ?></a></li>
                                    <li><?php echo $repository->getDataById($lastPost); ?></li>
                                </ul>
                            </div>
                        </div> <!-- end entry__content -->

                    </div> <!-- end entry -->
                </div> <!-- end featured__big -->

                <div class="featured__column featured__column--small">

                    <div class="entry" style="background-image:url('<?php echo $img2 ?>');">

                        <div class="entry__content">
                            <span class="entry__category"><a href="#0"><?php echo $repository->getCategoriaById($previous1); ?></a></span>

                            <h1><a href="post.php?id=<?php echo $previous1 ?>" title=""><?php echo $repository->getTituloById($previous1); ?></a></h1>

                            <div class="entry__info">
                                <a href="#0" class="entry__profile-pic">
                                    <img class="avatar" src="images/avatars/user-03.jpg" alt="">
                                </a>

                                <ul class="entry__meta">
                                    <li><a href="#0"><?php echo $repository->getAutorById($previous1); ?></a></li>
                                    <li><?php echo $repository->getDataById($previous1); ?></li>
                                </ul>
                            </div>
                        </div> <!-- end entry__content -->

                    </div> <!-- end entry -->

                    <div class="entry" style="background-image:url('<?php echo $img3 ?>');">

                        <div class="entry__content">
                            <span class="entry__category"><a href="#0"><?php echo $repository->getCategoriaById($previous2); ?></a></span>

                            <h1><a href="post.php?id=<?php echo $previous2 ?>" title=""><?php echo $repository->getTituloById($previous2); ?></a></h1>

                            <div class="entry__info">
                                <a href="#0" class="entry__profile-pic">
                                    <img class="avatar" src="images/avatars/user-03.jpg" alt="">
                                </a>

                                <ul class="entry__meta">
                                    <li><a href="#0"><?php echo $repository->getAutorById($previous2); ?></a></li>
                                    <li><?php echo $repository->getDataById($previous2); ?></li>
                                </ul>
                            </div>
                        </div> <!-- end entry__content -->

                    </div> <!-- end entry -->

                </div> <!-- end featured__small -->
            </div> <!-- end featured -->

        </div> <!-- end col-full -->
    </div> <!-- end pageheader-content row -->


    <!-- s-footer
================================================== -->
    <footer class="s-footer">
        <div class="s-footer__bottom">
            <div class="row">
                <div class="col-full">
                    <div class="s-footer__copyright">
                        <span>© Macholandia 2022</span>
                        <span>FrontEnd feito pelo monstro <a href="https://twitter.com/xdinizz_">Gabriel Deniz</a>
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
    <script src="js/post/jquery-3.2.1.min.js"></script>
    <script src="js/post/plugins.js"></script>
    <script src="js/post/main.js"></script>

</body>

</html>