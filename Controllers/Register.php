<?php
require_once '../Models/User.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['username'], $_POST['password'], $_POST['email'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
    } else {
        echo "All fields are required.";
        exit();
    }
} else {
    include('../Views/Error.html');
    exit();
}
$newUser = new User();
$newUser->Register($username,$email,$password);
?>