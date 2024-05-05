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
    public function getUserInfoByEmail($userEmail){
        $newController = new DBController();
        $newController->openConnection();
        $sql = "SELECT * FROM `login` WHERE email ='$userEmail'";
        $userInfo = $newController->select($sql);
        $newController->closeConnection();
        if ($userInfo !== false) {
            return $userInfo[0];
        } else {
            return false;
        }
    }
    public function BookVisit($name,$email,$visitname,$phone){
        $newController = new DBController();
        $newController->openConnection();
        $sql="INSERT INTO `bookVisit` (`name`,`email`, `visitname` ,`phone`) VALUES ('$name','$email','$visitname','$phone')";
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
    public function BookEvent($name,$email,$eventname,$phone){
        $newController = new DBController();
        $newController->openConnection();
        $sql="INSERT INTO `bookevent` (`name`,`email`,`eventname`,`phone`) VALUES ('$name','$email','$eventname','$phone')";
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
    public function Signout(){
        session_start();
        $email = $_SESSION['email'];
        $newController = new DBController();
        $newController->openConnection();
        $sql="DELETE FROM `login` WHERE email ='$email' ";
        if ($newController->update($sql)) {
            $newController->closeConnection();
            header('Location: ../Views/index.html');
            exit();
        } else {
            header('Location: ../Views/Error.html');
            $newController->closeConnection();
            exit();
        }
    }
    public function UpdateInfo($username,$email,$password){
        session_start();
        $email = $_SESSION['email'];
        $newController = new DBController();
        $newController->openConnection();
        $sql="UPDATE `login` SET `username`='$username',`email`='$email',`password`='$password' WHERE email='$email'";
        if ($newController->update($sql)) {
            $newController->closeConnection();
            header('Location: ../Views/Home.php');
            exit();
        } else {
            header('Location: ../Views/Error.html');
            $newController->closeConnection();
            exit();
        }
    }
}

?>
