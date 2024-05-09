<?php
require '../Models/User.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['payment-type']) && isset($_POST['email']) && isset($_POST['id'])) {
        $payment = $_POST['payment-type'];
        $email = $_POST['email'];
        $id = $_POST['id'];
        $newUser = new Visitor();
        $newUser->Pay($payment,$email,$id);
    } else {
        echo "All fields are required.";
        exit();
    }
} else {
    include('../Views/Error.html');
    exit();
}
?>
