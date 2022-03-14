<?php
            if (!empty($repository->getPubliId($titulo))) {

                echo '<form action="app/controllers/controllerForm.php?action=delete&msg=' . $titulo . '" method="POST">
                <button type="submit" class="button-67" onclick="return confirm(`Tem certeza que deseja deletar essa publicacao?`)">Deletar pulicação</button>

<<<<<<< HEAD
                </form>';
            }
=======
$data = curl_exec($ch);
$info = curl_getinfo($ch);
curl_close($ch);

if ($info['http_code'] == 200) {
    $data = json_decode($data);
    var_dump($data);
} else {
    echo 'Failed with ' . $info['http_code'];
}

require_once __DIR__ . "/config.php";
require_once __DIR__ . "/app/repositories/UserRepository.php";


echo "--------------------------";
$repository = new UserRepository();
$repository->view(1);
>>>>>>> 2b4089b5cb7268d89b02076d640917fad0e80a5a
