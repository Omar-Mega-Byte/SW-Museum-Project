<?php 

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
        $conn = new mysqli('localhost', 'root', '', 'projectsw');
        if ($conn->connect_error) {
            die('Connection error:' . $conn->connect_error);
        }
        $sql = "INSERT INTO `login` (`username`,`email`, `password`) VALUES ('$username','$email','$password')";
        mysqli_query($conn, $sql);
        require('../Views/Home.html');
        exit();
}
    public function Login($email,$password){
        $conn = new mysqli('localhost', 'root', '', 'projectsw');
        if ($conn->connect_error) {
            die('Connection error: ' . $conn->connect_error);
        }
        $sql = "SELECT * FROM `login` WHERE email ='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        if ($row = mysqli_fetch_assoc($result)) {
            require('../Views/Home.html');
            exit();
        } else {
            require('../Views/Error.html');
            exit();
        }
    }
}
?>
