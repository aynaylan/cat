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

		<?php

		$ruby=fopen("magda.txt", "w") or die("Unable to open file");

		$tevin="My name is tevin and am in class Ruby\n";
		fwrite($ruby, $tevin);

		$tevin = "I love my class\n";
		fwrite($ruby, $tevin);
		fclose($ruby);

		?>


		<?php

		$ruby=fopen("magda.txt", "r") or die("Unable to open file");
		echo fread($ruby, filesize("magda.txt"));
		fclose($ruby);


		?>

		
	<h3>
		Uploading a file
	</h3>

	<form method="POST" action="upload.php">
		Click on Image to upload:<br>
		<input type="file" name="uthefiletobeuploaded" id="thefiletobeuploaded">
		<button type="submit" class="btn btn-success">Upload Image Here</button>
	</form>

		
	</div>




	
	

</body>
</html>