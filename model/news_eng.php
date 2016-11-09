<?php

require "../includes/config.php";
// require "../includes/functions.php";

$title = $_POST['title'];
$content = $_POST['content'];
$date = date('d-m-Y');

echo $title;
echo $content;

$sql = "INSERT INTO news_eng (title,context,date)
VALUES ('$title','$content', '$date')";

$mysqli->query($sql);
header('Location:'.DIRADMIN.'?lang=english');

?>