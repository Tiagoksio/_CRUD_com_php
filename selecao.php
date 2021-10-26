<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto - CRUD</title>     
    <!-- styles -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/selection.css">
    <link rel="stylesheet" href="css/modal.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="/eye-solid.svg" type="image/x-icon">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>
    <?php 
        require_once 'config.php';
        require_once TEMPLATE_HEADER;
        require_once DB_API;
        $mensagens = new Messages(DB_NAME, DB_HOST, DB_USER, DB_PASSWORD); // Corrigir a classe
        function input_validation($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;    
        }

        require_once 'crud/update_msg.php';
        require_once EXCLUIR_MSG;
        require_once LISTAR_MSG;         
    ?> 
    <!--tabela de seleção de usuários-->
    <div class="container">
    
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>Assunto</th> 
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php
                listMessages($res_msgs);                      
            ?>
    </div>
    
    <!--área do rodapé (footer)-->
    <?php
    
    require_once TEMPLATE_FOOTER;
    include_once 'template/modal.php';
    ?>