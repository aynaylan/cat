<!DOCTYPE html>
<html>
<head>
	<title></title>


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
		<li><a href="1.php"><span class="glyphicon glyphicon-home"></span></a></li>
		<li><a href=""></a></li>
		<li><a href=""></a></li>

	</ul>

	</div>
	
</nav>

	<div id="head">
	<h1>Welcome<?php

	$nom =$_POST['n1'];

	echo " ".$nom;

	?></h1>
	<div id="deco"><p>Our grading system!</p></div>
	
	</div>

	<div class=""></div>
	<form class="form form-group" id="cus">
		<b>Please fill in the spaces that are applicable to you!!</b><br>
		Mathematics:<input type="number" name="mao">
		English:<input type="number" name="eng"><br><br>
		Swahili:<input type="number" name="swa">
		Chemistry:<input type="number" name="chem"><br><br>
		Physics:<input type="number" name="phy">
		Geography:<input type="number" name="geo"><br><br>
		Computer:<input type="number" name="comp">
		Business:<input type="number" name="bizna"><br><br>
		
		<button type="reset" class="btn btn-danger">Reset</button>

		<button type="submit" class="btn btn-success">Calculate grade</button>

	</form>

	<?php

	$maths=$_GET['mao'];
	$ngoso=$_GET['eng'];
	$hili=$_GET['swa'];
	$chemil=$_GET['chem'];
	$phyzo=$_GET['phy'];
	$graphy=$_GET['geo'];
	$biz=$_GET['bizna'];
	$compu=$_GET['comp'];


	$total=($maths+$ngoso+$hili+$chemil+$phyzo+$graphy+$biz+$compu)/7;

	if ($total >=85) {
		echo "A";
	}elseif ($total >= 80) {
		echo "A-";
	}elseif ($total >=75) {
		echo "B+";
	}elseif ($total >= 70) {
		echo "B";
	}elseif ($total >=65) {
		echo "B-";
	}elseif ($total >=60) {
		echo "C+";
	}elseif ($total >=55) {
		echo "C";
	}elseif ($total >=50) {
		echo "C-";
	}elseif ($total >=45) {
		echo "D+";
	}elseif ($total >=40) {
		echo "D";
	}elseif ($total >=35) {
		echo "D-";
	}else{
		echo "E";
	}


	?>

</div>
</body>
</html>