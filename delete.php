<?php

$link=mysqli_connect("localhost","root","","mama");

$id=$_GET['id'];

$query="DELETE FROM data WHERE id=$id";

$query_run=mysqli_query($link,$query);

if ($query_run) {
	header("Location:form.php?msg=Data Delete Successful");
}
else{
	header("Location:form.php?msg=Data Delete Unsuccessful");
}



?>
