<?php
/**
 * Created by IntelliJ IDEA.
 * User: acer
 * Date: 25/11/2018
 * Time: 16:28
 */

class Flight
{
    private $flightNo;
    private $ToCity;
    private $FromCity;
    private $flightName;
    private $Arrival;
    private $Departure;
    private $price;

    /**
     * Flight constructor.
     * @param $flightNo
     * @param $ToCity
     * @param $FromCity
     * @param $flightName
     * @param $Arrival
     * @param $Departure
     * @param $price
     */
    public function __construct($flightNo, $ToCity, $FromCity, $flightName, $Arrival, $Departure, $price)
    {
        $this->flightNo = $flightNo;
        $this->ToCity = $ToCity;
        $this->FromCity = $FromCity;
        $this->flightName = $flightName;
        $this->Arrival = $Arrival;
        $this->Departure = $Departure;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getFlightNo()
    {
        return $this->flightNo;
    }

    /**
     * @param mixed $flightNo
     */
    public function setFlightNo($flightNo): void
    {
        $this->flightNo = $flightNo;
    }

    /**
     * @return mixed
     */
    public function getToCity()
    {
        return $this->ToCity;
    }

    /**
     * @param mixed $ToCity
     */
    public function setToCity($ToCity): void
    {
        $this->ToCity = $ToCity;
    }

    /**
     * @return mixed
     */
    public function getFromCity()
    {
        return $this->FromCity;
    }

    /**
     * @param mixed $FromCity
     */
    public function setFromCity($FromCity): void
    {
        $this->FromCity = $FromCity;
    }

    /**
     * @return mixed
     */
    public function getFlightName()
    {
        return $this->flightName;
    }

    /**
     * @param mixed $flightName
     */
    public function setFlightName($flightName): void
    {
        $this->flightName = $flightName;
    }

    /**
     * @return mixed
     */
    public function getArrival()
    {
        return $this->Arrival;
    }

    /**
     * @param mixed $Arrival
     */
    public function setArrival($Arrival): void
    {
        $this->Arrival = $Arrival;
    }

    /**
     * @return mixed
     */
    public function getDeparture()
    {
        return $this->Departure;
    }

    /**
     * @param mixed $Departure
     */
    public function setDeparture($Departure): void
    {
        $this->Departure = $Departure;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }



}