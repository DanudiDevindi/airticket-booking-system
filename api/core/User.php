<?php
/**
 * Created by IntelliJ IDEA.
 * User: acer
 * Date: 25/11/2018
 * Time: 16:29
 */

class User
{
private $password;
private $name;
private $email;

    /**
     * User constructor.
     * @param $password
     * @param $name
     * @param $email
     */
    public function __construct($password, $name, $email)
    {
        $this->password = $password;
        $this->name = $name;
        $this->email = $email;
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


}