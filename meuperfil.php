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
valida_login();
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


                <form name="logout" action="app/controllers/logout.php" method="POST">

                    <a class="h3eader__search-trigger" href="javascript: submitform()"></a>
                </form>

                <script type="text/javascript">
                    function submitform() {
                        document.logout.submit();
                    }
                </script>


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
            <div class="s-content__header col-full">


                <?php
                if (valida_nivel() == 1) { ?>
                    <p class="s-content__tags">

                        <span class="s-content__tag-list">
                            <a href="#0" onclick="replace()">Atualizar dados</a>
                            <a href="#0" onclick="replace1()">Suas publicações favoritas</a>
                        </span>
                    </p> <!-- end s-content__tags -->

                    <script type="text/javascript">
                        function replace() {
                            document.getElementById("atualizar").style.display = "block";
                            document.getElementById("favoritos").style.display = "none";
                        }

                        function replace1() {
                            document.getElementById("atualizar").style.display = "none";
                            document.getElementById("favoritos").style.display = "block";
                        }
                    </script>


                    <div id="atualizar" style="display: block;">
                        <h3 class="add-bottom text-center">Atualizar dados</h3>

                        <form action="app/controllers/userController.php?action=update" method="POST">
                            <div>
                                <label class="text-left" for="sampleInput">Insira seu nome</label>
                                <input class="full-width" type="text" placeholder="Anderson Cardoso" id="sampleInput" name="field_name_update" value="<?= $_SESSION['usuario']['nome'] ?>">
                            </div>
                            <div>
                                <label class="text-left" for="sampleInput">Escolha um usuário</label>
                                <input class="full-width" type="text" placeholder="wuju333" id="sampleInput" name="field_user_update" value="<?= $_SESSION['usuario']['usuario'] ?>">
                            </div>
                            <div>
                                <label class="text-left" for="sampleInput">Insira um email</label>
                                <input class="full-width" type="email" placeholder="jubirainer@gmail.com" id="sampleInput" name="field_email_update" value="<?= $_SESSION['usuario']['email'] ?>">
                            </div>
                            <div>
                                <label class="text-left" for="sampleInput">Escolha uma senha</label>
                                <input class="full-width" type="password" placeholder="coxinha123" id="sampleInput" name="field_pass_update" value="<?= $_SESSION['usuario']['senha'] ?>">
                            </div>

                            <input class="btn btn--primary full-width" type="submit" value="ATUALIZAR">

                        </form>
                        <div class="col-full">
                            <form action="app/controllers/userController.php?action=delete" method="POST">

                                <input class="btn btn--primary" type="submit" value="DELETAR USUARIO" onclick="return confirm('Tem certeza que deseja deletar sua conta?')">

                            </form>
                        </div>
                    </div>
                    <div id="favoritos" style="display: none;">
                        <p>Teste Favoritos</p>
                    </div>
                <?php  } elseif (valida_nivel() == 3) { ?>
                    <p class="s-content__tags">

                        <span class="s-content__tag-list">
                            <a href="#0" onclick="replace()">Atualizar dados</a>
                            <a href="#0" onclick="replace1()">Gerenciar seus posts</a>
                            <a href="#0" onclick="replace2()">Suas publicações favoritas</a>
                        </span>
                    </p> <!-- end s-content__tags -->

                    <script type="text/javascript">
                        function replace() {
                            document.getElementById("atualizar").style.display = "block";
                            document.getElementById("gerencpost").style.display = "none";
                            document.getElementById("favoritos").style.display = "none";
                        }

                        function replace1() {
                            document.getElementById("atualizar").style.display = "none";
                            document.getElementById("gerencpost").style.display = "block";
                            document.getElementById("favoritos").style.display = "none";
                        }

                        function replace2() {
                            document.getElementById("atualizar").style.display = "none";
                            document.getElementById("gerencpost").style.display = "none";
                            document.getElementById("favoritos").style.display = "block";
                        }
                    </script>


                    <div id="atualizar" style="display: block;">
                        <h3 class="add-bottom text-center">Atualizar dados</h3>

                        <form action="app/controllers/userController.php?action=update" method="POST">
                            <div>
                                <label class="text-left" for="sampleInput">Insira seu nome</label>
                                <input class="full-width" type="text" placeholder="Anderson Cardoso" id="sampleInput" name="field_name_update" value="<?= $_SESSION['usuario']['nome'] ?>">
                            </div>
                            <div>
                                <label class="text-left" for="sampleInput">Escolha um usuário</label>
                                <input class="full-width" type="text" placeholder="wuju333" id="sampleInput" name="field_user_update" value="<?= $_SESSION['usuario']['usuario'] ?>">
                            </div>
                            <div>
                                <label class="text-left" for="sampleInput">Insira um email</label>
                                <input class="full-width" type="email" placeholder="jubirainer@gmail.com" id="sampleInput" name="field_email_update" value="<?= $_SESSION['usuario']['email'] ?>">
                            </div>
                            <div>
                                <label class="text-left" for="sampleInput">Escolha uma senha</label>
                                <input class="full-width" type="password" placeholder="coxinha123" id="sampleInput" name="field_pass_update" value="<?= $_SESSION['usuario']['senha'] ?>">
                            </div>

                            <input class="btn btn--primary full-width" type="submit" value="ATUALIZAR">

                        </form>
                        <div class="col-full">
                            <form action="app/controllers/userController.php?action=delete" method="POST">

                                <input class="btn btn--primary" type="submit" value="DELETAR USUARIO" onclick="return confirm('Tem certeza que deseja deletar sua conta?')">

                            </form>
                        </div>
                    </div>
                    <div id="gerencpost" style="display: none;">
                        <p>Teste gerenciar</p>
                    </div>
                    <div id="favoritos" style="display: none;">
                        <p>Teste Favoritos</p>
                    </div>
                <?php  } elseif (valida_nivel() == 4) { ?>
                    <p class="s-content__tags">

                        <span class="s-content__tag-list">
                            <a href="#0" onclick="replace()">Atualizar dados</a>
                            <a href="#0" onclick="replace1()">Promover editor</a>
                            <a href="#0" onclick="replace2()">Gerenciar os posts</a>
                            <a href="#0" onclick="replace3()">Suas publicações favoritas</a>
                        </span>
                    </p> <!-- end s-content__tags -->

                    <script type="text/javascript">
                        function replace() {
                            document.getElementById("atualizar").style.display = "block";
                            document.getElementById("promover").style.display = "none";
                            document.getElementById("gerencpost").style.display = "none";
                            document.getElementById("favoritos").style.display = "none";
                        }

                        function replace1() {
                            document.getElementById("atualizar").style.display = "none";
                            document.getElementById("promover").style.display = "block";
                            document.getElementById("gerencpost").style.display = "none";
                            document.getElementById("favoritos").style.display = "none";
                        }

                        function replace2() {
                            document.getElementById("atualizar").style.display = "none";
                            document.getElementById("promover").style.display = "none";
                            document.getElementById("gerencpost").style.display = "block";
                            document.getElementById("favoritos").style.display = "none";
                        }

                        function replace3() {
                            document.getElementById("atualizar").style.display = "none";
                            document.getElementById("promover").style.display = "none";
                            document.getElementById("gerencpost").style.display = "none";
                            document.getElementById("favoritos").style.display = "block";
                        }
                    </script>


                    <div id="atualizar" style="display: block;">
                        <h3 class="add-bottom text-center">Atualizar dados</h3>

                        <form action="app/controllers/userController.php?action=update" method="POST">
                            <div>
                                <label class="text-left" for="sampleInput">Insira seu nome</label>
                                <input class="full-width" type="text" placeholder="Anderson Cardoso" id="sampleInput" name="field_name_update" value="<?= $_SESSION['usuario']['nome'] ?>">
                            </div>
                            <div>
                                <label class="text-left" for="sampleInput">Escolha um usuário</label>
                                <input class="full-width" type="text" placeholder="wuju333" id="sampleInput" name="field_user_update" value="<?= $_SESSION['usuario']['usuario'] ?>">
                            </div>
                            <div>
                                <label class="text-left" for="sampleInput">Insira um email</label>
                                <input class="full-width" type="email" placeholder="jubirainer@gmail.com" id="sampleInput" name="field_email_update" value="<?= $_SESSION['usuario']['email'] ?>">
                            </div>
                            <div>
                                <label class="text-left" for="sampleInput">Escolha uma senha</label>
                                <input class="full-width" type="password" placeholder="coxinha123" id="sampleInput" name="field_pass_update" value="<?= $_SESSION['usuario']['senha'] ?>">
                            </div>

                            <input class="btn btn--primary full-width" type="submit" value="ATUALIZAR">

                        </form>
                        <div class="col-full">
                            <form action="app/controllers/userController.php?action=delete" method="POST">

                                <input class="btn btn--primary" type="submit" value="DELETAR USUARIO" onclick="return confirm('Tem certeza que deseja deletar sua conta?')">

                            </form>
                        </div>
                    </div>

                    <div id="promover" style="display: none;">
                        <div class="row add-bottom">

                            <div class="col-twelve">

                                <h3>Gestão de editores</h3>
                                <p>Controle quem tem e quem não tem o acesso de editor no blog</p>

                                <div class="table-responsive">

                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Nome do usuário</th>
                                                <th>Email do usuário</th>
                                                <th>Promover para Editor/Remover cargo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Diniba</td>
                                                <td>gabrieldinizm03@gmail.com</td>
                                                <td><input class="btn full-width" type="submit" value="Adicionar cargo"></td>
                                            </tr>
                                            <tr>
                                                <td>Rickzinho</td>
                                                <td>rickzinho@gmail.com</td>
                                                <td><input class="btn btn--primary full-width" type="submit" value="Remover cargo"></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>

                        </div> <!-- end row -->
                    </div>
                    <div id="gerencpost" style="display: none;">
                        <div class="row add-bottom">

                            <div>

                                <h3>Gerenciamento das publicações</h3>
                                <p>Atualize ou remova as publicações do blog</p>

                                <div class="table">

                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Título da publicação</th>
                                                <th>Categoria</th>
                                                <th>Autor</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Mapeamento genético de DNA passar a contar com Inteligência artifical</td>
                                                <td>Tecnologias em Geral</td>
                                                <td>Diniba</td>
                                                <td><input class="btn full-width" type="submit" value="Atualizar post"></td>
                                                <td><input class="btn btn--primary full-width" type="submit" value="Excluir post"></td>
                                            </tr>
                                            <tr>
                                                <td>Novas linguagens de programação emergentes</td>
                                                <td>Software</td>
                                                <td>Rickzinho</td>
                                                <td><input class="btn full-width" type="submit" value="Atualizar post"></td>
                                                <td><input class="btn btn--primary full-width" type="submit" value="Excluir post"></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>

                        </div> <!-- end row -->
                    </div>
                    <div id="favoritos" style="display: none;">
                        <p>Teste Favoritos</p>
                    </div>
                <?php } else {
                }
                ?>



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