<!DOCTYPE html>
<html>
<head>
	<title>Lukenya high school</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<script type="text/javascript" src="custom.js"></script>

	<script type="text/javascript" src="js/bootstrap.min.js"></script><meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">

<nav class="nav navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
	
		<ul class="nav navbar-nav">
		<li><a href=""><span class="glyphicon glyphicon-home"></span></a></li>
		<li><a href=""></a></li>
		<li><a href=""></a></li>

	</ul>

	</div>
	
</nav>


	<div class="row">
		<div id="head">
	<h1>Lukenya Group of schools</h1>
	<div id="deco">
	<p>Motto:Strategy</p>
	<p>Vision:To nurture good character and instill discipline and morals in the youth</p>
	</div>
	</div></div>

	<div class="row">
		<div class="container">

			<div class="md-6 lg-6">
				<p>
					Lukenya scholl is located in the outskirts of Nairobi County and at the foot of Lukenya Hills.It neighbours Daystar University Main Campus.The environment is well suited for learning as it is very far away from the industrial city.We usually engage our students in both cirriculum and co-cirriculum activities so as to create a sense of responsiblity at a tender age.
				</p><img src="css/rg.png" id="cont">
			</div>

		

		<div class="md-6 lg-6">
			
			<form class="form form-group" method="POST" action="vali.php">
			First Name<input type="text" name="n1" required="">
			Second Name<input type="text" name="n2"><br>
			Date of birth<input type="date" name="bod">
			Phone Number<span class="glyphicon glyphicon-phone"></span><input type="number" name="" required=""><br>
			E-mail<input type="email" name=""><br>
			Password<input type="password" name="pswd"><br>
			<?php

			$pass=$_POST['pswd'];

			if (strlen($pass)<8) {
				echo "Too Short";
			}else{
				echo " ";
			}

			?>
			Confrm password<input type="password" name="pswd1"><br>

			<?php

			$cfm= $_POST['pswd1'];
			if ($cfm !=$pass ) {
				
				echo "Mismatch!";
			}else{
				echo " ";
			}

			?>
			<button type="submit" class="btn btn-success">Register</button>
			</form>
		</div>


	</div>
	</div>


</div>

</body>
</html>