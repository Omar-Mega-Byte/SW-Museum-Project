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
        $conn = new mysqli('localhost', 'root', '', 'projectsw');
        if ($conn->connect_error) {
            die('Connection error: ' . $conn->connect_error);
        }
        $sql = "SELECT `openTime` FROM `Museum` WHERE name ='Helwan'";
        $result = mysqli_query($conn, $sql);
        $row = $result->fetch_assoc();
        echo $row['openTime'];
    }
    public function getStatus(){
        $conn = new mysqli('localhost', 'root', '', 'projectsw');
        if ($conn->connect_error) {
            die('Connection error: ' . $conn->connect_error);
        }
        $sql = "SELECT `currentStatus` FROM `Museum` WHERE name ='Helwan'";
        $result = mysqli_query($conn, $sql);
        $row = $result->fetch_assoc();
        echo $row['currentStatus'];
    }
}
?>