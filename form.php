<!DOCTYPE html>
<html>
<head>
	<title>MYSQL EXAMPUL</title>
</head>
<body>
	<dev style="text-align: center;color: green;font-size: 25px">
		
	
	<form action="save.php" method="post">
	<label for="name">Name</label>
	<input type="text" name="name" id="name" placeholder="Enter Your Name"><br>
	<br>
	<label for="code">Code</label>
	<input type="text" name="code" id="code" placeholder="Enter Your code"><br><br>
	<button type="submit" style="color: red;font-size: 30px;border-radius: 10px;background-color: black">submit</button><br><br>
	
	</form>
	</dev>
	<h1 style="color: green;text-align: center;font-size: 50px;font-weight: 900px;">WELCOME TO MYSQL CRUTE</h1><br><br>



	   <?php

        if (isset($_GET['msg'])) {
        echo $_GET['msg'];
        echo "<br>";
        }
		?>

	 <thead  style="text-align: center;">
                  <tr>
                    <th>Name</th>

                    <th>Code</th> <br>
                    
                    
                    </tr>
                  
                  <?php

                  	$link=mysqli_connect("localhost","root","","mama");

                  	$query="SELECT * FROM data";

                  	$query_run= mysqli_query($link,$query);

                  	while ($rows=mysqli_fetch_assoc($query_run)) {

                  ?>
                   </thead>
                  <tbody>
                  	<tr>
                  	
                  	<td><?php echo $rows['name'];?></td>
                  	<td><?php echo $rows['code'];?></td>
                  	<td> <a href="edit.php?id=<?php echo $rows['id']; ?>">Update</a></td>
                  	<td> <a href="delete.php?id=<?php echo $rows['id']; ?>">Delete</a></td><br>
                  	</tr>

            <?php

            	}
                
            ?> 

                  </tbody>
                 
</body>
</html>