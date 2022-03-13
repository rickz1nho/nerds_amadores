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

            header("location:{$this->base_path}/login_page.php?msg=usuario ou senha nao estao corretos");
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

    function getId(string $id)
    {
        $sql = "SELECT `id` FROM `usuarios` WHERE `usuario` = '$id'";

        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $usuario_do_banco = $statement->fetch(PDO::FETCH_ASSOC);
        return $usuario_do_banco;
    }

    function salvarPublicacao($text, $autor, $titulo, $categoria)
    {

        $sql = "INSERT INTO `publicacao` (`conteudo`, `autor`, `titulo`, `categoria`) VALUES (' " . $text . " ', ' " . $autor . "', ' " . $titulo . "', ' " . $categoria . "')";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        header("location: {$this->base_path}/index.php?msg=publicacaocriada");
    }

    function view()
    {
        $sql = "SELECT `conteudo` FROM `publicacao` WHERE `postagem` = (SELECT MAX(`postagem`) FROM `publicacao`);";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $conteudo = $statement->fetch(PDO::FETCH_ASSOC);
        $conteudoTexto['texto'] = $conteudo;
        if(!empty($conteudoTexto['texto']['conteudo'])){
        echo $conteudoTexto['texto']['conteudo'];
        }
    }

    function getPubliId(){
        $sql = "SELECT `id` FROM `publicacao` WHERE `postagem` = (SELECT MAX(`postagem`) FROM `publicacao`);";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $conteudo = $statement->fetch(PDO::FETCH_ASSOC);
        return $conteudo;

    }

    function deletePubli($id){
        $sql = "DELETE FROM `publicacao` WHERE `id` = $id";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
    }
}
