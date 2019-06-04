<?php
/**
 * Created by IntelliJ IDEA.
 * User: acer
 * Date: 25/11/2018
 * Time: 16:33
 */
require_once __DIR__."/../core/Flight.php";
interface FlightRepo
{
    public function setConnection(mysqli $connection);
    public function addFlight(Flight $dto):bool ;
    public function deleteFlight($FlightNo):bool ;
    public function updateFlight(Flight $dto):bool ;
    public function searchFlight($toCity, $fromCity):array ;

}