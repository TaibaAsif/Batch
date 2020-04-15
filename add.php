<html>
<head>
	<title>Add Users</title>
</head>

<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td>Mobile</td>
				<td><input type="text" name="mobile"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	
</body>
</html>
<?php
    include "config.php";
    if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		
		$query = mysqli_query($conn, "INSERT INTO users(name,mobile,email) VALUES('$name','$mobile',
			'$email')");
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}

?>

