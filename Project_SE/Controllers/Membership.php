<?php
require '../Models/User.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['id']) && isset($_POST['package'])) {
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $package = $_POST['package'];
        $email = $_POST['email'];
        $id = $_POST['id'];
        $newUser = new Visitor();
        $newUser->ManageMembership($name, $mobile, $package,$id,$email);
    } else {
        echo "All fields are required.";
        exit();
    }
} else {
    include('../Views/Error.html');
    exit();
}
?>