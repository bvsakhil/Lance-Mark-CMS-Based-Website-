<?php




//Calling database

 $mysqli = new mysqli('localhost', 'root', '', 'free') or die(mysqli_error($mysqli));


// Default values used in update form

$title = '';
$url = '';
$link = '';
$xdlink = '';
$invlink = '';

$update = false;
$id = 0;


// UI --> ALL


// Code for posting image

if (isset($_POST['publish'])) {

	$title = $_POST['title'];
	$url = $_POST['url'];
	$link = $_POST['link'];
	$xdlink = $_POST['xdlink'];
	$invlink = $_POST['invlink'];


	$mysqli->query("INSERT INTO premium (title,url,link,xdlink,invlink) VALUES('$title','$url','$link','$xdlink','$invlink')") or die($mysqli->error);


	header("location: postinpremium.php");
}


// Code for deleting posted image

if (isset($_GET['delete'])){
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM premium WHERE id=$id") or die ($mysqli->error());


	header("location: editinpremium.php");
}


// Code for editing 


if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM premium WHERE id=$id") or die($mysqli->error);
	if(count($result)==1){
		$row = $result->fetch_array();
		$title = $row['title'];
		$url = $row['url'];
	$link = $_POST['link'];

$xdlink = $_POST['xdlink'];
	$invlink = $_POST['invlink'];
	}

	
}


// Code for updating 


if(isset($_POST['update'])){
	$id =$_POST['id'];
	$title=$_POST['title'];
	$url = $_POST['url'];
	$link = $_POST['link'];
	$xdlink = $_POST['xdlink'];
	$invlink = $_POST['invlink'];


	$mysqli->query("UPDATE premium SET title='$title',url='$url',link='$link',xdlink='$xdlink',invlink='$invlink' WHERE id=$id ") or die($mysqli->error());

	header("location: editinpremium.php");
}









