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
$img7 = $repository->getImagemById($previous6);

$previous7 = $repository->getPreviousPostId($previous6);
$img8 = $repository->getImagemById($previous7);

$previous8 = $repository->getPreviousPostId($previous7);
$img9 = $repository->getImagemById($previous8);

if (!empty($_GET['msg'])) {
    $link = $_GET['msg'];
    if ($link == 1) {
?>
        <div class="alert-box alert-box--info hideit">
            <p style="text-align:center;">Você já está logado!</p>
            <i class="fa fa-times alert-box__close"></i>
        </div>
<?php
    } else {
    }
}
?>


<body id="top">
    <div style="height:62px; background-color: #151515; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:40px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; ;padding:1px;padding: 0px; margin: 0px; width: 100%;">
        <div style="height:40px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=dark&pref_coin_id=3315&invert_hover=no" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div>
        <div style="color: #151515; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"></div>
    </div>

    <!-- pageheader
    ================================================== -->
    <section class="s-pageheader s-pageheader--home">

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
                    <a class="h2eader__search-trigger" href="valida_login.php"></a>
                <?php
                }
                ?>

                <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

                <nav class="header__nav-wrap">

                    <h2 class="header__nav-heading h6">Site Navigation</h2>

                    <ul class="header__nav">
                        <li class="current"><a href="index.html" title="">Página principal</a></li>
                        <li class="has-children">
                            <a href="#0" title="">Categorias</a>
                            <ul class="sub-menu">
                                <li><a href="#0">Criptomoedas</a></li>
                                <li><a href="#0">Software</a></li>
                                <li><a href="#0">Hardware</a></li>
                                <li><a href="#0">Tecnologias em geral</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html" title="">Sobre Nós</a></li>
                    </ul> <!-- end header__nav -->

                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

<<<<<<< HEAD
                <ul class="header__nav">
                    <li class="current"><a href="index.html" title="">Página principal</a></li>
                    <li class="has-children">
                        <a href="#0" title="">Categorias</a>
                        <ul class="sub-menu">
                        <li><a href="category.php?cat=1">Cripto</a></li>
                        <li><a href="category.php?cat=2">Software</a></li>
                        <li><a href="category.php?cat=3">Hardware</a></li>
                        <li><a href="category.php?cat=4">Tecnlogias em Geral</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html" title="">About</a></li>
                </ul> <!-- end header__nav -->

                <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

            </nav> <!-- end header__nav-wrap -->
=======
                </nav> <!-- end header__nav-wrap -->
