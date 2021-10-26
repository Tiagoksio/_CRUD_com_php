<?php
require_once './config.php';
require_once DB_API;


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    // Validação do Formulário
    function input_validation($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;    
}
    $mensagem = new Messages(DB_NAME, DB_HOST, DB_USER, DB_PASSWORD);
    
    $dados_form = [
        $_POST["nome"], 
        $_POST["sobrenome"], 
        $_POST["email"], 
        $_POST["tel"], 
        $_POST["cidade"],
        $_POST["assunto"], 
        $_POST["msg"]
    ];


    $campos_vazios = false;
    
    
    foreach ($dados_form as $k => $v) {
        if (empty($v)) {
            echo "<script>empty_field(". $k .")</script>";
            $campos_vazios = true;
        } else {
            $v = input_validation($v);
        }
    }

    if (!$campos_vazios) {
        if (
            $mensagem->setMessage(
                $dados_form[0],
                $dados_form[1],
                $dados_form[2],
                $dados_form[3],
                $dados_form[4],
                $dados_form[5],
                $dados_form[6]
            )
        ) {
            echo "<script>registred_message(true)</script>";
        } else {
            echo "<script>registred_message(false)</script>";
        }
    }
}
