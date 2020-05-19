<?php

$con=mysqli_connect("localhost","root","","bus_coba");
//Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if ((!empty($_GET['id'])) && (!empty($_GET['tbname'])) && (!empty($_GET['pk']))) {
	$id = $_GET['id'];
	$tbname = $_GET['tbname'];
	$pk = $_GET['pk'];
	$q = "select photo from $tbname where $pk = '$id'";
	$result=mysqli_query($con,$q);
	$r=mysqli_fetch_object($result);
	echo $r->photo;
}



