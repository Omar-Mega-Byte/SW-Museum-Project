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
        require('../Views/Home.php');
        exit();
}
    public function Login($email,$password){
        $newController = new DBController();
        $newController->openConnection();
        $sql = "SELECT * FROM `login` WHERE email ='$email' AND password='$password'";
        if ($newController->select($sql)) {
            require('../Views/Home.php');
            exit();
        } else {
            require('../Views/Error.html');
            exit();
        }
    }
}
?>
