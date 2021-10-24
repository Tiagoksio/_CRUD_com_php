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
</head>
<body>
    <?php
    require_once './parts/header.php';
    ?>

    <?php
    $nome = $sobre = $email = $fone = $cidade = $msg = "";
    $nomeErr = $sobreErr = $emailErr = $foneErr = $cidadeErr = $assuntoErr = $msgErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["nome"])) {
            $nomeErr = "Este campo não pode estar vazio";
        } else {
            $nome = test_input($_POST["nome"]);
        }

        if (empty($_POST["sobrenome"])) {
            $sobreErr = "Este campo não pode estar vazio";
        } else {
            $sobre = test_input($_POST["sobrenome"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "Este campo não pode estar vazio";
        } else {
            $email = test_input($_POST["email"]);
        }
        if (empty($_POST["fone"])) {
            $foneErr = "Este campo não pode estar vazio";
        } else {
            $fone = test_input($_POST["fone"]);
        }
        $cidade = test_input($_POST["cidade"]);
        $msg = test_input($_POST["msg"]);
    }

    

    function test_input($data) {
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
            </div>
            <fieldset class="rementente">
                <div class="field">
                    <label for="frm_first_name">Nome:</label>
                    <input type="text" required id="frm_first_name" name="nome" placeholder="Nome.." >
                </div>
                <span>
                    <?php echo $nomeErr; ?>
                </span>
                <div class="field">
                    <label for="frm_last_name">Sobrenome:</label>
                    <input type="text" required id="frm_last_name" name="sobrenome" placeholder="Sobrenome.." >
                </div>
                <span>
                    <?php echo $sobreErr; ?>
                </span>
                <div class="field">
                    <label for="frm_email">E-mail:</label>
                    <input id='frm_email' type="email" required name="email"  placeholder="email@dominio.com.br">
                </div>
                <span>
                    <?php echo $emailErr; ?>
                </span>
                <div class="field">
                    <label for="frm_tel">Telefone:</label>
                    <input id="frm_tel" type="tel" required name="fone" placeholder="(ddd)9 xxxx-xxxx">
                </div>
                <span>
                    <?php echo $foneErr; ?>
                </span>
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
                <input id="frm_assunto"type="text" required id="frm_first_name" name="first_name" placeholder="Assunto" >
            </div>
            <span>
                <?php echo $assuntoErr; ?>
            </span>
            <div class="field">
                <label id="frm_msg">Mensagem:</label>
                <textarea id="frm_msg" style="height:200px" name="msg" placeholder="Digite sua mensagem"></textarea>
            </div>
            </fieldset>
            <div class="field">
                <input type="submit" value="Cadastrar">
            </div>
        </form>
        <!--
             
        <div class="#">  
            <?php if (isset($_POST['nome'])): ?>
            
            <ol>
                <li><?php echo "<b>Nome: </b>$nome"; ?></li>
                <li><?php echo "<b>Sobrenome: </b>$sobre"; ?></li>
                <li><?php echo "<b>E-mail: </b>$email"; ?></li>
                <li><?php echo "<b>Telefone: </b>$fone"; ?></li>
                <li><?php echo "<b>Cidade: </b>$cidade"; ?></li>
                <li><?php echo "<b>Mensagem: </b>$msg"; ?></li>
            </ol>
        
            <?php
                else:
                    echo "Dados do formulário";
                endif;
            ?>
            
        </div>
         
        -->   
    </div>
    
    <!--área do rodapé (footer)-->
    <?php
    require_once './parts/footer.php';
    ?>
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>  
    <!-- scripts -->
    <script src="./scripts/script.js"></script>
</body>
</html>

