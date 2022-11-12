<?php
$conn = mysqli_connect('localhost','root','123456789','books') or die('Unable To connect');

if (isset($_POST['submit'])){
$user = $_POST['name'];
$userName = $_POST['userName'];
$password = $_POST['password'];
$isAdmin = $_POST['isAdmin'];

mysqli_query($conn,"INSERT INTO login_user(name ,userName,password,is_Admin) VALUES('$user','$userName', '$password' ,'$isAdmin')");

header('Location:admin.php');

    }
?>
