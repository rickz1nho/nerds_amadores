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
if($cat == 1){
    $categoria = " Cripto";
}elseif($cat == 2){
    $categoria = " Software";
}elseif($cat == 3){
    $categoria = " Hardware";
}elseif($cat == 4){
    $categoria = " Tecnologias em Geral";
};
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
    <section class="s-content">

<div class="row masonry-wrap">
    <div class="masonry">

        <div class="grid-sizer"></div>

    <?php  
    
    $lastPost = $repository->getLastPostIdWCat($categoria);
    $todos = $repository->countPostsByCat($categoria);
    $i = $lastPost+1;
    $j = 1;

     do{
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
<?php }while($j <= $todos); ?>
</div> <!-- end masonry -->
</div> <!-- end masonry-wrap -->
</section> <!-- s-content -->
    <!-- Java Script
    ================================================== -->
    <script src="post/js/jquery-3.2.1.min.js"></script>
    <script src="post/js/plugins.js"></script>
    <script src="post/js/main.js"></script>
</body>