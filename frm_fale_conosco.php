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
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>  
    <!-- scripts -->
    <script src="./scripts/script.js"></script>
</head>
<body>
    <?php
    require_once './parts/header.php';
    ?>

    <?php
    $nome = $sobrenome = $email = $tel = $cidade = $msg = $assunto = "";  

    function input_validation($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <!--estrutura do formulário-->
    
    <div class="container">
        <form id="fale_conosco" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div>
                <h2>Fale Conosco</h2>
                <span class="msg-erro"><strong>Preencha Todos os Campos!</strong></span>
            </div>
            <fieldset class="rementente">
                <div class="field">
                    <label for="frm_first_name">Nome:</label>
                    <input type="text"  id="frm_first_name" name="nome" placeholder="Nome.." >
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
                    <input id="frm_tel" type="tel" required name="tel" placeholder="(ddd)9 xxxx-xxxx">
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

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
            
        if (empty($_POST["nome"])) {
            echo "<script>empty_field(0)</script>";
        } else {
            $nome = input_validation($_POST["nome"]);
        }

        if (empty($_POST["sobrenome"])) {
            echo "<script>empty_field(1)</script>";
        } else {
            $sobrenome = input_validation($_POST["sobrenome"]);
        }

        if (empty($_POST["email"])) {
            echo "<script>empty_field(2)</script>";
        } else {
            $email = input_validation($_POST["email"]);
        }

        if (empty($_POST["tel"])) {
            echo "<script>empty_field(3)</script>";
        } else {
            $tel = input_validation($_POST["tel"]);
        }
        if (empty($_POST["cidade"])) {
            echo "<script>empty_field(4)</script>";
        } else {
            $cidade = input_validation($_POST["cidade"]);
        }

        if (empty($_POST["assunto"])) {
            echo "<script>empty_field(5)</script>";
        } else {
            $assunto = input_validation($_POST["assunto"]);
        }
        if (empty($_POST["msg"])) {
            echo "<script>empty_field(6)</script>";
        } else {
            $msg = input_validation($_POST["msg"]);
        }
        
    }

    
    # área do rodapé (footer) 
    require_once './parts/footer.php';
    ?>
    
</body>
</html>

