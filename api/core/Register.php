<?php
/**
 * Created by IntelliJ IDEA.
 * User: acer
 * Date: 25/11/2018
 * Time: 16:29
 */

class Register
{
private $password;
private $name;
private $Country;
private $City;
private $Address;
private $DOB;
private $email;
private $Tp;

    /**
     * Register constructor.
     * @param $password
     * @param $name
     * @param $Country
     * @param $City
     * @param $Address
     * @param $DOB
     * @param $email
     * @param $Tp
     */
    public function __construct($password, $name, $Country, $City, $Address, $DOB, $email, $Tp)
    {
        $this->password = $password;
        $this->name = $name;
        $this->Country = $Country;
        $this->City = $City;
        $this->Address = $Address;
        $this->DOB = $DOB;
        $this->email = $email;
        $this->Tp = $Tp;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
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
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param mixed $City
     */
    public function setCity($City): void
    {
        $this->City = $City;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param mixed $Address
     */
    public function setAddress($Address): void
    {
        $this->Address = $Address;
    }

    /**
     * @return mixed
     */
    public function getDOB()
    {
        return $this->DOB;
    }

    /**
     * @param mixed $DOB
     */
    public function setDOB($DOB): void
    {
        $this->DOB = $DOB;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getTp()
    {
        return $this->Tp;
    }

    /**
     * @param mixed $Tp
     */
    public function setTp($Tp): void
    {
        $this->Tp = $Tp;
    }


}