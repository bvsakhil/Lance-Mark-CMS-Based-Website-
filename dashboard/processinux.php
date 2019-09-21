<?php




//Calling database

 $mysqli = new mysqli('localhost', 'root', '', 'job') or die(mysqli_error($mysqli));


// Default values used in update form
$logourl = '';
$title = '';
$role ='';
$location = '';
$apply = '';
$update = false;
$id = 0;


// UI --> ALL


// Code for posting image

if (isset($_POST['publish'])) {

	$logourl = $_POST['logourl'];

	$title = $_POST['title'];
	$role = $_POST['role'];
	$location = $_POST['location'];
	$apply = $_POST['applylink'];


	

	$mysqli->query("INSERT INTO uxdesigner (logourl,title,role,location,applylink) VALUES('$logourl','$title','$role','$location','$apply')") or die($mysqli->error);


	header("location: postinuxd.php");
}


// Code for deleting posted image

if (isset($_GET['delete'])){
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM uxdesigner WHERE id=$id") or die ($mysqli->error());


	header("location: editinuxd.php");
}


// Code for editing 


if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update = true;
	$result = $mysqli->query(" SELECT * FROM uxdesigner WHERE id=$id ") or die($mysqli->error);
	if(count($result)==1){
		$row = $result->fetch_array();

	$logourl = $_POST['logourl'];

	$title = $_POST['title'];
	$role = $_POST['role'];
	$location = $_POST['location'];
	$apply = $_POST['applylink'];

	}

	
}


// Code for updating 


if(isset($_POST['update'])){

	$id =$_POST['id'];

	$logourl = $_POST['logourl'];

	$title = $_POST['title'];
	$role = $_POST['role'];
	$location = $_POST['location'];
	$apply = $_POST['applylink'];

	$mysqli->query("UPDATE uxdesigner SET logourl ='$logorul', title = '$title', role = '$role',location = '$location' WHERE id=$id") or die($mysqli->error());

	header("location: editinuxd.php");
}









