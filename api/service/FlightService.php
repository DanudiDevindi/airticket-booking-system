<?php
/**
 * Created by IntelliJ IDEA.
 * User: acer
 * Date: 25/11/2018
 * Time: 16:51
 */

require_once __DIR__.'/../business/impl/FlightBOImpl.php';
require_once __DIR__.'/../core/Flight.php';

$method = $_SERVER['REQUEST_METHOD'];
$flightBusiness = new FlightBOImpl();
switch ($method){
    case "GET":

        $operation=$_GET['operation'];
        switch ($operation){
            case "add";
                $FlightNo =$_GET['FlightNo'];
                $ToCity=$_GET['ToCity'];
                $FromCity=$_GET['FromCity'];
                $FlightName=$_GET['FlightName'];
                $Arrival=$_GET['Arrival'];
                $Departure=$_GET['Departure'];
                $price=$_GET['price'];
            $FlightTempObject=new Flight($FlightNo,$ToCity,$FromCity,$FlightName,$Arrival,$Departure,$price);
            echo $flightBusiness->addFlight($FlightTempObject);
            break;

            case "delete";
                $FlightNo =$_GET['FlightNo'];
                $ToCity=$_GET['ToCity'];
                $FromCity=$_GET['FromCity'];
                $FlightName=$_GET['FlightName'];
                $Arrival=$_GET['Arrival'];
                $Departure=$_GET['Departure'];
                $price=$_GET['price'];
            echo $flightBusiness->deleteFlight($FlightNo);
            break;
            case "update";
                $FlightNo =$_GET['FlightNo'];
                $ToCity=$_GET['ToCity'];
                $FromCity=$_GET['FromCity'];
                $FlightName=$_GET['FlightName'];
                $Arrival=$_GET['Arrival'];
                $Departure=$_GET['Departure'];
                $price=$_GET['price'];
            $FlightTempObject=new Flight($FlightNo,$ToCity,$FlightNo,$FlightName,$Arrival,$Departure,$price);
            echo $flightBusiness->updateFlight($FlightTempObject);
            break;
            case "searchFlights":
                $toCity=$_GET['ToCity'];
                $fromCity=$_GET['FromCity'];
                $result=$flightBusiness->searchFlight($toCity,$fromCity);
                echo json_encode($result);
                break;

        }

}

