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

    <!-- editor
    ================================================== -->
    <link rel="stylesheet" href="css/froala_editor.css">
    <link rel="stylesheet" href="css/froala_style.css">
    <link rel="stylesheet" href="css/plugins/code_view.css">
    <link rel="stylesheet" href="css/plugins/colors.css">
    <link rel="stylesheet" href="css/plugins/emoticons.css">
    <link rel="stylesheet" href="css/plugins/image_manager.css">
    <link rel="stylesheet" href="css/plugins/image.css">
    <link rel="stylesheet" href="css/plugins/line_breaker.css">
    <link rel="stylesheet" href="css/plugins/table.css">
    <link rel="stylesheet" href="css/plugins/char_counter.css">
    <link rel="stylesheet" href="css/plugins/video.css">
    <link rel="stylesheet" href="css/editorlogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">

</head>
<?php

require_once __DIR__ . "/config.php";
require_once __DIR__ . "/app/repositories/UserRepository.php";
$repository = new UserRepository();

$id = $_GET['id'];

valida_login();
if (valida_nivel() == 3 or 4) {

?>

    <body id="top">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
        <script type="text/javascript" src="js/froala_editor.min.js"></script>
        <script type="text/javascript" src="js/plugins/align.min.js"></script>
        <script type="text/javascript" src="js/plugins/code_beautifier.min.js"></script>
        <script type="text/javascript" src="js/plugins/code_view.min.js"></script>
        <script type="text/javascript" src="js/plugins/colors.min.js"></script>
        <script type="text/javascript" src="js/plugins/draggable.min.js"></script>
        <script type="text/javascript" src="js/plugins/emoticons.min.js"></script>
        <script type="text/javascript" src="js/plugins/font_size.min.js"></script>
        <script type="text/javascript" src="js/plugins/font_family.min.js"></script>
        <script type="text/javascript" src="js/plugins/image.min.js"></script>
        <script type="text/javascript" src="js/plugins/image_manager.min.js"></script>
        <script type="text/javascript" src="js/plugins/line_breaker.min.js"></script>
        <script type="text/javascript" src="js/plugins/link.min.js"></script>
        <script type="text/javascript" src="js/plugins/lists.min.js"></script>
        <script type="text/javascript" src="js/plugins/paragraph_format.min.js"></script>
        <script type="text/javascript" src="js/plugins/paragraph_style.min.js"></script>
        <script type="text/javascript" src="js/plugins/table.min.js"></script>
        <script type="text/javascript" src="js/plugins/video.min.js"></script>
        <script type="text/javascript" src="js/plugins/url.min.js"></script>
        <script type="text/javascript" src="js/plugins/entities.min.js"></script>
        <script type="text/javascript" src="js/plugins/char_counter.min.js"></script>
        <script type="text/javascript" src="js/plugins/inline_style.min.js"></script>
        <script type="text/javascript" src="js/plugins/save.min.js"></script>


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

                    <a class="h2eader__search-trigger" href="meuperfil.php"></a>


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

            <?php
            $str = ''; // variable to store the options
            $tech = array("Cripto", "Software", "Hardware", "Tecnologias em Geral");
            $str = '<option value="' . $tech[0] . '" />' . '<option value="' . $tech[1] . '" />' . '<option value="' . $tech[2] . '<option value="' . $tech[3] . '" />';
            ?>
            <div class="row format-standard">

                <div class="s-content__header col-full">

                    <h2 class="add-bottom text-center">Criar publicação</h3>
                        <form action="app/controllers/controllerForm.php?action=update" method="post" enctype="multipart/form-data">
                            <div>
                                <label class="text-left" for="sampleInput">Título da publicação: </label>
                                <input class="full-width" type="text" placeholder="Título teste" id="sampleInput" name="titulo_update" value="<?php echo $repository->getTituloById($id) ?>">
                            </div>
                            <div>
                                <label class="text-left" for="sampleInput">Categoria: </label>
                                <input class="cl-custom-select select" type="text" id="t1" name="categoria_update" list="l1" value="<?php echo $repository->getCategoriaById($id) ?>" required pattern="Cripto|Software|Hardware|Tecnologias em Geral">
                                <datalist id="l1">
                                    <option class="cl-custom-select select option ">Cripto</option>
                                    <option class="cl-custom-select select option ">Software</option>
                                    <option class="cl-custom-select select option ">Hardware</option>
                                    <option class="cl-custom-select select option ">Tecnologias em Geral</option>
                                </datalist>
                            </div>
                            <div>
                                <label class="text-center" for="sampleInput">Selecione uma imagem para o banner do post: </label>
                                <input required type="file" value="Selecione o arquivo" name="fileToUpload" id="fileToUpload">
                            </div>
                            <div class="myEditor add-bottom " style="width:100%;">
                                <br>
                                <textarea class="col-full" name="editor_content" id="myEditor"><?php echo $repository->viewConteudoById($id) ?></textarea>
                            </div>

                            <input class="btn btn--primary full-width" type="submit" value="ATUALIZAR PUBLICAÇÃO">

                        </form>
                        <script>
                            new FroalaEditor('#myEditor', {
                                // Set the image upload URL.
                                imageUploadParam: 'image_param',
                                imageUploadMethod: 'POST',
                                hight: 200,
                                imageUploadURL: 'upload_image.php',
                                imageAllowedTypes: ['jpeg', 'jpg', 'png'],
                                imageUploadParams: {
                                    Froala: true
                                },
                            })
                        </script>
                </div>

        </section> <!-- s-content -->



        <!-- s-footer
================================================== -->
        <footer class="s-footer">
            <div class="s-footer__bottom">
                <div class="row">
                    <div class="col-full">
                        <div class="s-footer__copyright text-left">
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

<?php
} else {
    echo "sem permissao";
    exit;
}
?>