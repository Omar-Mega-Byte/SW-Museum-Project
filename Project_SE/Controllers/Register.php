<?php
session_start();
require '../Models/User.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['username'], $_POST['password'], $_POST['email'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $_SESSION['email'] = $email;
        $newUser = new Visitor();
        $newUser->Register($username,$email,$password);
    } else {
        echo "All fields are required.";
        exit();
    }
} else {
    include('../Views/Error.html');
    exit();
}
?>