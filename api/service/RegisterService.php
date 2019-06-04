<?php
/**
 * Created by IntelliJ IDEA.
 * User: acer
 * Date: 25/11/2018
 * Time: 16:51
 */
require_once __DIR__.'/../business/impl/PaymentBOImpl.php';
require_once __DIR__.'/../core/payment.php';

$method = $_SERVER['REQUEST_METHOD'];
$paymentBusiness = new PaymentBOImpl();
switch ($method) {
    case "GET":


        $operation = $_GET['operation'];
        switch ($operation) {
            case "getAllCity1";

                echo json_encode($paymentBusiness->GetAllCity1());

                break;

            case "getAllCountry";

                echo json_encode($paymentBusiness->GetAllCountry());

                break;
        }
}