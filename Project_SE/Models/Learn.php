<?php
require 'DBController.php';
require 'Materials.php';
class Learn implements Materials{
    private $resourcename;
    private $category;
    private $link;

    public function Display(){
        $newController = new DBController();
        $newController->openConnection();
        
        $sql = "SELECT * FROM learn WHERE 1";
        $result = $newController->select($sql);

        if (is_array($result) && count($result) > 0) {
            echo "<table>";
            echo "<tr><th>Resource Name</th><th>Category</th><th>Link</th></tr>";
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row['resoursename'] . "</td>";
                echo "<td>" . $row['category'] . "</td>";
                echo "<td>" . "<a href='" . $row['link'] . "'>" . $row['link'] . "</a>" .  "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }else {
            echo "No resources found or error executing query.";
        }

        $newController->closeConnection();
    }
}
?>
