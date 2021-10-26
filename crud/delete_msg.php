<?php 
function input_validation($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;    
}

if (isset($_GET['id'])) {
    $id_msg = input_validation($_GET['id']);
    $mensagens->deleteMessage($id_msg);
}