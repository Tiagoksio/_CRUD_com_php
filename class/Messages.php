<?php
class Messages {
    private $pdo;
    public $res;

    public function __construct($dbname, $host, $user, $password) {
        try {
            $this->pdo = new PDO("mysql:dbname=".$dbname.";host:host=".$host, $user, $password );
        } catch (PDOException $e) {
            echo "Ocorreu um erro com o banco de dados: ".$e->getMessage();
        } catch (Exception $e) {
            echo "Ocorreu um erro: ".$e->getMessage();
        }
    }

    //SELECT
    public function getMessages () {
        $res = array(); //Retornar o Array vazio caso não encontre mensagens;
        $cmd = $this -> pdo -> query("SELECT * FROM tb_mensagens ORDER BY nome DESC");
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    //INSERT
    public function setMessage ($nome, $sobrenome, $telefone, $email, $cidade, $assunto, $msg ) {

        $cmd = $this -> pdo -> prepare("INSERT INTO tb_mensagens (nome, sobrenome, telefone, email, cidade, assunto, msg) VALUES (:nome, :sobrenome, :telefone, :email, :cidade, :assunto, :msg)");

        $cmd -> bindValue(':nome', $nome);
        $cmd -> bindValue(':sobrenome', $sobrenome);
        $cmd -> bindValue(':telefone', $telefone);
        $cmd -> bindValue(':email', $email);
        $cmd -> bindValue(':cidade', $cidade);
        $cmd -> bindValue(':assunto', $assunto);
        $cmd -> bindValue(':msg', $msg);
        $cmd -> execute();

        return true;
    }
}