<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto - CRUD</title>     
    <!-- styles -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="/eye-solid.svg" type="image/x-icon">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">  
</head>
<body>
    <?php
    require_once './config.php';
    require_once TEMPLATE_HEADER;
    ?>
    <div class="container">
        <div class="col-4 bg-info" style="margin-top: 100px; border-radius: 25px;">
            <h1 class="text-center">Login</h1>
            <div>
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Endereço de E-mail</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" hidden="" class="form-text">E-mail ou senha inválida.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Lembrar</label>
                    </div>
                    <button style="margin-bottom: 20px;" type="submit" class="btn btn-primary">Logar</button>
                </form>
            </div>   
        </div>
    </div>
        
    <!--área do rodapé (footer)-->
    <?php
    require_once TEMPLATE_FOOTER;
    ?>