<?php
$server = "localhost";
$username="root";
$password="123456789";
$db_name="books";
$conn=mysqli_connect($server,$username,$password,$db_name);



$id=$_GET['id'];
mysqli_query($conn,"delete from login_user where id='$id'");
 header('location:admin.php'); 
?>