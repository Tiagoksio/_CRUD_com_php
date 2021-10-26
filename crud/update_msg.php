<?php 
if (isset($_GET['id_up'])) {
    $id_msg = input_validation($_GET['id_up']);
    $msg_update = $mensagens->fetchMessage($id_msg);
    
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $dados_form = [
        $_POST["nome"], 
        $_POST["sobrenome"], 
        $_POST["email"], 
        $_POST["tel"], 
        $_POST["cidade"],
        $_POST["assunto"], 
        $_POST["msg"],
        $_POST['id_msg']
    ];
    $campos_vazios = false;
    foreach ($dados_form as $k => $v) {
        if (empty($v)) {
            echo "<script>empty_field(". $k .")</script>";
            $campos_vazios = true;
        } else {
            $v = input_validation($v);
        }
    };

    if (!$campos_vazios) {
        $mensagens->updateMessage(
            $dados_form[0],
            $dados_form[1],
            $dados_form[2],
            $dados_form[3],
            $dados_form[4],
            $dados_form[5],
            $dados_form[6],
            $dados_form[7]
        );
    };
}