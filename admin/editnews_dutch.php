<?php 
require('../includes/config.php'); 

	if(isset($_POST['submit'])){

	$title = $_POST['pageTitle'];
	$content = $_POST['pageCont'];
	$pageID = $_POST['pageID'];

	
	$title = $mysqli->real_escape_string($title);
	$content = $mysqli->real_escape_string($content);
	
	$mysqli->query("UPDATE news SET pageTitle='$title', pageCont='$content' WHERE pageID='$pageID'");
	$_SESSION['success'] = 'Page Updated';
	header('Location: '.DIRADMIN);
	exit();

}

 ?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo SITETITLE;?></title>
<link rel="icon" type="image/png" href="../img/logoblank.png">
<link rel="shortcut icon" type="image/png" href="../img/logoblank.png">
<link href="<?php echo DIR;?>style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">


<!-- NAV -->
<div id="navigation">
<ul class="menu">
<li><a href="<?php echo DIRADMIN;?>?lang=dutch">Terug</a></li>
<li><a href="<?php echo DIRADMIN;?>?logout">Uitloggen</a></li>
<li><a href="<?php echo DIR;?>" target="_blank">Bekijk Website</a></li>
</ul>
</div>
<!-- END NAV -->

<div id="content">

<h1>Edit Page</h1>

<?php
$id = $_GET['id'];
$id = $mysqli->real_escape_string($id);
$q = $mysqli->query("SELECT * FROM news WHERE id='$id'");
$row = mysqli_fetch_object($q);
?>


<form action="" method="post">
<input type="hidden" name="pageID" value="<?php echo $row->pageID;?>" />
<p>Title:<br /> <input name="pageTitle" type="text" value="<?php echo $row->title;?>" size="103" />
</p>
<p>content<br /><textarea name="pageCont" cols="100" rows="20"><?php echo $row->context;?></textarea>
</p>
<p><input type="submit" name="submit" value="Submit" class="button" /></p>
</form>

</div>

<div id="footer">	
		<div class="copy">&copy; <?php echo SITETITLE.' '. date('Y');?> </div>
</div><!-- close footer -->
</div><!-- close wrapper -->

</body>
</html>