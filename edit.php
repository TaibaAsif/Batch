<?php

include "config.php";


if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
		
	$query = mysqli_query($conn, "UPDATE users SET name='$name',email='$email',mobile='$mobile' WHERE id=$id");
	
	
	header("Location: index.php");
}
?>
<?php

$id = $_GET['id'];


$query = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($query))
{
	$name = $user_data['name'];
	$email = $user_data['email'];
	$mobile = $user_data['mobile'];



	
}
?>
<html>
<head>	
	<title>Edit </title>
</head>

<style type="text/css">
       
form {
    display: inline-block;
    
    }
    body{
    	text-align: center;
    }

    
 
    </style>

<body >
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php" >
		<table border="2">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>Phone no:</td>
				<td><input type="number" name="mobile" value=<?php echo $mobile;?>></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value=<?php echo $email;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>

		</table>
	</form>
</body>
</html>

