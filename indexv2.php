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

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
    <!-- WGCodigo copiado-->
    <link href="assets/css/external.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Termino do codigo copiado-->
=======
    <!-- Codigo copiado-->

    <!-- Termino do codigo copiado-->
>>>>>>> b3f1afa6f0394c54f32fa2326cd42f762021ebdc
=======
    <!-- Codigo copiado-->

    <!-- Termino do codigo copiado-->
>>>>>>> parent of 87ac19a (hrefs)

</head>
>>>>>>> 702841452d5626635618700aa742bc5252335577

</head>


<?php
require_once __DIR__ . "/config.php";
require_once __DIR__ . "/app/repositories/UserRepository.php";
$repository = new UserRepository();
$lastPost = $repository->getLastPostId();
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

<body>

<div id="wrapper" class="wrapper clearfix ignore-css" style="all:unset;">
        <div id="top-bar" class="top-bar bitcoin-tracker-dark">
            <div class="container-fluid pr-0 pl-0">
                <div class="row clearfix">
                    <div class="topbarBitcoinTracker"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-3.3.1.min.js"></script>
            <script src="assets/js/plugins.js"></script>
            <script src="assets/js/bitcoinPriceWidgets.js"></script>
            <script src="assets/js/bitcoinPrice.js"></script>
            <script src="assets/js/bitcoinTracker.js"></script>

</body>

<body id="top">

<<<<<<< HEAD
    <section class="s-pageheader s-pageheader--home">
=======
    <!-- pageheader
================================================== -->
<<<<<<< HEAD
<<<<<<< HEAD
<div style="height:62px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size: 40px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; padding:1px;padding: 0px; margin: 0px; width: 100%;"><div style="height:40px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=dark&pref_coin_id=3315&invert_hover=no" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div></div>
=======
>>>>>>> 702841452d5626635618700aa742bc5252335577

>>>>>>> b3f1afa6f0394c54f32fa2326cd42f762021ebdc
    <div class="s-pageheader">
=======
>>>>>>> parent of 87ac19a (hrefs)

    <div class="s-pageheader">
    
        <header class="header">
            
            <div class="header__content row">

                <div class="header__logo">
                    <a class="logo" href="index.html">
<<<<<<< HEAD
                        <img src="images/logo.svg" alt="Homepage">
=======
                        <img src="app/controllers/images/logo.png" alt="Homepage">
>>>>>>> 702841452d5626635618700aa742bc5252335577
                    </a>
                </div> <!-- end header__logo -->
                </ul> <!-- end header__social -->

                <div class="header__search">
                </div> <!-- end header__search -->


                <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

                <nav class="header__nav-wrap">

                    <h2 class="header__nav-heading h6">Site Navigation</h2>

                    <ul class="header__nav">
                        <li class="current"><a href="index.html" title="">Home</a></li>
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


        <div class="pageheader-content row">
            <div class="col-full">

                <div class="featured">

                    <div class="featured__column featured__column--big">
                        <div class="entry" style="background-image:url('images/thumbs/featured/featured-guitarman.jpg');">

                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">Music</a></span>

                                <h1><a href="#0" title="">What Your Music Preference Says About You and Your
                                        Personality.</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="images/avatars/user-03.jpg" alt="">
                                    </a>

<<<<<<< HEAD
                                    <ul class="entry__meta">
                                        <li><a href="#0">John Doe</a></li>
                                        <li>December 29, 2017</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->

                        </div> <!-- end entry -->
                    </div> <!-- end featured__big -->

                    <div class="featured__column featured__column--small">
=======
        $previous6 = $repository->getPreviousPostId($previous5);
        $img7 = $repository->getImagemById($previous6);

        $previous7 = $repository->getPreviousPostId($previous6);
        $img8 = $repository->getImagemById($previous7);

        $previous8 = $repository->getPreviousPostId($previous7);
        $img9 = $repository->getImagemById($previous8);
    ?> 
        <div class="col-full">
