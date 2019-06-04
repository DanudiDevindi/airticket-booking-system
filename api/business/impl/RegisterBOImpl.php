<?php
/**
 * Created by IntelliJ IDEA.
 * User: acer
 * Date: 25/11/2018
 * Time: 16:23
 */
require_once __DIR__.'/../RegisterBO.php';
require_once __DIR__.'/../../db/DBConnection.php';
//require_once __DIR__.'/../../repo/impl/PaymentRepoImpl.php';
require_once __DIR__.'/../../core/Register.php';
require_once __DIR__.'/../../repo/impl/RegisterRepoImpl.php';

class RegisterBOImpl implements RegisterBO
{
    private $RegisterRepo;
    public function __construct()
    {
        $this->RegisterRepo=new RegisterRepoImpl();
    }

    public function addRegister(Register $dto): bool
    {
        $connection = (new DBConnection())->getConnection();
        $this->RegisterRepo->setConnection($connection);
        return $this->RegisterRepo->addRegister($dto);
    }
}