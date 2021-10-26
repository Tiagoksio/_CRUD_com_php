<?php 
if (isset($_GET['id_del'])) {
    $id_msg = input_validation($_GET['id_del']);
    $mensagens->deleteMessage($id_msg);
}