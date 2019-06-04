<?php
/**
 * Created by IntelliJ IDEA.
 * User: acer
 * Date: 25/11/2018
 * Time: 16:36
 */
require_once __DIR__.'/../core/Register.php';

interface RegisterRepo
{
    public function setConnection(mysqli $connection);
    public function addRegister(Register $dto):bool ;

}