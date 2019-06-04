<?php
/**
 * Created by IntelliJ IDEA.
 * User: acer
 * Date: 26/11/2018
 * Time: 12:10
 */

class payment
{
    private $creditCardNo;
    private $name;
    private $Country;
    private $BankName;

    /**
     * payment constructor.
     * @param $creditCardNo
     * @param $name
     * @param $Country
     * @param $BankName
     */
    public function __construct($creditCardNo, $name, $Country, $BankName)
    {
        $this->creditCardNo = $creditCardNo;
        $this->name = $name;
        $this->Country = $Country;
        $this->BankName = $BankName;
    }

    /**
     * @return mixed
     */
    public function getCreditCardNo()
    {
        return $this->creditCardNo;
    }

    /**
     * @param mixed $creditCardNo
     */
    public function setCreditCardNo($creditCardNo): void
    {
        $this->creditCardNo = $creditCardNo;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * @param mixed $Country
     */
    public function setCountry($Country): void
    {
        $this->Country = $Country;
    }

    /**
     * @return mixed
     */
    public function getBankName()
    {
        return $this->BankName;
    }

    /**
     * @param mixed $BankName
     */
    public function setBankName($BankName): void
    {
        $this->BankName = $BankName;
    }



}