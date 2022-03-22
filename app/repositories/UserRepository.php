<?php

require_once __DIR__ . "/../../config.php";
require __DIR__ . "/../database/connection.php";



class UserRepository
{

    private $connection;
    private $base_path = "http://localhost/nerds_amadores";
    public function __construct()
    {
        $this->connection = Connection::getConnection();
    }

    public function findUserByLogin(string $user, string $pass)
    {

        $sql = "SELECT * FROM `usuarios` WHERE `usuario` = ? AND `senha` = ?";

        $statement = $this->connection->prepare($sql);
        $statement->bindValue(1, $user);
        $statement->bindValue(2, sha1($pass));
        $statement->execute();

        if ($statement->rowCount() == 0) {


            header("location:{$this->base_path}/login_page.php?msg=1");
            exit;
        } else {

            $usuario_do_banco = $statement->fetch(PDO::FETCH_ASSOC);
        }

        return $usuario_do_banco;
    }

    public function verifyIfUserNameExists(string $user)
    {

        $sql = "SELECT * FROM `usuarios` WHERE `usuario` = ?";

        $statement = $this->connection->prepare($sql);
        $statement->bindValue(1, $user);
        $statement->execute();


        if ($statement->rowCount() > 0) {

            throw new InvalidArgumentException("usuário já existe");
            return false;
        }
    }


    function criarUsuario($name, $user, $pass, $email)
    {
        //logica para cadastrar no banco
        $sql = "INSERT INTO `usuarios` (`nome` ,`usuario`, `senha`, `email`)
        VALUES ( '" . $name . "', 
                 '" . $user . "',
                 '" . sha1($pass) . "',
                 '" . $email . "')";

        $statement = $this->connection->prepare($sql);
        $statement->execute();
    }

    function deletarUsuario($id)
    {
        $sql = "DELETE FROM `usuarios` WHERE `id` = $id";

        $statement = $this->connection->prepare($sql);
        $statement->execute();
    }

    function updateUser($nameUpdated, $userUpdated, $passUpdated, $emailUpdated, $id)
    {

        if (!empty($nameUpdated)) {
            $sql = "UPDATE `usuarios` SET `nome` =  '$nameUpdated'  WHERE `id`  = $id";

            $statement = $this->connection->prepare($sql);
            $statement->execute();
            $_SESSION['usuario']['nome'] = $nameUpdated;
        }

        if (!empty($userUpdated)) {
            $sql = "UPDATE `usuarios` SET `usuario` =  '$userUpdated'  WHERE `id`  = $id";

            $statement = $this->connection->prepare($sql);
            $statement->execute();
            $_SESSION['usuario']['usuario'] = $userUpdated;
        }

        if (!empty($passUpdated)) {
            $sql = "UPDATE `usuarios` SET `senha` =   sha1($passUpdated)  WHERE `id`  = $id";

            $statement = $this->connection->prepare($sql);
            $statement->execute();
            $_SESSION['usuario']['senha'] = $passUpdated;
        }

        if (!empty($emailUpdated)) {
            $sql = "UPDATE `usuarios` SET `email` =  '$emailUpdated'  WHERE `id`  = $id";

            $statement = $this->connection->prepare($sql);
            $statement->execute();
            $_SESSION['usuario']['email'] = $emailUpdated;
        }
    }

    function promover($user_banco)
    {
        $sql = "UPDATE `usuarios` SET `nivel` =  '3'  WHERE `id`  = $user_banco";

        $statement = $this->connection->prepare($sql);
        $statement->execute();
    }
    function despromover($user_banco)
    {
        $sql = "UPDATE `usuarios` SET `nivel` =  '1'  WHERE `id`  = $user_banco";

        $statement = $this->connection->prepare($sql);
        $statement->execute();
    }

    function getId(string $nome)
    {
        $sql = "SELECT `id` FROM `usuarios` WHERE `usuario` = '$nome'";

        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $usuario_do_banco = $statement->fetch(PDO::FETCH_ASSOC);
        return $usuario_do_banco;
    }

    function getIdAllEditor()
    {
        $sql = "SELECT `id` FROM `usuarios` WHERE `nivel` = 3";

        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $usuario_do_banco = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $usuario_do_banco;
    }

