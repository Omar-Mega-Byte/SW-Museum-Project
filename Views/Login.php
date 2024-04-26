<?php
if(isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost', 'root', '', 'projectsw');

    if ($conn->connect_error) {
        die('Connection error: ' . $conn->connect_error);
    }

    $sql = "SELECT * FROM `login` WHERE email ='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        header("Location: Home.html");
        exit();
    } else {
        header("Location: Error.html");
        exit();
    }
} else {
    header("Location: Error.html");
    exit();
}
?>
