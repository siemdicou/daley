<?php

require "../includes/config.php";
// require "../includes/connectie.php";

$title = $_POST['title'];
$content = $_POST['content'];

echo $title;
echo $content;

// $sql = "INSERT INTO news (title,context)
// VALUES ('$title','$content')";

// $mysqli->query($sql);


// $news = "SELECT title,context,date FROM news";
// $result = $mysqli->query($news);

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "<h1>id: " . $row["title"] . "</h1><br>". " - Name: " . $row["context"]. " " . $row["date"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }

?>