<?php
require_once '../Models/User.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $newUser = new User();
        $newUser->ContactMusuem($username,$email,$subject,$message);
    } else {
        echo "All fields are required.";
        exit();
    }
} else {
    include('../Views/Error.html');
    exit();
}
?>
