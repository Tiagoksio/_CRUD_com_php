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
                listMessages($dados);                      
            ?>
    </div>
    
    <!--área do rodapé (footer)-->
    <?php
    require_once EXCLUIR_MSG;
    require_once TEMPLATE_FOOTER;
    ?>



