<!DOCTYPE html>
<html>
<head>
	<title>rheo</title>
</head>
<body>

	   <?php

        if (isset($_GET['msg'])) {
        echo $_GET['msg'];
        echo "<br>";
        }
		?>

	 <thead>
                  <tr>
                    <th>Name</th>

                    <th>Code</th> <br>
                    
                    
                    </tr>
                  </thead>
                  <?php

                  	$link=mysqli_connect("localhost","root","","mama");

                  	$query="SELECT * FROM data";

                  	$query_run= mysqli_query($link,$query);

                  	while ($rows=mysqli_fetch_assoc($query_run)) {

                  ?>

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