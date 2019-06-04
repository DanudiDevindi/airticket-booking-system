<?php
/**
 * Created by IntelliJ IDEA.
 * User: acer
 * Date: 29/11/2018
 * Time: 11:01
 */
require_once __DIR__.'/../business/impl/TicketBOImpl.php';
require_once __DIR__.'/../core/Ticket.php';

$method = $_SERVER['REQUEST_METHOD'];
$ticketBusiness = new TicketBOImpl();
switch ($method) {
    case "GET":
        $ToCity = $_GET['ToCity'];
        $FromCity = $_GET['FromCity'];
        $date = $_GET['date'];
        $passenger = $_GET['passenger'];
        $Classa = $_GET['Classa'];
        $operation = $_GET['operation'];
        switch ($operation) {
            case "add";
                $TicketTempObject = new Ticket($ToCity,$FromCity,$date,$passenger,$Classa);
                echo $ticketBusiness->addTicket($TicketTempObject);
                break;
        }
}
