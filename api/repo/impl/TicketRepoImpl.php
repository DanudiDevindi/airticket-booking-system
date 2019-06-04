<?php
/**
 * Created by IntelliJ IDEA.
 * User: acer
 * Date: 25/11/2018
 * Time: 16:47
 */
require_once __DIR__.'/../TicketRepo.php';
require_once __DIR__.'/../../db/DBConnection.php';
require_once __DIR__.'/../../core/Ticket.php';

class TicketRepoImpl implements TicketRepo
{

    private $connection;

    public function setConnection(mysqli $connection)
    {
        $this->connection = $connection;
    }

    public function addTicket(Ticket $dto): bool
    {
        $result=$this->connection->query("INSERT INTO Ticket values('{$dto->getToCity()}','{$dto->getFromCity()}','{$dto->getDate()}','{$dto->getPassenger()}',{$dto->getClassa()}) ");
            return $result>0;
    }
}