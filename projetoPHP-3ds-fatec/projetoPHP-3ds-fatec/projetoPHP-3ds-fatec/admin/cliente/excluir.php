<?php

$id = filter_input(INPUT_GET, 'id');

include_once '../class/Cliente.php';
$cli = new Cliente();
$cli->setId($id);

if($cli->excluir()){
    ?>
    <div class="alert alert-primary" role="alert">Excluido com sucesso</div>
    <?php
} else {
    ?>
    <div class="alert alert-danger" role="alert">Erro ao excluir</div>
    <?php
}
?>