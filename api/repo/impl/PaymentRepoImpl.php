<?php
/**
 * Created by IntelliJ IDEA.
 * User: acer
 * Date: 26/11/2018
 * Time: 12:14
 */
require_once __DIR__.'/../PaymentRepo.php';
require_once __DIR__.'/../../db/DBConnection.php';
require_once __DIR__.'/../../core/payment.php';

class PaymentRepoImpl implements PaymentRepo
{

    public function setConnection(mysqli $connection)
    {
        $this->connection = $connection;
    }

    public function addPayment(payment $dto): bool
    {
        $result = $this->connection->query("INSERT INTO Payment values('{$dto->getName()}','{$dto->getCountry()}','{$dto->getBankName()}','{$dto->getCreditCardNo()})");
        return $result > 0;
    }

    public function getAllCity():array {
        $result = $this->connection->query("SELECT classa from ticket");
        return $result->fetch_all();
    }

    public function getAllToCity(): array{
        $result = $this->connection->query("SELECT ToCity from ticket");
        return $result->fetch_all();

    }
    public function getAllFromCity(): array{
        $result = $this->connection->query("SELECT FromCity from ticket");
        return $result->fetch_all();

    }
    public function getAllCity1(): array{
        $result = $this->connection->query("SELECT City  from Register");
        return $result->fetch_all();

    }

    public function getAllCountry(): array{
        $result = $this->connection->query("SELECT Country  from Register");
        return $result->fetch_all();

    }
}