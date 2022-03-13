<?php

    require_once __DIR__."/../repositories/UserRepository.php";
    require_once __DIR__."/../../config.php";


    //roteamento

    switch ($_GET['action']) {
       
        case 'save':
            salvarPublicacao();
            break;

        case 'delete':
            delete();
            break;


        case 'update':
            update();
            break;

        case 'promove':
            promove();
            break;
        
        default:
            # code...
            break;
    }



    function salvarPublicacao(){
    
        $texto = $_POST['editor_content'];
        $titulo = $_POST['titulo'];
        $categoria = $_POST['str'];

        $repository = new UserRepository;

        $repository->salvarPublicacao($texto, $_SESSION['usuario']['usuario'], $titulo, $categoria);
    
    }

    function delete(){

        $titulo = $_GET['msg'];

        $repository = new UserRepository;

        $id = $repository->getPubliId($titulo);

        $publiId['publi'] = $id;

        $repository->deletePubli($publiId['publi']);

        header("location:" .BASE_URL. "/index.php?msg=publicacaodeletada");

    }