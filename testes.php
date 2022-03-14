<?php
            if (!empty($repository->getPubliId($titulo))) {

                echo '<form action="app/controllers/controllerForm.php?action=delete&msg=' . $titulo . '" method="POST">
                <button type="submit" class="button-67" onclick="return confirm(`Tem certeza que deseja deletar essa publicacao?`)">Deletar pulicação</button>

                </form>';
            }
