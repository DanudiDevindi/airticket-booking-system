<?php
/**
 * Created by IntelliJ IDEA.
 * User: acer
 * Date: 25/11/2018
 * Time: 16:28
 */

class Ticket
{

  private $date;
  private $ToCity;
  private $FromCity;
  private $passenger;
  private $classa;

    /**
     * Ticket constructor.
     * @param $date
     * @param $ToCity
     * @param $FromCity
     * @param $passenger
     * @param $classa
     */
    public function __construct($date, $ToCity, $FromCity, $passenger, $classa)
    {
        $this->date = $date;
        $this->ToCity = $ToCity;
        $this->FromCity = $FromCity;
        $this->passenger = $passenger;
        $this->classa = $classa;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
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
    public function getPassenger()
    {
        return $this->passenger;
    }

    /**
     * @param mixed $passenger
     */
    public function setPassenger($passenger): void
    {
        $this->passenger = $passenger;
    }

    /**
     * @return mixed
     */
    public function getClassa()
    {
        return $this->classa;
    }

    /**
     * @param mixed $classa
     */
    public function setClassa($classa): void
    {
        $this->classa = $classa;
    }


}