<?php
require 'DBController.php';
class Event {
private $name;
private $description;
private $id;
private $type;

public function displayEvents(){
    $conn= new mysqli('localhost','root','','projectsw');
    $newController = new DBController();
    $newController->openConnection();
    $sql = "SELECT * FROM event WHERE 1";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Name</th><th>Description</th><th>type</th><th>date</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo "<td>" . $row['type'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
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