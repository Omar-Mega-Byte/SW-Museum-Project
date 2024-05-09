<?php
require 'DBController.php';
require 'Materials.php';
class Collection implements Materials{
    private $collectionname;
    private $category;
    private $photourl;

    public function Display(){
        $newController = new DBController();
        $newController->openConnection();
        
        $sql = "SELECT * FROM `collection` WHERE 1";
        $result = $newController->select($sql);

        if (is_array($result) && count($result) > 0) {
            echo "<table>";
            echo "<tr><th>Collection Name</th><th>Category</th><th>Description</th><th>Photo</th></tr>";
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['Category'] . "</td>";
                echo "<td>" . $row['description'] . "</td>";
                echo "<td>" . "<img src='../" . $row['photourl'] ."'>" . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No collections found or error executing query.";
        }

        $newController->closeConnection();
    }
}
?>
