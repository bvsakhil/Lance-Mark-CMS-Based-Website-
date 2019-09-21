<?php




//Calling database

 $mysqli = new mysqli('localhost', 'root', '', 'portal') or die(mysqli_error($mysqli));


// Default values used in update form

$title = '';
$url = '';
$update = false;
$id = 0;


// UI --> ALL


// Code for posting image

if (isset($_POST['publish'])) {

	$title = $_POST['title'];
	$url = $_POST['url'];

	$mysqli->query("INSERT INTO apps (title,url) VALUES('$title','$url')") or die($mysqli->error);


	header("location: postinapps.php");
}


// Code for deleting posted image

if (isset($_GET['delete'])){
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM apps WHERE id=$id") or die ($mysqli->error());


	header("location: editinapps.php");
}


// Code for editing 


if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update = true;
	$result = $mysqli->query(" SELECT * FROM apps WHERE id='$id' ") or die($mysqli->error);
	if(count($result)==1){
		$row = $result->fetch_array();
		$title = $row['title'];
		$url = $row['url'];
	}

	
}


// Code for updating 


if(isset($_POST['update'])){
	$id =$_POST['id'];
	$title=$_POST['title'];
	$url = $_POST['url'];

	$mysqli->query("UPDATE apps SET title='$title',url='$url' WHERE id=$id") or die($mysqli->error());

	header("location: editinapps.php");
}









