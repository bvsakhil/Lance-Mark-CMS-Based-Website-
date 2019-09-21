
<?php



$DBConnect = @mysqli_connect("localhost", "root", "");

mysqli_select_db($DBConnect, "portal");

$idofpost = $_GET['id'];


$QueryResult = @mysqli_query($DBConnect,

    "SELECT title FROM apps WHERE id = \"$idofpost\"");



$Row = (mysqli_fetch_assoc($QueryResult));

echo $Row['title'];



//Warning: mysql_fetch_array() expects parameter 1 to be resource, object given

?>