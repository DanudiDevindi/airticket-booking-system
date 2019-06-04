<?php
/**
 * Created by IntelliJ IDEA.
 * User: acer
 * Date: 26/11/2018
 * Time: 12:16
 */
require_once __DIR__.'/../core/payment.php';


interface PaymentBO
{
    public function addPayment(payment $dto):bool;
    public function GetAllCity():array ;
    public function GetAllToCity():array ;
    public function GetAllFromCity():array ;
    public function GetAllCity1():array ;
    public function GetAllCountry():array ;

}