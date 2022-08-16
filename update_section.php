<?php

$link=mysqli_connect("localhost","root","","mama");

$id=$_GET['id'];
$name=$_POST['name'];
$code=$_POST['code'];
$query="UPDATE data SET name='$name',code='$code' WHERE id=$id";

$query_run=mysqli_query($link,$query);

if ($query_run) {
	header("Location:form.php?msg=Update Done");
}
else{
	header("Location:form.php?msg=Update Feld");
}

?>