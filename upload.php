
<?php
/*----------------------Posted Inputs --------------------------*/ 

$BookName=$_POST["BookName"];
$BookWriter=$_POST["BookWriter"];
$BookDescription=$_POST["BookDescription"];
$BookCategory=$_POST["BookCategory"];
$BookLink=$_POST["BookLink"];
/*----------------------file upload --------------------------*/ //firassayes
$uploaddir = 'uploads/';


$BookFile = $uploaddir . basename($_FILES['BookFile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['BookFile']['tmp_name'], $BookFile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload\n";
}


/*-------------------------------------------------------------*/


/*-----------------------image upload ------------------------*/

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$imagedir = 'uploadImges/';

$BookImage=$imagedir. basename($_FILES['BookImage']['name']);
echo '<pre>';
if (move_uploaded_file($_FILES['BookImage']['tmp_name'], $BookImage)) {
    echo "img was successfully uploaded.\n";
} else {
    echo " image not upload !\n";
}


/*-----------------------dadta base Conect and Insert  ------------------------*/


$conn = mysqli_connect('localhost','root','123456789','books') or die('Unable To connect');
$result = mysqli_query($conn,"INSERT INTO book (BookName,BookWriter,BookDescription,BookCategory,BookImage,BookFile,BookLink)
VALUES ('$BookName','$BookWriter','$BookDescription','$BookCategory','$BookImage','$BookFile','$BookLink')");


header('Location:admin.php');

BookLink

?>
