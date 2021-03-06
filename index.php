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
        <!--conteúdo central do site-->            
        <main class="leftcolumn">
            <article class="card">
                <h2>Curso de manutenção</h2>
                <h5>Descrição do título, 13/10/2021</h5>
                <div class="fakeimg" style="height:200px;">
                    <img src="#" height="160" alt=""/>
                </div>
                <p>Some text..</p>
                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            </article>
            <article class="card">
                <h2>Título 1</h2>
                <h5>Descrição do título, 13/10/2021</h5>
                <div class="fakeimg" style="height:200px;">Image</div>
                <p>Some text..</p>
                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            </article>
        </main>
        <!--divisão direita-->
        <aside class="rightcolumn">
            <article class="card">
                <h2>Sobre...</h2>
                <div class="fakeimg" style="height:100px;">Image</div>
                <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
            </article>
            <section class="card">
                <h3>Posts mais recentes</h3>
                <div class="fakeimg"><p>Image</p></div>
                <div class="fakeimg"><p>Image</p></div>
                <div class="fakeimg"><p>Image</p></div>
            </section>
            <article class="card">
                <h3>Follow Me</h3>
                <p>Some text..</p>
            </article>
        </aside>
        
    </div>
    
    <!--área do rodapé (footer)-->
    <?php
    require_once TEMPLATE_FOOTER;
    ?>