    function getUserEditor($id)
    {
        $sql = "SELECT `nome` FROM `usuarios` WHERE `id` = $id";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $usuario_do_banco = $statement->fetch(PDO::FETCH_ASSOC);
        return $usuario_do_banco['nome'];
    }

    function getMailEditor($id)
    {
        $sql = "SELECT `email` FROM `usuarios` WHERE `id` = $id";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $usuario_do_banco = $statement->fetch(PDO::FETCH_ASSOC);
        return $usuario_do_banco['email'];
    }

    function getIdAllNonEditor()
    {
        $sql = "SELECT `id` FROM `usuarios` WHERE `nivel` = 1";

        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $usuario_do_banco = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $usuario_do_banco;
    }

    function getUserNonEditor($id)
    {
        $sql = "SELECT `nome` FROM `usuarios` WHERE `id` = $id";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $usuario_do_banco = $statement->fetch(PDO::FETCH_ASSOC);
        return $usuario_do_banco['nome'];
    }

    function getMailNonEditor($id)
    {
        $sql = "SELECT `email` FROM `usuarios` WHERE `id` = $id";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $usuario_do_banco = $statement->fetch(PDO::FETCH_ASSOC);
        return $usuario_do_banco['email'];
    }
    function salvarPublicacao($text, $autor, $titulo, $categoria, $imagem)
    {

        $sql = "INSERT INTO `publicacao` (`conteudo`, `autor`, `titulo`, `categoria`, `imagem`) VALUES (' " . $text . " ', ' " . $autor . "', ' " . $titulo . "', ' " . $categoria . "', ' ". $imagem . "')";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        //header("location: {$this->base_path}/index.php?msg=publicacaocriada");
    }

    function view($comando)
    {
        $sql = "SELECT `conteudo`, `titulo`, `id` FROM `publicacao` ORDER BY `postagem` DESC LIMIT 3";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $conteudo = $statement->fetchAll(PDO::FETCH_ASSOC);
        $conteudoTexto = $conteudo;
        if(!empty($conteudoTexto[0])){$link1 = $conteudoTexto[0]['id'];};
        if(!empty($conteudoTexto[1])){$link2 = $conteudoTexto[1]['id'];};
        if(!empty($conteudoTexto[2])){$link3 = $conteudoTexto[2]['id'];};
        if (!empty($conteudoTexto[0]) && $comando == 1) {
            echo "<a href=post.php?id=$link1>" . $conteudoTexto[0]['titulo'] . "<br>" . $conteudoTexto[0]['conteudo'] . "</a>";
        }else return null;
        if (!empty($conteudoTexto[1]) && $comando == 1) {
            echo "<a href=post.php?id=$link1>" . $conteudoTexto[1]['titulo'] . "<br>" . $conteudoTexto[1]['conteudo'] . "</a>";
        }else return null;
        if (!empty($conteudoTexto[2]) && $comando == 1) {
            echo "<a href=post.php?id=$link1>" . $conteudoTexto[2]['titulo'] . "<br>" . $conteudoTexto[2]['conteudo'] . "</a>";
        }else return null;
        if (!empty($conteudoTexto)) {
        }
    }

