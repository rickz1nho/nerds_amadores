<?php


require_once __DIR__ . "/../../config.php";
require_once __DIR__ . "/../repositories/UserRepository.php";

$user = $_POST['field_usuario'];
$pass = $_POST['field_senha'];


//validacao
if (empty($user) or empty($pass)) {
    # se usuario ou senha estiverem vazios
    header("location: {$base_path}/login_page.php?msg=2");
    exit; //nada eh executado daqui pra baixo...
};

$repository = new UserRepository();
$usuario = $repository->findUserByLogin($user, $pass);

//criou sessao do usuario
$_SESSION['usuario'] = $usuario;

header("location: {$base_path}/index.php");
