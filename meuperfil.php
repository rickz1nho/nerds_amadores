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
                if (!empty($_GET['msg'])) {
                    $link = $_GET['msg'];
                    if ($link == 1) {
                ?>
                        <div class="alert-box alert-box--info hideit">
                            <p style="text-align:center;">Usuário promovido com sucesso</p>
                            <i class="fa fa-times alert-box__close"></i>
                        </div>
                    <?php
                    } else if ($link == 2) { ?>
                        <div class="alert-box alert-box--info text-center hideit">
                            <p>Cargo removido com sucesso</p>
                            <i class="fa fa-times alert-box__close"></i>
                        </div>
                <?php
                    }
                }
                ?>


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
                                <input class="full-width" type="password" placeholder="coxinha123" id="sampleInput" name="field_pass_update" value="">
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
                                <input class="full-width" type="password" placeholder="coxinha123" id="sampleInput" name="field_pass_update" value="">
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
                                        <?php $publi = $repository->getIdAllPubliFromAutor(" ".$_SESSION['usuario']['usuario']); 
                                            foreach($publi as $id){
                                        ?>
                                        <form action="app/controllers/controllerForm.php?action=delete&id=<?php echo $id['id'] ?>" method="POST">
                                            <tr>
                                                <td><?php echo $repository->getTituloById($id['id']) ?></td>
                                                <td><?php echo $repository->getCategoriaById($id['id']) ?></td>
                                                <td><?php echo $repository->getAutorById($id['id']) ?></td>
                                                <td><input class="btn full-width" type="submit" value="Atualizar post"></td>
                                                <td><input class="btn btn--primary full-width" type="submit" value="Excluir post"></td>
                                            </tr>
                                        </form>
                                            <?php } ?>
                                        </tbody>
                                    </table>

                                </div>

                            </div>

                        </div> <!-- end row -->
                    </div>
                    <div id="favoritos" style="display: none;">
                        <p>Teste Favoritos</p>
                    </div>
                <?php  } elseif (valida_nivel() == 4) { ?>
                    <p class="s-content__tags">

                        <span class="s-content__tag-list">
                            <a href="#0" onclick="replace()">Atualizar dados</a>
                            <a href="#0" onclick="replace1()">Gerenciar usuários</a>
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
                                <input class="full-width" type="password" placeholder="coxinha123" id="sampleInput" name="field_pass_update" value="">
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

                                <h3>Lista de editores</h3>
                                <p>Aqui aparecem todos os editores do blog</p>

                                <div class="table-responsive">

                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Usuário</th>
                                                <th>Remover cargo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $editores = $repository->getIdAllEditor(); 
                                            foreach($editores as $id){
                                        ?>
                                        <form action="app/controllers/userController.php?action=despromove&id=<?php echo $id['id'] ?>" method="POST">
                                            <tr>
                                                <td><?php echo $repository->getUserEditor($id['id']) ?></td>
                                                <td><?php echo $repository->getMailEditor($id['id']) ?></td>
                                                <td><input class="btn btn--primary full-width" type="submit" value="Remover cargo"></td>
                                            </tr>
                                        </form>
                                        <?php } ?>
                                        </tbody>
                                    </table>

                                </div>

                            </div>

                            <div class="col-twelve">

                                <h3>Lista de usuários</h3>
                                <p>Lista de usuários comuns do site</p>

                            <div class="table-responsive">
                                <table>
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Usuário</th>
                                                <th>Promover para Editor</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $usuarios = $repository->getIdAllNonEditor(); 
                                            foreach($usuarios as $id){
                                        ?>
                                            <form action="app/controllers/userController.php?action=promove&id=<?php echo $id['id'] ?>" method="POST">
                                            <tr>
                                                <td><?php echo $repository->getUserNonEditor($id['id']) ?></td>
                                                <td><?php echo $repository->getMailNonEditor($id['id']) ?></td>
                                                <td><input class="btn full-width" type="submit" value="Promover usuario"></td>
                                            </tr>
                                            </form>
                                        <?php } ?>
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
                                        <?php $publi = $repository->getIdAllPubli(); 
                                            foreach($publi as $id){
                                        ?>
                                        <form action="app/controllers/controllerForm.php?action=delete&id=<?php echo $id['id'] ?>" method="POST">
                                            <tr>
                                                <td><?php echo $repository->getTituloById($id['id']) ?></td>
                                                <td><?php echo $repository->getCategoriaById($id['id']) ?></td>
                                                <td><?php echo $repository->getAutorById($id['id']) ?></td>
                                                <td><input class="btn full-width" type="submit" value="Atualizar post"></td>
                                                <td><input class="btn btn--primary full-width" type="submit" value="Excluir post"></td>
                                            </tr>
                                        </form>
                                            <?php } ?>
                                        </tbody>
                                    </table>

                                </div>

                            </div>

                        </div> <!-- end row -->
                    </div>
                    <div id="favoritos" style="display: none;">
                        <p>Teste Favoritos</p>
                    </div>
                <?php }
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
                        <span>© Nerds Amadores 2022</span><br>
                        <span>FrontEnd feito pelo monstro <a href="https://instagram.com/gabxdinizz" target="_blank">Gabriel Diniz</a></span><br>
                        <span>BackEnd feito pelo monstro <a href="https://instagram.com/anthonyvogado" target="_blank">Anthony Vogado</a></span><br>
                        <span>BackEnd feito pelo monstro <a href="https://instagram.com/rickz1nho" target="_blank">Matheus Ferreira</a></span><br>
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
    <script src="js/post/jquery-3.2.1.min.js"></script>
    <script src="js/post/plugins.js"></script>
    <script src="js/post/main.js"></script>

</body>

</html>