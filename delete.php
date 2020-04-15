<?php

include "config.php";


$id = $_GET['id'];


$query = mysqli_query($conn, "DELETE FROM users WHERE id=$id");


header("Location:index.php");
?>

