<?php


$jala="uploads/";
$alal=$jala.basename($_FILES['thefiletobeuploaded']['name']);
$UploaOk=1;
$imageis=strtolower(pathinfo($alal,PATHINFO_EXTENSION));


if (isset($_POST['submit'])) {

	$ty=getimagesize($_FILES['thefiletobeuploaded']['tmp']);
	if ($ty!== false) {
	echo "The image uploaded is" . $ty[''];
	$UploaOk=1;
	}else{
		echo "File aint right";
	}$UploaOk=0;
	



}


?>