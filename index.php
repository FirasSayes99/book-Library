
<?php
session_start();
$server = "localhost";
$username="root";
$password="123456789";
$db_name="books";

$conn = new mysqli($server,$username,$password,$db_name);


$id=$_GET['id'];

if($id=='1'){

    $result= "SELECT * FROM book WHERE BookCategory= '1'";
    
}

elseif(($id=='2')){

    $result= "SELECT * FROM book WHERE BookCategory= '2'";
    


}

elseif($id=='3'){

    $result= "SELECT * FROM book WHERE BookCategory= '3'";



}

elseif($id=='4'){

  $result= "SELECT * FROM book WHERE BookCategory= '4'";



}

elseif($id=='5'){

  $result= "SELECT * FROM book WHERE BookCategory= '5'";



}

elseif($id=='6'){

  $result= "SELECT * FROM book WHERE BookCategory= '6'";
 


}

else {
    $result= "SELECT * FROM book ";
}


$sql= mysqli_query($conn ,$result);

$Product="";
while ($row=mysqli_fetch_array($sql)) {

    $Product=$Product."

    <div class='col-lg-3 col-md-6 mb-4'>
      <div class='card h-100'>
        <form  action='BookCard.php' method='Post'>
        <img  class='card-img-top' src='".$row["BookImage"]."' alt=''>
        <div class='card-body'>
          <h4 class='card-title'>".$row["BookName"]."</h4>
          <p class='card-text'>".$row["BookWriter"]."</p>
         
        </div>
        <div class='card-footer'>
        <input type='hidden'   name='BookId' value=".$row["BookId"].">
          <input type='submit'  class='btn btn-primary' value='عرض'>
        </div>
       
      </div>
    </div>
    </form>
    ";

}
?>

<!DOCTYPE html>
<html  >

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>BookAngel</title>

  <link href="https://fonts.googleapis.com/css?family=Rakkas&display=swap" rel="stylesheet"></link>
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap-rtl.css" rel="stylesheet">


  <link href="assets\css\xxx.css" rel="stylesheet">

</head>

<body  >

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
	 
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">الصفحة الرئيسية<span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               التصنيفات
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="index.php">كل الكتب</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php?id=1">فكاهية</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php?id=2">سياسية</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php?id=3">دينية</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php?id=4">روايات</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php?id=5">علوم</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php?id=6">تعليمية</a>
              </div>
             </li>
            <li class="nav-item">
            <a class="nav-link" href="ContactUs.html">تواصل معنا </a>
           </li>

         
            <li class="nav-item">
            <a class="nav-link" href="Aboutus.php">فريقنا</a>
           </li>
        
            
          <!-------Login Session  Set --------->
          <?php
            if ($_SESSION["name"]) {
              echo " <li id='logB' class='nav-item'>
              <a class='nav-link' href='logout.php'>تسجيل الخروج</a>
            </li>";
            } else echo " <li id='logB'  class='nav-item'> 
            <a class='nav-link'
             href='login.php'>تسجيل الدخول</a>
             </li>"; ?>

          </ul>
     
          <a class="navbar-brand" href="#">ملاك الكتب-BooKsAngel</a>
        </div>
    </nav>

  <!-- Page Content -->
  <div class="container">

<div >

<?php
if($_SESSION["name"]) {
?>
Welcome <?php echo $_SESSION["name"]; ?>
<?php
}
?>

</div >


    <!-- Welcome Message  -->
     
    <div style=" opacity: 0.9;">
     <header id="firas"  class="jumbotron my-4 bg-image">
      
        <h1 class="xxx">مرحبا بك في معرضنا</h1><br>
        <p class="lead">أَعَزُّ مَكانٍ في الدُنى سَرجُ سابِحٍ وَخَيرُ جَليسٍ في الزَمانِ كِتابُ</p>
   
      
     </header>
    </div>
    
 

    <!-- features -->
    <div class="row text-center">

    

         <?  
          
          echo $Product;

          ?>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Books Angel 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- JavaScript -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>



?>
