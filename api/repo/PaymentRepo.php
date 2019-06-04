<?php
/**
 * Created by IntelliJ IDEA.
 * User: acer
 * Date: 26/11/2018
 * Time: 12:13
 */
require_once __DIR__.'/../core/payment.php';

interface PaymentRepo
{
    public function setConnection(mysqli $connection);
    public function addPayment(payment $dto):bool ;
    public function getAllCity():array ;
    public function getAllToCity():array ;
    public function getAllFromCity():array ;
    public function getAllCity1():array ;
    public function getAllCountry():array ;


}