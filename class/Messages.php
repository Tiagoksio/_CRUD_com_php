<?php
class Messages {
    private $pdo;

    public function __construct($dbname, $host, $user, $password) {
        try {
            $this->pdo = new PDO("mysql:dbname=".$dbname.";host:host=".$host, $user, $password );
        } catch (PDOException $e) {
            echo "Ocorreu um erro com o banco de dados: ".$e->getMessage();
        } catch (Exception $e) {
            echo "Ocorreu um erro: ".$e->getMessage();
        }
    }

    public function getMessages () {
        $res = array();
        $cmd = $this -> pdo -> query("SELECT * FROM tb_mensagens ORDER BY nome DESC");
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }
}