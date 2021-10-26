<?php
class Messages {
    private $db_conn;

    public function __construct($dbname, $host, $user, $password) {
        try {
            $this->db_conn = new PDO("mysql:dbname=".$dbname.";host:host=".$host, $user, $password );
            $this->db_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Ocorreu um erro com o banco de dados: ".$e->getMessage();
        } catch (Exception $e) {
            echo "Ocorreu um erro: ".$e->getMessage();
        }
    }

    //SELECT
    public function fetchAllMessages () {
        $res = array(); //Retornar o Array vazio caso não encontre mensagens;
        $cmd = $this -> db_conn -> query("SELECT * FROM tb_mensagens ORDER BY id DESC");
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    //INSERT
    public function insertMessage ($nome, $sobrenome, $email, $telefone, $cidade, $assunto, $msg ) {

        $cmd = $this -> db_conn -> prepare("INSERT INTO tb_mensagens (nome, sobrenome, email, telefone, cidade, assunto, msg) VALUES (:nome, :sobrenome, :email, :telefone, :cidade, :assunto, :msg)");

        $cmd -> bindValue(':nome', $nome);
        $cmd -> bindValue(':sobrenome', $sobrenome);
        $cmd -> bindValue(':email', $email);
        $cmd -> bindValue(':telefone', $telefone);
        $cmd -> bindValue(':cidade', $cidade);
        $cmd -> bindValue(':assunto', $assunto);
        $cmd -> bindValue(':msg', $msg);
        $cmd -> execute();

        return true;
    }

    //DELETE
    public function deleteMessage($id_msg) {
        $cmd = $this -> db_conn -> prepare("DELETE FROM tb_mensagens WHERE id = :id");
        $cmd -> bindValue(":id", $id_msg);
        $cmd -> execute();
    }

    //UPDATE
    public function fetchMessage($id_msg) {   
        $res = array(); //Retornar o Array vazio caso não encontre mensagens;
        $cmd = $this -> db_conn -> prepare("SELECT * FROM tb_mensagens WHERE id = :id");
        $cmd -> bindValue(':id', $id_msg);
        $cmd -> execute();

        $res = $cmd->fetch(PDO::FETCH_ASSOC);
        return $res;
    

    }

    public function updateMessage($nome, $sobrenome, $email, $telefone, $cidade, $assunto, $msg, $id_msg) {
        $cmd = $this -> db_conn -> prepare("UPDATE tb_mensagens SET nome = :n, sobrenome = :sn, email = :e, telefone = :t, cidade = :c, assunto = :a, msg = :msg WHERE id = :id");

        $cmd -> bindValue(':n', $nome);
        $cmd -> bindValue(':sn', $sobrenome);
        $cmd -> bindValue(':e', $email);
        $cmd -> bindValue(':t', $telefone);
        $cmd -> bindValue(':c', $cidade);
        $cmd -> bindValue(':a', $assunto);
        $cmd -> bindValue(':msg', $msg);
        $cmd -> bindValue(':id', $id_msg);
        $cmd -> execute();
    }
}