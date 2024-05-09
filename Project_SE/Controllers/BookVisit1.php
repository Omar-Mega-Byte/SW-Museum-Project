<?php
require '../Models/User.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['visitname']) && isset($_POST['phone'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $visitname = $_POST['visitname'];
        $phone = $_POST['phone'];
        $newUser = new Visitor();
        $newUser->BookVisit($name,$email,$visitname,$phone);
    } else {
        echo "All fields are required.";
        exit();
    }
} else {
    include('../Views/Error.html');
    exit();
}
?>