<?php 
// require "includes/config.php";
	$sql = $mysqli->query("SELECT * FROM news ORDER BY id DESC");

	$row1 = mysqli_fetch_assoc($sql);
	// echo $row['title'];
	

 ?>