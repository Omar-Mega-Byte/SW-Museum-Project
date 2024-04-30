<?php 
require 'DBController.php';
class User {
    private $username;
    private $email;
    private $id;
    private $password;
    public function __construct() {
    }
    public function getUserName() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }
    public function setUserName($username) {
        $this->username = $username;
    }
    public function setPassword($password) {
        $this->password = $password;
    }
    public function Register($username,$email,$password){
        $newController = new DBController();
        $newController->openConnection();
        $sql = "INSERT INTO `login` (`username`,`email`, `password`) VALUES ('$username','$email','$password')";
        $newController->insert($sql);
        header('Location: ../Views/Home.php');
        $newController->closeConnection();
        exit();
}
    public function Login($email,$password){
        $newController = new DBController();
        $newController->openConnection();
        $sql = "SELECT * FROM `login` WHERE email ='$email' AND password='$password'";
        if ($newController->select($sql)) {
            header ('Location: ../Views/Home.php');
            $newController->closeConnection();
            exit();
        } else {
            header('Location: ../Views/Error.html');
            $newController->closeConnection();
            exit();
        }
    }
    public function ContactMusuem($username,$email,$subject,$message){
        $newController = new DBController();
        $newController->openConnection();
        $sql="INSERT INTO `contactus` (`username`,`email`, `subject` ,`message`) VALUES ('$username','$email','$subject','$message')";
        if ($newController->insert($sql)) {
            header('Location: ../Views/Success.html');
            $newController->closeConnection();
            exit();
        } else {
            header('Location: ../Views/Error.html');
            $newController->closeConnection();
            exit();
        }
    }
}
?>
