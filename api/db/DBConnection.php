<?php
/**
 * Created by IntelliJ IDEA.
 * User: acer
 * Date: 25/11/2018
 * Time: 16:31
 */

class DBConnection
{
    private $host="127.0.0.1";
    private $userName="root";
    private $password="Danudi.devindi97";
    private $database="AirTicketing";
    private $port="3306";

    private $connection;

    public function __construct()
    {
        $this->connection = new mysqli($this->host,$this->userName,$this->password,$this->database,$this->port);
        if($this->connection->connect_errno){
            echo $this->connection->connect_error;
            die();
        }

    }
    public  function getConnection()
    {
        return $this->connection;
    }



}