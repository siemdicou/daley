<div id="navigation">
	<ul class="menu">
		<li><a href="<?php echo DIRADMIN;?>">Terug</a></li>		
		<li><a href="<?php echo DIR;?>" target="_blank">Bekijk Website</a></li>
		<li><a href="<?php echo DIRADMIN;?>?logout">Uitloggen</a></li>
	</ul>
</div>
<div id="content">


<h1>Beheer artikelen</h1>

<table>
<tr>
	<th><strong>Titel</strong></th>
	<th><strong>Actie</strong></th>
</tr>

<?php
$sql = $mysqli->query("SELECT * FROM pages ORDER BY pageID");
while($row = mysqli_fetch_object($sql)) 
{
	echo "<tr>";
		echo "<td>$row->pageTitle</td>";
	
			echo "<td><a href=\"".DIRADMIN."editpage_ned.php?id=$row->pageID\">Aanpassen</a> </td>";
		
		
	echo "</tr>";
}
?>
</table>

<h1>Nieuws Artikelen</h1>
<a href="newspage_dutch.php">
	<button type="submit">Nieuwsartikel Toevoegen </button>
</a>
<br>
<br>
<table>
<tr>
	<th><strong>Title</strong></th>
	<th><strong>Datum</strong></th>
	<th><strong>Actie</strong></th>
</tr>

<?php 


$sql2 = $mysqli->query("SELECT * FROM news ORDER BY date DESC");
while($row = mysqli_fetch_object($sql2)) 
{
	echo "<tr>";
		echo "<td>$row->title</td>";
		echo "<td>$row->date</td>";
			echo "<td><a href=\"".DIRADMIN."editnews_dutch.php?id=$row->id\">Aanpassen</a></td>";
	echo "</tr>";
}

?>

</table>

</div>

</div><!-- close wrapper -->

</body>
</html>