<?php
require 'DBController.php';
class Collection {
private $collectionname;
private $category;
private $photourl;

public function displayCollection(){
    $conn= new mysqli('localhost','root','','projectsw');
    $newController = new DBController();
    $newController->openConnection();
    $sql = "SELECT * FROM collection WHERE 1";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Collection Name</th><th>Category</th><th>Photo</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['Category'] . "</td>";
            echo "<td>" . "<img src=" . $row['photourl'] ." .>". "</img>" .  "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No events found.";
    }
    $newController->closeConnection();
}
}
?>