    function viewTituloById($id)
    {
        $sql = "SELECT `titulo` FROM `publicacao` WHERE `id` = $id";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $conteudo = $statement->fetch(PDO::FETCH_ASSOC);
        echo $conteudo['titulo'];
    }
    function getTituloById($id)
    {
        $sql = "SELECT `titulo` FROM `publicacao` WHERE `id` = $id";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $conteudo = $statement->fetch(PDO::FETCH_ASSOC);
        return $conteudo['titulo'];
    }
    function viewCategoriaById($id)
    {
        $sql = "SELECT `categoria` FROM `publicacao` WHERE `id` = $id";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $conteudo = $statement->fetch(PDO::FETCH_ASSOC);
        echo $conteudo['categoria'];
    }
    function getCategoriaById($id)
    {
        $sql = "SELECT `categoria` FROM `publicacao` WHERE `id` = $id";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $conteudo = $statement->fetch(PDO::FETCH_ASSOC);
        return $conteudo['categoria'];
    }
    function getCategoriaId($categoria)
    {
        if($categoria == ' Cripto'){
            return 1;
        }elseif($categoria == ' Software'){
            return 2;
        }elseif($categoria == ' Hardware'){
            return 3;
        }elseif($categoria == ' Tecnologias em Geral'){
            return 4;
        }
    }
    function viewConteudoById($id)
    {
        $sql = "SELECT `conteudo` FROM `publicacao` WHERE `id` = $id";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $conteudo = $statement->fetch(PDO::FETCH_ASSOC);
        echo $conteudo['conteudo'];
    }
    function viewDataById($id)
    {
        $sql = "SELECT `postagem` FROM `publicacao` WHERE `id` = $id";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $conteudo = $statement->fetch(PDO::FETCH_ASSOC);
        echo $conteudo['postagem'];
    }
    function getDataById($id)
    {
        $sql = "SELECT `postagem` FROM `publicacao` WHERE `id` = $id";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $conteudo = $statement->fetch(PDO::FETCH_ASSOC);
        return $conteudo['postagem'];
    }
    function viewAutorById($id)
    {
        $sql = "SELECT `autor` FROM `publicacao` WHERE `id` = $id";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $conteudo = $statement->fetch(PDO::FETCH_ASSOC);
        echo $conteudo['autor'];
    }
    function getAutorById($id)
    {
        $sql = "SELECT `autor` FROM `publicacao` WHERE `id` = $id";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $conteudo = $statement->fetch(PDO::FETCH_ASSOC);
        return $conteudo['autor'];
    }
    function getPubliId($titulo)
    {
        $sql = "SELECT `id` FROM `publicacao` WHERE `titulo` = '$titulo'";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $conteudo = $statement->fetch(PDO::FETCH_ASSOC);
        $conteudoId['publi'] = $conteudo;
        if (!empty($conteudoId['publi']['id'])) {

            return $conteudoId['publi']['id'];
        } else exit;
    }

    function deletePubli($id){
            $sql = "DELETE FROM `publicacao` WHERE `id` = $id";
            $statement = $this->connection->prepare($sql);
            $statement->execute();
    }

    function getNextPostId($id){
        $sql = "SELECT `id` FROM `publicacao` WHERE `id` > $id ORDER BY `id` ASC";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $id = $statement->fetch(PDO::FETCH_ASSOC);
        if(!empty($id)){
        return $id['id'];
        }else return null;
    }
    function getPreviousPostId($id){
        $sql = "SELECT `id` FROM `publicacao` WHERE `id` < $id ORDER BY `id` DESC";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $id1 = $statement->fetch(PDO::FETCH_ASSOC);
        if(!empty($id1)){
        return $id1['id'];
        }else return null;
    }
    function getPreviousPostIdWCat($id, $categoria){
        $sql = "SELECT `id` FROM `publicacao` WHERE `id` < $id AND `categoria` = '$categoria' ORDER BY `id` DESC";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $id1 = $statement->fetch(PDO::FETCH_ASSOC);
        if(!empty($id1)){
        return $id1['id'];
        }else return $id;
    }
    function getLastPostIdWCat($categoria){
        $sql = "SELECT `id` FROM `publicacao` WHERE `categoria` = '$categoria' ORDER BY `postagem` DESC";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $id = $statement->fetch(PDO::FETCH_ASSOC);
        if(!empty($id)){
        return $id['id'];
        }else return null;
    }
    function getLastPostId(){
        $sql = "SELECT `id` FROM `publicacao` WHERE `postagem` = (SELECT MAX(`postagem`) FROM `publicacao`);";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $id = $statement->fetch(PDO::FETCH_ASSOC);
        if(!empty($id)){
        return $id['id'];
        }else return null;
    }
    function insertImagemBanco($imagem){
        $sql = "INSERT INTO `publicacao` (`imagem`) VALUES ('". $imagem ."')";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
    }
    function getImagemById($id)
    {
        $sql = "SELECT `imagem` FROM `publicacao` WHERE `id` = $id";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $conteudo = $statement->fetch(PDO::FETCH_ASSOC);
        return $conteudo['imagem'];
    }
    function countPostsByCat($categoria){
        $sql = "SELECT count(`id`) FROM `publicacao` WHERE `categoria` = '$categoria'";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $numero = $statement->fetch(PDO::FETCH_ASSOC);
        return $numero['count(`id`)'];
    }
    function getIdAllPubli()
    {
        $sql = "SELECT `id` FROM `publicacao`";

        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $usuario_do_banco = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $usuario_do_banco;
    }
}