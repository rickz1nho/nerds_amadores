<?php

require_once __DIR__ . "/config.php";
require_once __DIR__ . "/app/repositories/UserRepository.php";

$repository = new UserRepository();
$id = $_GET['id'];
echo "<h1>".$repository->viewById(2, $id)."</h1>";
$repository->viewById(1, $id);