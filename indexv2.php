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
                        <img src="images/logo.png" alt="Homepage">
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

    <section class="s-content">

        <div class="row masonry-wrap">
            <div class="masonry">

                <div class="grid-sizer"></div>

                <article class="masonry__brick entry format-standard" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="single-standard.html" class="entry__thumb-link">
                            <img src="images/thumbs/masonry/lamp-400.jpg" srcset="images/thumbs/masonry/lamp-400.jpg 1x, images/thumbs/masonry/lamp-800.jpg 2x" alt="">
                        </a>
                    </div>

                    <div class="entry__text">
                        <div class="entry__header">

                            <div class="entry__date">
                                <a href="single-standard.html">December 15, 2017</a>
                            </div>
                            <h1 class="entry__title"><a href="single-standard.html">Just a Standard Format Post.</a>
                            </h1>

                        </div>
                        <div class="entry__excerpt">
                            <p>
                                Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit
                                proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute
                                incididunt velit sint in aliqua...
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="category.html">Design</a>
                                <a href="category.html">Photography</a>
                            </span>
                        </div>
                    </div>

                </article> <!-- end article -->

                <article class="masonry__brick entry format-standard" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="single-standard.html" class="entry__thumb-link">
                            <img src="images/thumbs/masonry/tulips-400.jpg" srcset="images/thumbs/masonry/tulips-400.jpg 1x, images/thumbs/masonry/tulips-800.jpg 2x" alt="">
                        </a>
                    </div>

                    <div class="entry__text">
                        <div class="entry__header">

                            <div class="entry__date">
                                <a href="single-standard.html">December 15, 2017</a>
                            </div>
                            <h1 class="entry__title"><a href="single-standard.html">10 Interesting Facts About
                                    Caffeine.</a></h1>

                        </div>
                        <div class="entry__excerpt">
                            <p>
                                Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit
                                proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute
                                incididunt velit sint in aliqua...
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="category.html">Health</a>
                            </span>
                        </div>
                    </div>

                </article> <!-- end article -->

                <article class="masonry__brick entry format-standard" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="single-standard.html" class="entry__thumb-link">
                            <img src="images/thumbs/masonry/cookies-400.jpg" srcset="images/thumbs/masonry/cookies-400.jpg 1x, images/thumbs/masonry/cookies-800.jpg 2x" alt="">
                        </a>
                    </div>

                    <div class="entry__text">
                        <div class="entry__header">

                            <div class="entry__date">
                                <a href="single-standard.html">December 10, 2017</a>
                            </div>
                            <h1 class="entry__title"><a href="single-standard.html">No Sugar Oatmeal Cookies.</a></h1>

                        </div>
                        <div class="entry__excerpt">
                            <p>
                                Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit
                                proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute
                                incididunt velit sint in aliqua...
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="category.html">Cooking</a>
                                <a href="category.html">Health</a>
                            </span>
                        </div>
                    </div>

                </article> <!-- end article -->

                <article class="masonry__brick entry format-standard" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="single-standard.html" class="entry__thumb-link">
                            <img src="images/thumbs/masonry/wheel-400.jpg" srcset="images/thumbs/masonry/wheel-400.jpg 1x, images/thumbs/masonry/wheel-800.jpg 2x" alt="">
                        </a>
                    </div>

                    <div class="entry__text">
                        <div class="entry__header">

                            <div class="entry__date">
                                <a href="single-standard.html">December 10, 2017</a>
                            </div>
                            <h1 class="entry__title"><a href="single-standard.html">Visiting Theme Parks Improves Your
                                    Health.</a></h1>

                        </div>
                        <div class="entry__excerpt">
                            <p>
                                Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit
                                proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute
                                incididunt velit sint in aliqua...
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Health</a>
                                <a href="#">Lifestyle</a>
                            </span>
                        </div>
                    </div>

                </article> <!-- end article -->

                <article class="masonry__brick entry format-video" data-aos="fade-up">

                    <div class="entry__thumb video-image">
                        <a href="https://player.vimeo.com/video/117310401?color=01aef0&title=0&byline=0&portrait=0" data-lity>
                            <img src="images/thumbs/masonry/shutterbug-400.jpg" srcset="images/thumbs/masonry/shutterbug-400.jpg 1x, images/thumbs/masonry/shutterbug-800.jpg 2x" alt="">
                        </a>
                    </div>

                    <div class="entry__text">
                        <div class="entry__header">

                            <div class="entry__date">
                                <a href="single-video.html">December 10, 2017</a>
                            </div>
                            <h1 class="entry__title"><a href="single-video.html">Key Benefits Of Family Photography.</a>
                            </h1>

                        </div>
                        <div class="entry__excerpt">
                            <p>
                                Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit
                                proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute
                                incididunt velit sint in aliqua...
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="category.html">Family</a>
                                <a href="category.html">Photography</a>
                            </span>
                        </div>
                    </div>

                </article> <!-- end article -->


                <article class="masonry__brick entry format-gallery" data-aos="fade-up">

                    <div class="entry__thumb slider">
                        <div class="slider__slides">
                            <div class="slider__slide">
                                <img src="images/thumbs/masonry/gallery/gallery-1-400.jpg" srcset="images/thumbs/masonry/gallery/gallery-1-400.jpg 1x, images/thumbs/masonry/gallery/gallery-1-800.jpg 2x" alt="">
                            </div>
                            <div class="slider__slide">
                                <img src="images/thumbs/masonry/gallery/gallery-2-400.jpg" srcset="images/thumbs/masonry/gallery/gallery-2-400.jpg 1x, images/thumbs/masonry/gallery/gallery-2-800.jpg 2x" alt="">
                            </div>
                            <div class="slider__slide">
                                <img src="images/thumbs/masonry/gallery/gallery-3-400.jpg" srcset="images/thumbs/masonry/gallery/gallery-3-400.jpg 1x, images/thumbs/masonry/gallery/gallery-3-800.jpg 2x" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="entry__text">
                        <div class="entry__header">

                            <div class="entry__date">
                                <a href="single-gallery.html">December 10, 2017</a>
                            </div>
                            <h1 class="entry__title"><a href="single-gallery.html">Workspace Design Trends and
                                    Ideas.</a></h1>

                        </div>
                        <div class="entry__excerpt">
                            <p>
                                Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit
                                proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute
                                incididunt velit sint in aliqua...
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="category.html">Work</a>
                                <a href="category.html">Management</a>
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
                <h3>Tags</h3>

                <div class="tagcloud">
                    <a href="#0">Salad</a>
                    <a href="#0">Recipe</a>
                    <a href="#0">Places</a>
                    <a href="#0">Tips</a>
                    <a href="#0">Friends</a>
                    <a href="#0">Travel</a>
                    <a href="#0">Exercise</a>
                    <a href="#0">Reading</a>
                    <a href="#0">Running</a>
                    <a href="#0">Self-Help</a>
                    <a href="#0">Vacation</a>
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