<?php

class DB
{
    private $address = '127.0.0.1';
    private $login = 'root';
    private $pass = '';
    private $db = 'MelCars';
    private $mysql;

    function __construct()
    {
        $this->mysql = new mysqli($this->address, $this->login, $this->pass, $this->db);
    }

    function insertUser($username, $userphone)
    {
        $this->mysql->query("INSERT INTO `users` (`name`, `phone`) VALUES ('$username', '$userphone')");
    }

    function join($table1, $field1, $table2, $field2)
    {
        //$dbObj = $this->mysql->query("SELECT * FROM 'table1' JOIN '$table2' ON '$table1'.'$filed1' = '$table1'.'$filed1'");
        $dbObj = $this->mysql->query("SELECT * FROM `cars` JOIN pricelist ON cars.id = pricelist.car_id");

        $result = [];
        while ($row = $dbObj->fetch_assoc()) {
            $result[] = $row;
        }

        return $result;
    }
}

$DB = new DB();
