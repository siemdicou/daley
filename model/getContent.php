<?php 
	$sql = $mysqli->query("SELECT * FROM pages");
	$result_ned = array();
	while ($row_ned = mysqli_fetch_array($sql))
	{
		$result_ned[]=$row_ned ;
	}

	$sql = $mysqli->query("SELECT * FROM pages_eng");
	$result = array();
	while ($row_eng = mysqli_fetch_array($sql))
	{
		$result_eng[]=$row_eng ;
	}
?>