>>>>>>> c987fb69cb66d7947fa6ebaa8c2babee84bd42a7

            </div> <!-- header-content -->
        </header> <!-- header -->


        <div class="pageheader-content row">

            <div class="col-full">

                <div class="featured">

                    <div class="featured__column featured__column--big">

                        <div class="entry" style="background-image:url('<?php echo $img ?>');">

                            <div class="entry__content">
                            <?php $categoria = $repository->getCategoriaById($lastPost); ?>
                                <span class="entry__category"><a href="category.php?cat=<?php echo $repository->getCategoriaId($categoria); ?>"><?php echo $repository->getCategoriaById($lastPost); ?></a></span>

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
                            <?php $categoria = $repository->getCategoriaById($previous1); ?>
                                <span class="entry__category"><a href="category.php?cat=<?php echo $repository->getCategoriaId($categoria); ?>"><?php echo $repository->getCategoriaById($previous1); ?></a></span>

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
                            <?php $categoria = $repository->getCategoriaById($previous2); ?>
                                <span class="entry__category"><a href="category.php?cat=<?php echo $repository->getCategoriaId($categoria); ?>"><?php echo $repository->getCategoriaById($previous2); ?></a></span>

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

    </section> <!-- end s-pageheader -->


    <section class="s-content">

        <div class="row masonry-wrap">
            <div class="masonry">

                <div class="grid-sizer"></div>

                <article class="masonry__brick entry format-standard" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="post.php?id=<?php echo $previous3 ?>" class="entry__thumb-link">
                            <img src="<?php echo $img4 ?>" srcset="<?php echo $img4 ?> 1x, <?php echo $img4 ?> 2x" alt="">
                        </a>
                    </div>

                    <div class="entry__text">
                        <div class="entry__header">

                            <div class="entry__date">
                                <a href="post.php?id=<?php echo $previous3 ?>"><?php echo $repository->getDataById($previous3); ?></a>
                            </div>
                            <h1 class="entry__title"><a href="post.php?id=<?php echo $previous3 ?>"><?php echo $repository->getTituloById($previous3); ?></a>
                            </h1>

                        </div>
                        <div class="entry__excerpt">
                            <p>
                                <?php echo $repository->getAutorById($previous3); ?>
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                            <?php $categoria = $repository->getCategoriaById($previous3); ?>
                                <a href="category.php?cat=<?php echo $repository->getCategoriaId($categoria); ?>"><?php echo $repository->getCategoriaById($previous3); ?></a>
                            </span>
                        </div>
                    </div>

                </article> <!-- end article -->

                <article class="masonry__brick entry format-standard" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="post.php?id=<?php echo $previous4 ?>" class="entry__thumb-link">
                            <img src="<?php echo $img5 ?>" srcset="<?php echo $img5 ?> 1x, <?php echo $img5 ?> 2x" alt="">
                        </a>
                    </div>

                    <div class="entry__text">
                        <div class="entry__header">

                            <div class="entry__date">
                                <a href="post.php?id=<?php echo $previous4 ?>"><?php echo $repository->getDataById($previous4); ?></a>
                            </div>
                            <h1 class="entry__title"><a href="post.php?id=<?php echo $previous4 ?>"><?php echo $repository->getTituloById($previous4); ?></a></h1>

                        </div>
                        <div class="entry__excerpt">
                            <p>
                                <?php echo $repository->getAutorById($previous4); ?>
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                            <?php $categoria = $repository->getCategoriaById($previous4); ?>
                                <a href="category.php?cat=<?php echo $repository->getCategoriaId($categoria); ?>"><?php echo $repository->getCategoriaById($previous4); ?></a>
                            </span>
                        </div>
                    </div>

                </article> <!-- end article -->

                <article class="masonry__brick entry format-standard" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="post.php?id=<?php echo $previous5 ?>" class="entry__thumb-link">
                            <img src="<?php echo $img6 ?>" srcset="<?php echo $img6 ?> 1x, <?php echo $img6 ?> 2x" alt="">
                        </a>
                    </div>

                    <div class="entry__text">
                        <div class="entry__header">

                            <div class="entry__date">
                                <a href="post.php?id=<?php echo $previous5 ?>"><?php echo $repository->getDataById($previous5); ?></a>
                            </div>
                            <h1 class="entry__title"><a href="post.php?id=<?php echo $previous5 ?>"><?php echo $repository->getTituloById($previous5); ?></a></h1>

                        </div>
                        <div class="entry__excerpt">
                            <p>
                                <?php echo $repository->getAutorById($previous5); ?>
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                            <?php $categoria = $repository->getCategoriaById($previous5); ?>
                                <a href="category.php?cat=<?php echo $repository->getCategoriaId($categoria); ?>"><?php echo $repository->getCategoriaById($previous5); ?></a>
                            </span>
                        </div>
                    </div>

                </article> <!-- end article -->

                <article class="masonry__brick entry format-standard" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="post.php?id=<?php echo $previous6 ?>" class="entry__thumb-link">
                            <img src="<?php echo $img7 ?>" srcset="<?php echo $img7 ?> 1x, <?php echo $img7 ?> 2x" alt="">
                        </a>
                    </div>

                    <div class="entry__text">
                        <div class="entry__header">

                            <div class="entry__date">
                                <a href="post.php?id=<?php echo $previous6 ?>"><?php echo $repository->getDataById($previous6); ?></a>
                            </div>
                            <h1 class="entry__title"><a href="post.php?id=<?php echo $previous6 ?>"><?php echo $repository->getTituloById($previous6); ?></a></h1>

                        </div>
                        <div class="entry__excerpt">
                            <p>
                                <?php echo $repository->getAutorById($previous6); ?>
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                            <?php $categoria = $repository->getCategoriaById($previous6); ?>
                                <a href="category.php?cat=<?php echo $repository->getCategoriaId($categoria); ?>"><?php echo $repository->getCategoriaById($previous6); ?></a>
                            </span>
                        </div>
                    </div>

                </article> <!-- end article -->

                <article class="masonry__brick entry format-standard" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="post.php?id=<?php echo $previous7 ?>" class="entry__thumb-link">
                            <img src="<?php echo $img8 ?>" srcset="<?php echo $img8 ?> 1x, <?php echo $img8 ?> 2x" alt="">
                        </a>
                    </div>

                    <div class="entry__text">
                        <div class="entry__header">

                            <div class="entry__date">
                                <a href="post.php?id=<?php echo $previous7 ?>"><?php echo $repository->getDataById($previous7); ?></a>
                            </div>
                            <h1 class="entry__title"><a href="post.php?id=<?php echo $previous7 ?>"><?php echo $repository->getTituloById($previous7); ?></a>
                            </h1>

                        </div>
                        <div class="entry__excerpt">
                            <p>
                                <?php echo $repository->getAutorById($previous7); ?>
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                            <?php $categoria = $repository->getCategoriaById($previous7); ?>
                                <a href="category.php?cat=<?php echo $repository->getCategoriaId($categoria); ?>"><?php echo $repository->getCategoriaById($previous7); ?></a>
                            </span>
                        </div>
                    </div>

                </article> <!-- end article -->


                <article class="masonry__brick entry format-standard" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="post.php?id=<?php echo $previous8 ?>" class="entry__thumb-link">
                            <img src="<?php echo $img9 ?>" srcset="<?php echo $img9 ?> 1x, <?php echo $img9 ?> 2x" alt="">
                        </a>
                    </div>

                    <div class="entry__text">
                        <div class="entry__header">

                            <div class="entry__date">
                                <a href="post.php?id=<?php echo $previous8 ?>"><?php echo $repository->getDataById($previous8); ?></a>
                            </div>
                            <h1 class="entry__title"><a href="post.php?id=<?php echo $previous8 ?>"><?php echo $repository->getTituloById($previous8); ?></a></h1>

                        </div>
                        <div class="entry__excerpt">
                            <p>
                                <?php echo $repository->getAutorById($previous8); ?>
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <?php $categoria = $repository->getCategoriaById($previous8); ?>
                                <a href="category.php?cat=<?php echo $repository->getCategoriaId($categoria); ?>"><?php echo $repository->getCategoriaById($previous8); ?></a>
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
    <script src="post/js/jquery-3.2.1.min.js"></script>
    <script src="post/js/plugins.js"></script>
    <script src="post/js/main.js"></script>

</body>

</html>