<!DOCTYPE html>
<html>
<head>
	<title>modularitas</title>
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<a href="index.php">home</a>	|
<a href="about.php">about</a>	|
<a href="link.php">link</a>	|
<a href="contact.php">contact</a>	|
<a href="new.php">NEW MENU</a>	|

<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "salsa_nasution/home.php";
				break;
			case 'about':
				include "salsa_nasution/about.php";
				break;
			case 'link':
				include "salsa_nasution/link.php";
				break;	
			case 'contact':
				include "salsa_nasution/contact.php";
				break;
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "salsa_nasution/index.php";
	}
 
	 ?>
</body>
</html>