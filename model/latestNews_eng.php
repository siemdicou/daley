<?php 
require "../includes/config.php";
	$id  = $_GET['clicked'];
	$sql = $mysqli->query("SELECT * FROM news_eng WHERE id=$id");
	$row = $sql->fetch_assoc();
	// echo $row['title'];
	echo '<h3 class="nieuwstitle">'. $row["title"]. '</h3>
                        <p class="nieuwstekst">'. $row["context"] .'</p>';

 ?>