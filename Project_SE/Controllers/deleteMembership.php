<?php
require '../Models/User.php';
$newUser = new User();
$newUser->deleteMembership();
?>