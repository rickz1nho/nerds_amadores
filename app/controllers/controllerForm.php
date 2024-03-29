<?php

require_once __DIR__ . "/../repositories/UserRepository.php";
require_once __DIR__ . "/../../config.php";


//roteamento

switch ($_GET['action']) {

    case 'save':
        salvarPublicacao();
        break;

    case 'delete':
        delete();
        break;


    case 'update':
        updatePublicacao($_GET['id']);
        break;

    case 'promove':
        promove();
        break;

    default:
        # code...
        break;
}



function salvarPublicacao()
{

    $repository = new UserRepository();
    $target_dir = "images/carousel/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $target_banco = "app/controllers/" . $target_file;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 50000000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            header("location:" . BASE_URL . "/index.php?msg=20");
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $texto = $_POST['editor_content'];
    $titulo = $_POST['titulo'];
    $categoria = $_POST['str'];

    $repository = new UserRepository;

    $repository->salvarPublicacao($texto, $_SESSION['usuario']['usuario'], $titulo, $categoria, $target_banco);
}
function updatePublicacao($id)
{

    $repository = new UserRepository();
    $target_dir = "images/carousel/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $target_banco = "app/controllers/" . $target_file;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 50000000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            //header("location:" . BASE_URL . "/index.php?msg=20");
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $texto = $_POST['editor_content'];
    $titulo = $_POST['titulo_update'];
    $categoria = $_POST['categoria_update'];

    $repository = new UserRepository;

    $repository->attPublicacao($texto, $titulo, $categoria, $target_banco, $id);

    header("location:" . BASE_URL . "/index.php?msg=21");
}

function delete()
{
    $repository = new UserRepository;

    $id = $_GET['id'];

    $repository->deletePubli($id);

    header("location:" . BASE_URL . "/index.php?msg=22");
}
