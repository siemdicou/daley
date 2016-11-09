<?php 
// require "includes/config.php";
	$sql = $mysqli->query("SELECT * FROM news_eng ORDER BY id DESC");

	$row2 = mysqli_fetch_assoc($sql);
	// echo $row['title'];
	

 ?>