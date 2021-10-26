<?php

$res_msgs = $mensagens->fetchAllMessages();

// Passar os dados para o escopo local da função ao executar
function listMessages($res_msgs)
{
    if (count($res_msgs) > 0) {
        for ($i=0; $i < count($res_msgs); $i++) { 
            echo "<tr>";
            foreach ($res_msgs[$i] as $key => $value) {
                if ($key != "id" and $key != "cidade" and $key != "msg") {
                    echo "<td>" . $value . "</td>";
                }
            }
            
            ?>
            <td>
            <!--./selecao.php?id_up=  onclick="activate_modal(true)" -->        
                <img src="icons\005-show.png" alt="mostrar"> |
                <a href="./selecao.php?id_up=<?php echo $res_msgs[$i]['id'];?>"><img src="icons\001-editing.png" alt="editar"></a> |
                <a href="./selecao.php?id_del=<?php echo $res_msgs[$i]['id'];?>"><img src="icons\006-delete.png" alt="deletar"></a> 
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