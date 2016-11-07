<?php

require "../includes/config.php";
// require "../includes/functions.php";

$title = $_POST['title'];
$content = $_POST['content'];

echo $title;
echo $content;

$sql = "INSERT INTO news (title,context)
VALUES ('$title','$content')";

$mysqli->query($sql);

?>