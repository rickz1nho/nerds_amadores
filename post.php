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
$repository = new UserRepository();
$id = $_GET['id'];

if(!empty($_GET['fav'])){
switch($_GET['fav']){
    case "1":
        fav($id);
}
}

function fav($id){

    $repository = new UserRepository();

    $repository->fav($_SESSION['usuario']['id'],$id);

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
                        <li><a href="about.html" title="">About</a></li>
                    </ul> <!-- end header__nav -->

                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

                </nav> <!-- end header__nav-wrap -->

            </div> <!-- header-content -->
        </header> <!-- header -->

    </div> <!-- end s-pageheader -->


    <!-- s-content
================================================== -->
<?php
                if (!empty($_GET['fav'])) {
                    $link = $_GET['fav'];
                    if ($link == 1) {
                ?>
                        <div id='mydiv' class="alert-box alert-box--info hideit">
                            <p style="text-align:center;">Publicação favoritada com sucesso</p>
                            <i class="fa fa-times alert-box__close"></i>
                        </div>
                    <?php
                    } }?>
    <section class="s-content s-content--narrow s-content--no-padding-bottom">

        <article class="row format-standard">

            <div class="s-content__header col-full">
                <h1 class="s-content__header-title">
                    <?php $repository->viewTituloById($id); ?>
                </h1>
                <ul class="s-content__header-meta">
                    <li class="date"><?php $data = $repository->getDataById($id); 
                                            echo date('j M Y', strtotime($data));
                                        ?></li>
                    <li class="cat">
                        In
                        <a href="#0"><?php $repository->viewCategoriaById($id); ?></a>
                    </li>
                </ul>
            </div> <!-- end s-content__header -->

            <div class="col-full s-content__main">

                <p> <?php $repository->viewConteudoById($id); ?> </p>

                <div class="s-content__author">

                    <div class="s-content__author-about">
                        <h4 class="s-content__author-name">
                            <a href="#0"> <?php $repository->viewAutorById($id); ?> </a>
                        </h4>

                        <p>Descrição do Autor
                        </p>
                    </div>
                </div>

                <?php 
                if (isset($_SESSION['usuario'])) {
                if(empty($_GET['fav'])){?>
                <form name="fav" action="#1000" method="POST">
                    <p class="s-content__tags">
                        <span class="s-content__tag-list">
                            <a id="teste" onclick="replace()" href="post.php?id=<?php echo $id ?>&fav=1">Favoritar publicação</a>
                        </span>
                    </p> <!-- end s-content__tags -->
                </form>
                <?php } } ?>


                <div class="s-content__pagenav">
                    <div class="s-content__nav col-full">
                        <?php if (!empty($repository->getPreviousPostId($id))) { ?>
                            <div class="s-content__prev">
                                <?php
                                $prev = $repository->getPreviousPostId($id);
                                echo "<a href=post.php?id=$prev>" ?>
                                <span>Previous Post</span>
                                <?php $repository->ViewTituloById($prev) ?>
                                </a>
                            </div> <?php } ?>

                        <?php if (!empty($repository->getNextPostId($id))) { ?>
                            <div class="s-content__next">
                                <?php
                                $next = $repository->getNextPostId($id);
                                echo "<a href=post.php?id=$next>" ?>
                                <span>Next Post</span>
                                <?php $repository->ViewTituloById($next) ?>
                                </a>
                            </div> <?php } ?>
                    </div>
                </div> <!-- end s-content__pagenav -->

            </div> <!-- end s-content__main -->

        </article>

        <div class="comments-wrap">
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
    <script src="js/post/jquery-3.2.1.min.js"></script>
    <script src="js/post/plugins.js"></script>
    <script src="js/post/main.js"></script>

</body>

</html>