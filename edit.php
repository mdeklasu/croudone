<!DOCTYPE html>
<html>
<head>
	<title>MYSQL EXAMPUL</title>
</head>
<body>

	<?php
	   $link=mysqli_connect("localhost","root","","mama");

	   $id=$_GET['id'];
	   $query="SELECT * FROM data WHERE id=$id";

	   $query_run=mysqli_query($link,$query);

	   $rows=mysqli_fetch_assoc($query_run);

	?>

	<form action="update_section.php?id=<?php echo $rows['id']; ?>" method="post">
	<label for="name">Name</label>
	<input type="text" name="name" id="name" value="<?php echo $rows['name']; ?>" placeholder="Enter Your Name"><br>
	<br>
	<label for="code">Code</label>
	<input type="text" name="code" id="code" value="<?php echo $rows['code']; ?>" placeholder="Enter Your code"><br><br>
	<button type="submit">submit</button>
	</form>
</body>
</html>



