<!DOCTYPE html>
<html>
<head>
	<title></title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="custom.css">
	<script type="text/javascript" src="custom.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script><meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

	<div class="container-fluid">
		<div class="jumbotron">
			<h1>What is a file?</h1>
			<p>
				A file refers to an object in a computer that is used to store information,settings or even commands.
			</p>
		</div>
	</div>

	<?php
	define("ruby", "i love class ruby");

	echo ruby;

	?>

	<div class="container container-fluid">
		
		<form action="" method="" class="form form-group">

		First Name<input type="text" name="first"><br>
		Second Name<input type="text" name="second"><br>
		E-mail:<input type="email" name="mail"><br>
		Phone:<input type="number" name="num"><br>

		Password:<input type="password" name="pas"><br>
		<?

		$oya = $_GET['pas'];

		if (strlen($oya) < 6) {
			echo "<span color='red'>Too Short<br></span>";
		}
		else{
			echo " ";
		}
		

		?>
		Confirm:<input type="password" name="pas1"><br>

		<?php

		$con = $_GET['pas'];
		$con1 = $_GET['pas1'];

		if ($con != $con1) {
			echo "<span color='red'>Mismatch</span>";
		}else{
			echo " ";
		}

		?>

		<button class="btn btn-success">Register</button>
		
		<?php

		

		?>


	</form>	

	</div>
	

</body>
</html>