>>>>>>> 702841452d5626635618700aa742bc5252335577

                        <div class="entry" style="background-image:url('images/thumbs/featured/featured-watch.jpg');">

                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">Management</a></span>

                                <h1><a href="#0" title="">The Pomodoro Technique Really Works.</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="images/avatars/user-03.jpg" alt="">
                                    </a>

                                    <ul class="entry__meta">
                                        <li><a href="#0">John Doe</a></li>
                                        <li>December 27, 2017</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->

                        </div> <!-- end entry -->

                        <div class="entry" style="background-image:url('images/thumbs/featured/featured-beetle.jpg');">

                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">LifeStyle</a></span>

                                <h1><a href="#0" title="">Throwback To The Good Old Days.</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="images/avatars/user-03.jpg" alt="">
                                    </a>

                                    <ul class="entry__meta">
                                        <li><a href="#0">John Doe</a></li>
                                        <li>December 21, 2017</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->

                        </div> <!-- end entry -->

                    </div> <!-- end featured__small -->
                </div> <!-- end featured -->

            </div> <!-- end col-full -->
        </div> <!-- end pageheader-content row -->

    </section> <!-- end s-pageheader -->

    <section class="s-content">

        <div class="row masonry-wrap">
            <div class="masonry">

                <div class="grid-sizer"></div>

                <article class="masonry__brick entry format-standard" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="single-standard.html" class="entry__thumb-link">
                            <img src="<?php echo $img4 ?>" srcset="<?php echo $img4 ?> 1x, <?php echo $img4 ?> 2x" alt="">
                        </a>
                    </div>

                    <div class="entry__text">
                        <div class="entry__header">

                            <div class="entry__date">
                                <a href="single-standard.html"><?php echo $repository->getDataById($previous3); ?></a>
                            </div>
                            <h1 class="entry__title"><a href="single-standard.html"><?php echo $repository->getTituloById($previous3); ?></a>
                            </h1>

                        </div>
                        <div class="entry__excerpt">
                            <p>
                            <?php echo $repository->getAutorById($previous3); ?>
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="category.html"><?php echo $repository->getCategoriaById($previous3); ?></a>
                            </span>
                        </div>
                    </div>

                </article> <!-- end article -->

                <article class="masonry__brick entry format-standard" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="single-standard.html" class="entry__thumb-link">
                        <img src="<?php echo $img5 ?>" srcset="<?php echo $img5 ?> 1x, <?php echo $img5 ?> 2x" alt="">
                        </a>
                    </div>

                    <div class="entry__text">
                        <div class="entry__header">

                            <div class="entry__date">
                                <a href="single-standard.html"><?php echo $repository->getDataById($previous4); ?></a>
                            </div>
                            <h1 class="entry__title"><a href="single-standard.html"><?php echo $repository->getTituloById($previous4); ?></a></h1>

                        </div>
                        <div class="entry__excerpt">
                            <p>
                            <?php echo $repository->getAutorById($previous4); ?>
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="category.html"><?php echo $repository->getCategoriaById($previous4); ?></a>
                            </span>
                        </div>
                    </div>

                </article> <!-- end article -->

                <article class="masonry__brick entry format-standard" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="single-standard.html" class="entry__thumb-link">
                        <img src="<?php echo $img6 ?>" srcset="<?php echo $img6 ?> 1x, <?php echo $img6 ?> 2x" alt="">
                        </a>
                    </div>

                    <div class="entry__text">
                        <div class="entry__header">

                            <div class="entry__date">
                                <a href="single-standard.html"><?php echo $repository->getDataById($previous5); ?></a>
                            </div>
                            <h1 class="entry__title"><a href="single-standard.html"><?php echo $repository->getTituloById($previous5); ?></a></h1>

                        </div>
                        <div class="entry__excerpt">
                            <p>
                            <?php echo $repository->getAutorById($previous5); ?>
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="category.html"><?php echo $repository->getCategoriaById($previous5); ?></a>
                            </span>
                        </div>
                    </div>

                </article> <!-- end article -->

                <article class="masonry__brick entry format-standard" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="single-standard.html" class="entry__thumb-link">
                        <img src="<?php echo $img7 ?>" srcset="<?php echo $img7 ?> 1x, <?php echo $img7 ?> 2x" alt="">
                        </a>
                    </div>

                    <div class="entry__text">
                        <div class="entry__header">

                            <div class="entry__date">
                                <a href="single-standard.html"><?php echo $repository->getDataById($previous6); ?></a>
                            </div>
                            <h1 class="entry__title"><a href="single-standard.html"><?php echo $repository->getTituloById($previous6); ?></a></h1>

                        </div>
                        <div class="entry__excerpt">
                            <p>
                            <?php echo $repository->getAutorById($previous6); ?>
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#"><?php echo $repository->getCategoriaById($previous6); ?></a>
                            </span>
                        </div>
                    </div>

                </article> <!-- end article -->

                <article class="masonry__brick entry format-standard" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="single-standard.html" class="entry__thumb-link">
                        <img src="<?php echo $img8 ?>" srcset="<?php echo $img8 ?> 1x, <?php echo $img8 ?> 2x" alt="">
                        </a>
                    </div>

                    <div class="entry__text">
                        <div class="entry__header">

                            <div class="entry__date">
                                <a href="single-video.html"><?php echo $repository->getDataById($previous7); ?></a>
                            </div>
                            <h1 class="entry__title"><a href="single-video.html"><?php echo $repository->getTituloById($previous7); ?></a>
                            </h1>

                        </div>
                        <div class="entry__excerpt">
                            <p>
                            <?php echo $repository->getAutorById($previous7); ?>
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="category.html"><?php echo $repository->getCategoriaById($previous7); ?></a>
                            </span>
                        </div>
                    </div>

                </article> <!-- end article -->


                <article class="masonry__brick entry format-standard" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="single-standard.html" class="entry__thumb-link">
                        <img src="<?php echo $img9 ?>" srcset="<?php echo $img9 ?> 1x, <?php echo $img9 ?> 2x" alt="">
                        </a>
                    </div>

                    <div class="entry__text">
                        <div class="entry__header">

                            <div class="entry__date">
                                <a href="single-gallery.html"><?php echo $repository->getDataById($previous8); ?></a>
                            </div>
                            <h1 class="entry__title"><a href="single-gallery.html"><?php echo $repository->getTituloById($previous8); ?></a></h1>

                        </div>
                        <div class="entry__excerpt">
                            <p>
                            <?php echo $repository->getAutorById($previous8); ?>
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="category.html"><?php echo $repository->getCategoriaById($previous8); ?></a>
                            </span>
                        </div>
                    </div>

                </article> <!-- end article -->

            </div> <!-- end masonry -->
        </div> <!-- end masonry-wrap -->
    </section> <!-- s-content -->

    <!-- s-extra
    ================================================== -->
    <section class="s-extra">

        <div class="row top">
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
                    <a href="#0">Criptomoedas</a>
                    <a href="#0">Software</a>
                    <a href="#0">Hardware</a>
                    <a href="#0">Tecnologias no Geral</a>
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