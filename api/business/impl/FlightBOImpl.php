<?php
/**
 * Created by IntelliJ IDEA.
 * User: acer
 * Date: 25/11/2018
 * Time: 16:23
 */
require_once __DIR__."/../FlightBO.php";
require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../repo/impl/FlightRepoImpl.php";
require_once __DIR__."/../../core/Flight.php";
class FlightBOImpl implements FlightBO
{
   private $FlightRepo;
//
    public function __construct()
    {
        $this->FlightRepo = new FlightRepoImpl();
    }

    public function addFlight(Flight $dto): bool
    {
        $connection = (new DBConnection())->getConnection();
        $this->FlightRepo->setConnection($connection);
        return $this->FlightRepo->addFlight($dto);
    }

    public function deleteFlight($FlightNo): bool
    {
        $connection = (new DBConnection())->getConnection();
       $this->FlightRepo->setConnection($connection);
        return $this->FlightRepo->deleteFlight($FlightNo);
    }

    public function updateFlight(Flight $dto): bool
    {
        $connection = (new DBConnection())->getConnection();
     $this->FlightRepo->setConnection($connection);
      return $this->FlightRepo->updateFlight($dto);
    }

    public function searchFlight($toCity, $fromCity):array {
        $connection = (new DBConnection())->getConnection();
        $this->FlightRepo->setConnection($connection);
        return $this->FlightRepo->searchFlight($toCity, $fromCity);
    }
}