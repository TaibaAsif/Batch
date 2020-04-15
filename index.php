<?php

include "config.php";


$query = mysqli_query($conn, "SELECT * FROM users ");
?>

<html>
<head>    
    <title>Homepage</title>
</head>
<style type="text/css">
    body{
        text-align: center;
    } 
    table{
         
       
        display: inline-block;

    }
</style>

<body>
<a href="add.php">Add New User</a><br/><br/>

    <table border=2>

    <tr>
        <th>Name</th>
        <th>Phone no:</th>
        <th>Email</th> 
        
    </tr>

    <?php  
    while($user_data = mysqli_fetch_array($query)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['mobile']."</td>";
        echo "<td>".$user_data['email']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> |
        <a href='delete.php?id=$user_data[id]'>Delete</a>
        </td>
        </tr>";        
    }
    ?>
    </table>
</body>
</html>
