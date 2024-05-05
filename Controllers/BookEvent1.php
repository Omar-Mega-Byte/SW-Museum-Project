<?php
require '../Models/User.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['eventname']) && isset($_POST['phone'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $eventname = $_POST['eventname'];
        $phone = $_POST['phone'];
        $newUser = new User();
        $newUser->BookEvent($name,$email,$eventname,$phone);
    } else {
        echo "All fields are required.";
        exit();
    }
} else {
    include('../Views/Error.html');
exit();
}
?>