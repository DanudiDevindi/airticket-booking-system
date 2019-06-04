<?php
/**
 * Created by IntelliJ IDEA.
 * User: acer
 * Date: 26/11/2018
 * Time: 12:14
 */
require_once __DIR__.'/../business/impl/PaymentBOImpl.php';
require_once __DIR__.'/../core/payment.php';
$method = $_SERVER['REQUEST_METHOD'];
$paymentBusiness = new PaymentBOImpl();
switch ($method){
    case "GET":
        $name =$_GET['Name'];
        $Country=$_GET['Country'];
        $BankName=$_GET['BankName'];
        $CreditCardNo=$_GET['CreditCardNo'];



        $operation=$_GET['operation'];
      switch ($operation){
            case "add";

                $PaymentTempObject=new Payment($name,$Country,$BankName,$CreditCardNo);
                echo $paymentBusiness->addPayment($PaymentTempObject);

                break;


        }


}

