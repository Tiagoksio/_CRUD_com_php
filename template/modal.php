<div class="modal-container">
    <div class="modal">
        <h2>Editar Mensagem</h2>

        <form action="selecao.php" method="POST">
            <div class='field'>
                <label for="ed_nome" class="sr-only">Nome</label>
                <input type="text" name="nome" id="ed_nome" placeholder="Nome" value="<?php if (isset($msg_update)) {
                    echo $msg_update['nome'];
                }?>">
            </div>
            <div class="field">
                <label for="ed_sobrenome" class="sr-only">Sobrenome</label>
                <input type="text" name="sobrenome" id="ed_sobrenome" placeholder="Sobrenome" value="<?php if (isset($msg_update)) {
                    echo $msg_update['sobrenome'];
                }?>">
            </div>
            <div class="field">
                <label for="ed_email" class="sr-only">E-mail</label>
                <input type="email" name="email" id="ed_email" placeholder="Email@dominio.com" value="<?php if (isset($msg_update)) {
                    echo $msg_update['email'];
                }?>">
            </div>
            <div class="field">
                <label for="ed_telefone" class="sr-only">Telefone</label>
                <input type="tel" name="tel" id="ed_telefone" placeholder="(ddd)9 xxxx - xxxx" value="<?php if (isset($msg_update)) {
                    echo $msg_update['telefone'];
                }?>">
            </div>
            <div class="field">
                <label for="ed_cidade">Cidade Satélite:</label>
                <select id="ed_cidade" name="cidade" value="<?php if (isset($msg_update)) {
                    echo $msg_update['cidade'];
                }?>">
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
            <div class="field">
                <label for="ed_assunto" class="sr-only">Assunto</label>
                <input type="text" name="assunto" id="ed_assunto" placeholder="Assunto" value="<?php if (isset($msg_update)) {
                    echo $msg_update['assunto'];
                }?>">
            </div>
            <div class="field">
                <label for="ed_msg" class="sr-only">Mensagem</label>
                <textarea name="msg" id="ed_msg" cols="30" rows="10" ><?php if (isset($msg_update)) {
                    echo $msg_update['msg'];
                }?>"</textarea >
                <input type="hidden" name="id_msg" value="<?php if (isset($msg_update)) {
                    echo $id_msg;
                }?>">
            </div>
            <div class="buttons">
                <button class="btn-update">Atualizar</button>
            </div>
        </form>        
        <button class="btn-cancel" onclick="activate_modal(false)">Cancelar</button>
    </div>
</div>
<?php 
    if (isset($msg_update)) {
        echo "<script>activate_modal(true)</script>";
    }
?>


