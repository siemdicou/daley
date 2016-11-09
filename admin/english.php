<div id="navigation">
	<ul class="menu">
		<li><a href="<?php echo DIRADMIN;?>">Back</a></li>		
		<li><a href="<?php echo DIR;?>" target="_blank">View Website</a></li>
		<li><a href="<?php echo DIRADMIN;?>?logout">Logout</a></li>
	</ul>
</div>
<div id="content">


<h1>Manage Articels</h1>

<table>
<tr>
	<th><strong>Title</strong></th>
	<th><strong>Action</strong></th>
</tr>

<?php
$sql = $mysqli->query("SELECT * FROM pages ORDER BY pageID");
while($row = mysqli_fetch_object($sql)) 
{
	echo "<tr>";
		echo "<td>$row->pageTitle</td>";
			echo "<td><a href=\"".DIRADMIN."editpage_eng.php?id=$row->pageID\">Edit</a></td>";
	echo "</tr>";
}


?>

</table>

<h1>News Articles</h1>
<a href="newspage_eng.php">
	<button type="submit">Add News Article </button>
</a>
<br>
<br>
<table>
<tr>
	<th><strong>Title</strong></th>
	<th><strong>Date</strong></th>
	<th><strong>Action</strong></th>
</tr>

<?php 


$sql2 = $mysqli->query("SELECT * FROM news_eng ORDER BY date DESC");
while($row = mysqli_fetch_object($sql2)) 
{
	echo "<tr>";
		echo "<td>$row->title</td>";
		echo "<td>$row->date</td>";
			echo "<td><a href=\"".DIRADMIN."editnews_eng.php?id=$row->id\">Edit</a></td>";
	echo "</tr>";
}

?>

</table>

</div>

</div><!-- close wrapper -->

</body>
</html>