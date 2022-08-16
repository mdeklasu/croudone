<?php

	$name=$_POST['name'];
	$code=$_POST['code'];

$link=mysqli_connect("localhost","root","","mama");

$query="INSERT INTO data(name,code)VALUES('$name','$code')";

$query_run=mysqli_query($link,$query);

if ($query_run) {
	header("Location:form.php?msg=Data Transfer Successful");
}
else{
	header("Location:form.php?msg=Data Transfer Unsuccessful");
}

	
?>