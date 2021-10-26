<?php
require_once 'config.php';
require_once DB_API;

$mensagens = new Messages(DB_NAME, DB_HOST, DB_USER, DB_PASSWORD);
$id_msg;
$dados = $mensagens->getMessages();

// Passar os dados para o escopo local da função ao executar
function listMessages($dados)
{
    if (count( $dados) > 0) {
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
                <img src="icons\001-editing.png" alt="editar"> |
                <a href="./selecao.php?id=<?php echo $dados[$i]['id'];?>"><img src="icons\006-delete.png" alt="deletar"></a> 
            </td>
            <?php
            echo "</tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "</tbody></table><span>Nenhuma Mensagem Foi cadastrada</span>";
    }
}

?>