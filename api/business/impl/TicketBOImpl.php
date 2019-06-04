<?php
/**
 * Created by IntelliJ IDEA.
 * User: acer
 * Date: 25/11/2018
 * Time: 16:22
 */
require_once __DIR__.'/../TicketBO.php';
require_once __DIR__.'/../../db/DBConnection.php';
require_once __DIR__.'/../../repo/impl/TicketRepoImpl.php';
require_once __DIR__.'/../../core/Ticket.php';

class TicketBOImpl implements TicketBO
{
    private $TicketRepo;

    public function __construct()
    {
        $this->TicketRepo=new TicketRepoImpl();
    }

    public function addTicket(Ticket $dto): bool
    {
        $connection = (new DBConnection())->getConnection();
        $this->TicketRepo->setConnection($connection);
        return $this->TicketRepo->addTicket($dto);

    }
}