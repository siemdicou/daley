<?php

require "../includes/config.php";

$news = "SELECT * FROM news ORDER BY date DESC";
$result = $mysqli->query($news);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo ' 
        	<div class="oudbericht1" onclick="updateNews('.$row["id"].')">
                <h3 class="berichttitle">'.$row["title"].'</h3>'.$row["date"].'
            </div>';
        // <h1>id: " .  . "</h1><br>". " - Name: " . $row["context"]. " " . . "<br>";

    }
} 

?>
