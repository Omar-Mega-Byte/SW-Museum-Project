<?php
require 'DBController.php';
class Event {
private $name;
private $description;
private $id;
private $type;

public function displayEvents(){
    $newController = new DBController();
    $newController->openConnection();
    
    $sql = "SELECT * FROM event WHERE 1";
    $result = $newController->select($sql);

    if (is_array($result) && count($result) > 0) {
        echo "<table>";
        echo "<tr><th>Name</th><th>Description</th><th>Type</th><th>Date</th></tr>";
        foreach ($result as $row) {
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo "<td>" . $row['type'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }else {
        echo "No events found.";
    }

    $newController->closeConnection();
}

}
?>