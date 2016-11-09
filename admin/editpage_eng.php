<?php 

require('../includes/config.php'); 

if(!isset($_GET['id']) || $_GET['id'] == ''){ //if no id is passed to this page take user back to previous page
	header('Location: '.DIRADMIN); 
}

if(isset($_POST['submit'])){

	$title = $_POST['pageTitle'];
	$content = $_POST['pageCont'];
	$pageID = $_POST['pageID'];
	// $newImage = $_POST['image'];


	$target_dir = "../img/uploads/";
$date = date("YmdHis");
$target_file = $target_dir . $date .'_'.basename($_FILES["fileToUpload"]["name"]);

$profilepicture = $_FILES["fileToUpload"]["name"];

$newfilename = $date."_".$profilepicture;



$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    echo $_FILES["fileToUpload"]["tmp_name"];
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

        // $sql = "INSERT INTO users (profilepicture) VALUES ('$profilepicture')";
        // $mysqli->query($sql);
    $title = $mysqli->real_escape_string($title);
	$content = $mysqli->real_escape_string($content);
	
	$mysqli->query("UPDATE pages_eng SET pageTitle='$title', pageCont='$content', image='$newfilename'WHERE pageID='$pageID'");
	$_SESSION['success'] = 'Page Updated';
	header('Location: '.DIRADMIN.'?lang=english');
	exit();

	}
    }  
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
<li><a href="<?php echo DIRADMIN;?>?lang=english">Back</a></li>
<li><a href="<?php echo DIRADMIN;?>?logout">Logout</a></li>
<li><a href="<?php echo DIR;?>" target="_blank">View Website</a></li>
</ul>
</div>
<!-- END NAV -->

<div id="content">

<h1>Edit Page</h1>

<?php
$id = $_GET['id'];
$id = $mysqli->real_escape_string($id);
$q = $mysqli->query("SELECT * FROM pages_eng WHERE pageID='$id'");
$row = mysqli_fetch_object($q);
?>


<form action="" method="post" enctype='multipart/form-data'	>
<input type="hidden" name="pageID" value="<?php echo $row->pageID;?>" />
<p>Title:<br /> <input name="pageTitle" type="text" value="<?php echo $row->pageTitle;?>" size="103" />
</p>
<p>Content<br /><textarea name="pageCont" cols="100" rows="20"><?php echo $row->pageCont;?></textarea>
</p>
<p>Current image:</p>
<image src='../img/uploads/<?php echo $row->image;?>' width="40px" height="40px"><br><br>
<input type='file' name='fileToUpload' id='fileToUpload' >
<p><input type="submit" name="submit" value="Submit" class="button" /></p>
</form>

</div>

<div id="footer">	
		<div class="copy">&copy; <?php echo SITETITLE.' '. date('Y');?> </div>
</div><!-- close footer -->
</div><!-- close wrapper -->

</body>
</html>