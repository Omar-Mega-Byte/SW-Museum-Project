<?php
require_once '../Models/User.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $newUser = new User();
        $newUser->Login($email,$password);
    } else {
        echo "All fields are required.";
        exit();
    }
} else {
    include('../Views/Error.html');
    exit();
}
?>