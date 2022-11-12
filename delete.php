<?php
$server = "localhost";
$username="root";
$password="123456789";
$db_name="books";
$conn=mysqli_connect($server,$username,$password,$db_name);

$id=$_GET['id'];
mysqli_query($conn,"delete from book where BookID='$id'");
 header('location:admin.php'); 
?>


<?php
$id=$_GET['idu'];
mysqli_query($conn,"delete from login_user where id='$id'");
 header('location:admin.php'); 
?>