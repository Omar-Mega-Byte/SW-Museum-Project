<?php
require 'DBController.php';
class Learn {
private $resourcename;
private $category;
private $link;

public function displayResources(){
    $conn= new mysqli('localhost','root','','projectsw');
    $newController = new DBController();
    $newController->openConnection();
    $sql = "SELECT * FROM learn WHERE 1";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Recource Name</th><th>Category</th><th>link</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['resoursename'] . "</td>";
            echo "<td>" . $row['category'] . "</td>";
            echo "<td>" . "<a href=" . $row['link'] . ">" . $row['link'] . "</a>" .  "</td>";
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