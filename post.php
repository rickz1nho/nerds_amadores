<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="css/post/base.css">
    <link rel="stylesheet" href="css/post/vendor.css">
    <link rel="stylesheet" href="css/post/main.css">
    <script src="js/post/modernizr.js"></script>
    <script src="js/post/pace.min.js"></script>
</head>

</html>


<?php

require_once __DIR__ . "/config.php";
require_once __DIR__ . "/app/repositories/UserRepository.php";


$repository = new UserRepository();
$id = $_GET['id'];
$repository->viewTituloById($id);
echo  nl2br("\n");
$repository->viewConteudoById($id);
echo  nl2br("\n");
$repository->viewDataById($id);
echo  nl2br("\n");
$repository->viewAutorById($id);
?>