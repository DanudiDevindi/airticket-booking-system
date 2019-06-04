<?php
/**
 * Created by IntelliJ IDEA.
 * User: acer
 * Date: 25/11/2018
 * Time: 16:45
 */
require_once __DIR__.'/../FlightRepo.php';
require_once __DIR__.'/../../db/DBConnection.php';
require_once __DIR__.'/../../core/Flight.php';

class FlightRepoImpl implements FlightRepo
{
    private $connection;

    public function setConnection(mysqli $connection)
    {
        $this->connection=$connection;
    }

    public function addFlight(Flight $dto): bool
    {
        $result = $this->connection->query("INSERT INTO Flight values('{$dto->getFlightNo()}','{$dto->getToCity()}','{$dto->getFromCity()}','{$dto->getFlightName()}','{$dto->getArrival()}','{$dto->getDeparture()}',{$dto->getPrice()})" );
        return $result>0;
    }

    public function deleteFlight($FlightNo): bool
    {
        $result= $this->connection->query("Delete from Flight where id='$FlightNo'");
        return $result>0;
    }

    public function updateFlight(Flight $dto): bool
    {
        $result = $this->connection->query("UPDATE Flight set ToCity='{$dto->getToCity()}',FromCity='{$dto->getToCity()}',FlightName='{$dto->getFlightName()}',Arrival='{$dto->getArrival()}',Departure='{$dto->getDeparture()}',price={$dto->getPrice()} where id='{$dto->getFlightNo()}'");
       return $result>0;
    }
    public function searchFlight($toCity, $fromCity):array {
        $result= $this->connection->query("select * from flight where ToCity='{$toCity}' and FromCity='{$fromCity}';");
        return $result->fetch_all();
    }
}