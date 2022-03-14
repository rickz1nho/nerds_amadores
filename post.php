<?php

require_once __DIR__ . "/config.php";
require_once __DIR__ . "/app/repositories/UserRepository.php";

$repository = new UserRepository();
$id = $_GET['id'];
$repository->viewTituloById($id);
echo  nl2br ("\n");
$repository->viewConteudoById($id);
echo  nl2br ("\n");
$repository->viewDataById($id);
echo  nl2br ("\n");
$repository->viewAutorById($id);