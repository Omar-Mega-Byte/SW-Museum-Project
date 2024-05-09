<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="icon" href="Data/OIG.jpg">
<title>Searched Flights</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Fjalla+One&family=Sedgwick+Ave+Display&family=Yanone+Kaffeesatz:wght@200;300;400;500;600;700&display=swap');
body {
    font-family: 'Fjalla One', sans-serif;
    font-size: 18px;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 12px; 
    text-align: left;
    border-bottom: 1px solid #ddd;
    color: #333; 
}

th {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #f9f9f9; 
}

img {
    max-width: 100%;
    height: auto;
    margin: auto;
    border-radius: 8px;
    width: 200px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease; 
}

img:hover {
    transform: scale(1.05); /* Enlarge image on hover for a dynamic effect */
}

</style>
</head>
<body>
<?php 
require '../Models/User.php';
$search = $_GET['search'];
$newUser = new Visitor();
$newUser->searchCollection($search);
?>
</body>
</html>