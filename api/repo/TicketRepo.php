<?php
/**
 * Created by IntelliJ IDEA.
 * User: acer
 * Date: 25/11/2018
 * Time: 16:32
 */
require_once __DIR__.'/../core/Ticket.php';
interface TicketRepo
{
    public function setConnection(mysqli $connection);
    public function addTicket(Ticket $dto):bool ;

}