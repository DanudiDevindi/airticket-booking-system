<?php
/**
 * Created by IntelliJ IDEA.
 * User: acer
 * Date: 26/11/2018
 * Time: 12:15
 */
require_once __DIR__.'/../PaymentBO.php';
require_once __DIR__.'/../../db/DBConnection.php';
require_once __DIR__.'/../../repo/impl/PaymentRepoImpl.php';
require_once __DIR__.'/../../core/payment.php';

class PaymentBOImpl implements PaymentBO
{
    private $PaymentRepo;

    public function __construct()
    {
        $this->PaymentRepo=new PaymentRepoImpl();
    }

    public function addPayment(payment $dto): bool
    {
        $connection = (new DBConnection())->getConnection();
        $this->PaymentRepo->setConnection($connection);
        return $this->PaymentRepo->addPayment($dto);
    }
    public function GetAllCity():array {
        $connection = (new DBConnection())->getConnection();
        $this->PaymentRepo->setConnection($connection);
        return $this->PaymentRepo->getAllCity();
    }

    public function GetAllToCity(): array{
        $connection = (new DBConnection())->getConnection();
        $this->PaymentRepo->setConnection($connection);
        return $this->PaymentRepo->getAllToCity();

    }
    public function GetAllFromCity(): array{
        $connection = (new DBConnection())->getConnection();
        $this->PaymentRepo->setConnection($connection);
        return $this->PaymentRepo->getAllFromCity();

    }

    public function GetAllCity1(): array
    {
        $connection = (new DBConnection())->getConnection();
        $this->PaymentRepo->setConnection($connection);
        return $this->PaymentRepo->getAllCity1();
    }

    public function GetAllCountry(): array
    {
        $connection = (new DBConnection())->getConnection();
        $this->PaymentRepo->setConnection($connection);
        return $this->PaymentRepo->getAllCountry();
    }
}