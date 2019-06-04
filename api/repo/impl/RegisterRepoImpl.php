<?php
/**
 * Created by IntelliJ IDEA.
 * User: acer
 * Date: 25/11/2018
 * Time: 16:48
 */
require_once __DIR__.'/../RegisterRepo.php';
require_once __DIR__.'/../../db/DBConnection.php';
require_once __DIR__.'/../../core/Register.php';

class RegisterRepoImpl implements RegisterRepo
{
    private $connection;

    public function setConnection(mysqli $connection)
    {
        $this->connection = $connection;
    }

    public function addRegister(Register $dto): bool
    {
        $result=$this->connection->query("INSERT INTO Register values ('{$dto->getName()}','{$dto->getPassword()}','{$dto->getTp()}','{$dto->getEmail()}','{$dto->getDOB()}','{$dto->getAddress()}','{$dto->getCity()}','{$dto->getCountry()}')");
        return $result>0;
    }
}