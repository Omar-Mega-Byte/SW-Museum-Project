<?php
require 'DBController.php';

class Museum {
    private $name;
    private $location;
    private $postalCode;
    private $openTime;
    private $currentStatus;
    public function __construct(){
    }
    public function getTime(){
        $newController = new DBController();
        $newController->openConnection();
        $sql = "SELECT `openTime` FROM `Museum` WHERE name ='Helwan'";
        echo $newController->select($sql);
    }
    public function getStatus(){
        $newController = new DBController();
        $newController->openConnection();
        $sql = "SELECT `currentStatus` FROM `Museum` WHERE name ='Helwan'";
        echo $newController->select($sql);
    }
}
?>