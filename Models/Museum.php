<?php

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
        $time = $newController->select($sql);
        if ($time !== false && !empty($time)) {
            echo $time[0]['openTime'];
        } else {
            echo "Error retrieving time";
        }
    }
    public function getStatus(){
        $newController = new DBController();
        $newController->openConnection();
        $sql = "SELECT `currentStatus` FROM `Museum` WHERE name ='Helwan'";
        $status = $newController->select($sql);
        if ($status !== false && !empty($status)) {
            echo $status[0]['currentStatus'];
        } else {
            echo "Error retrieving status";
        }
    }
}
?>