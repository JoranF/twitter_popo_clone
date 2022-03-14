<?php
class db
{

    private $db_host = 'localhost';
    private $db_user = 'root';
    private $db_pass = '';
    private $db_name = 'twitter_popo';


    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        $mysql_connect_str = "mysql:host=$this->db_host;dbname=$this->db_name";
        $this->db_connect_pdo = new PDO($mysql_connect_str, $this->db_user, $this->db_pass);
        $this->db_connect_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function query($query, $params = [])
    {   
        $this->db_query_pdo = $this->db_connect_pdo->prepare($query);
        $this->db_query_pdo->execute($params);
        $this->db_result = $this->db_query_pdo->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getResult()
    {
        return $this->db_result;
    }

}
