<?php
require 'DBController.php';
class Museum {
    private $name;
    private $location;
    private $postalCode;
    private $openTime;
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
}
?>