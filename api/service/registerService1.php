<?php
/**
 * Created by IntelliJ IDEA.
 * User: acer
 * Date: 29/11/2018
 * Time: 08:00
 */
require_once __DIR__.'/../business/impl/RegisterBOImpl.php';
require_once __DIR__.'/../core/Register.php';


$method = $_SERVER['REQUEST_METHOD'];
$registertBusiness = new RegisterBOImpl();
switch ($method) {
    case "GET":
        $name = $_GET['name'];
        $password =$_GET['password'];
        $Tp = $_GET['Tp'];
        $email=$_GET['email'];
        $DOB=$_GET['DOB'];
        $Address=$_GET['Address'];
        $City=$_GET['City'];
        $Country=$_GET['Country'];

        $operation = $_GET['operation'];
        switch ($operation) {
            case "add";
                $RegisterTempObject = new Register($name,$password,$Tp,$email,$DOB,$Address,$City,$Country);
                echo $registertBusiness->addRegister($RegisterTempObject);
                break;

        }
}