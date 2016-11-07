<?php
 require('../includes/config.php'); 
// if(logged_in()) {header('Location: '.DIRADMIN);}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo SITETITLE;?></title>
<link rel="stylesheet" href="<?php echo DIR;?>style/login.css" type="text/css">
</head>
<body>
<form action="login_model.php" method="POST">
	<input type="username" name="username">
	<input type="password" name="password">
	<input type="submit">
</form>
		
		</div>	
		<div class="clear"></div>		
	</div>
<div class="footer">&copy; <?php echo SITETITLE.' '. date('Y');?> </div>	
</div>
</body>
</html>