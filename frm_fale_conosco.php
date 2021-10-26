<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto - CRUD</title>     
    <!-- styles -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/forms.css">  
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">  
   
    <!-- scripts -->
    <script src="./scripts/script.js"></script>
</head>
<body>
    <?php
        require_once './config.php';
        require_once TEMPLATE_HEADER;
    ?>
    <!-- estrutura do formulário -->
    
    <div class="container">
        <form id="fale_conosco" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "POST">
            <div>
                <h2>Fale Conosco</h2>
                <span class="msg-erro"><strong>Preencha Todos os Campos!</strong></span>
            </div>
            <fieldset class="rementente">
                <div class="field">
                    <label for="frm_first_name">Nome:</label>
                    <input type="text" required id="frm_first_name" name="nome" placeholder="Nome.." >
                </div>
                <div class="field">
                    <label for="frm_last_name">Sobrenome:</label>
                    <input type="text" required id="frm_last_name" name="sobrenome" placeholder="Sobrenome.." >
                </div>
                <div class="field">
                    <label for="frm_email">E-mail:</label>
                    <input id='frm_email' type="email" required name="email"  placeholder="email@dominio.com.br">
                </div>
                <div class="field">
                    <label for="frm_tel">Telefone:</label>
                    <input id="frm_tel" type="tel" required name="tel" placeholder="(ddd)9 xxxx-xxxx" minlength="11" maxlength="11">
                </div>
                <div class="field">    
                    <label for="frm_cidade">Cidade Satélite:</label>
                    <select id="frm_cidade" name="cidade">
                        <option value="Taguatinga">Taguatinga</option>
                        <option value="Ceilândia" >Ceilândia</option>
                        <option value="Gama">Gama</option>
                        <option value="Samambaia">Samambaia</option>
                        <option value="Cruzeiro">Cruzeiro</option>
                        <option value="Guará">Guará</option>
                        <option value="Riacho Fundo">Riacho Fundo</option>
                        <option value="Lago Sul">Lago Sul</option>
                        <option value="Santa Maria">Santa Maria</option>
                        <option value="Brazlândia">Brazlândia</option>
                        <option value="Recanto das Emas">Recanto das Emas</option>
                        <option value="Planaltina">Planaltina</option>
                    </select>
                </div>
            </fieldset>
            <fieldset class="frm_field_msg">
            <div class="field">
                <label for="frm_assunto">Assunto:</label>
                <input id="frm_assunto"type="text" required name="assunto" placeholder="Assunto" >
            </div>
            <div class="field">
                <label id="frm_msg">Mensagem:</label>
                <textarea id="frm_msg" style="height:200px" name="msg" placeholder="Digite sua mensagem"></textarea>
            </div>
            </fieldset>
            <div class="field">
                <input id="btn_submit" type="submit" value="Cadastrar">
            </div>
        </form>
    </div>
        
    <?php

    require_once CADASTRAR_MSG;
    # área do rodapé (footer) 
    require_once TEMPLATE_FOOTER;
    ?>
    
