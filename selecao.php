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
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>
    <?php  
        require_once './parts/header.php';
        require_once './class/Messages.php';
        $mensagens = new Messages("db_crud_php", "localhost", "crud_php", "123456");
        $dados = $mensagens->getMessages();
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
            if (count($dados) > 0) {
                for ($i=0; $i < count($dados); $i++) { 
                    echo "<tr>";
                    foreach ($dados[$i] as $key => $value) {
                        if ($key != "id" and $key != "cidade" and $key != "msg") {
                            echo "<td>" . $value . "</td>";
                        }
                    }
                    ?>
                    <td>                    
                        <img src="icons\005-show.png" alt="mostrar"> |
                        <img src="icons\001-editing.png" alt="editar"></i> |
                        <img src="icons\006-delete.png" alt="deletar"></i>
                    </td>
                    <?php
                    echo "</tr>";
                }
                echo "</tbody></table>";
            } else {
                echo "</tbody></table><span>Nenhuma Mensagem Foi cadastrada</span>";
            }          
            ?>
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


