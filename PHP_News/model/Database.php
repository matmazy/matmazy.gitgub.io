<?php

class Database
{
    const HOST = "localhost";
    const DBNAME = "php_news";
    const USER = "root";
    const PASS = "";

    private $conn;

    public function __construct()
    {
        $this->conn = new PDO("mysql:host=". SELF::HOST . ';dbname='. SELF::DBNAME .'', ''. SELF::USER .'', ''. SELF::PASS .'',
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        $this->conn->query("SET NAMES utf8");
    }

    public function execute($sql, $params)
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($params);

        return $stmt;
    }

    public function select($sql,$params = [])
    {
        $stmt=$this->execute($sql,$params);
        return $stmt->fetchAll();
    }

    public function selectOne($sql,$params = [])
    {
        $stmt=$this->execute($sql,$params);
        return $stmt->fetch();
    }

    public function update($sql,$params)
    {
        $stmt = $this->execute($sql,$params);
        $stmt->execute($params);

        return $stmt->rowCount();
    }

    public function insert($sql,$params)
    {
        $stmt= $this->execute($sql, $params);

        return $this->conn->lastInsertId();
    }

    public function trimtext($text, $start, $len)
    {
        return substr($text, $start, $len);
    }
}