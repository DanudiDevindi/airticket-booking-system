<?php


require_once __DIR__.'/../business/impl/PaymentBOImpl.php';
require_once __DIR__.'/../core/payment.php';
$method = $_SERVER['REQUEST_METHOD'];
$paymentBusiness = new PaymentBOImpl();
switch ($method) {
    case "GET":




        $operation = $_GET['operation'];
        switch ($operation) {
            case "getCity";

                echo json_encode($paymentBusiness->GetAllCity());

                break;


                    case "getAllToCity";

                        echo json_encode($paymentBusiness->GetAllToCity());

                        break;

            case "getAllFromCity";

                echo json_encode($paymentBusiness->GetAllFromCity());

                break;


                }

}

