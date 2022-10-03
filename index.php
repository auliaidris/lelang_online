<!DOCTYPE html>
<html>
<head>
	<title>Lelang</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>

<div class="content">
	<header>
		<h1 class="jdl">Lelang Online</h1>
	<div class="search">
		<input type="text" placeholder="Search">
	</div>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="daftar1.php?page=signin">sign up</a></li>
			<li><a href="login.php?page=login">Log in</a></li>
			<li><a href="index.php?page=home">HOME</a></li>
		</ul>
	</div> 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "home.php";
				break;
			case 'login':
				include "login.php";
				break;
			case 'daftar':
				include "daftar.php";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "home.php";
	}
 
	 ?>
 
	</div>
</div>
</body>
</html>