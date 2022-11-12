<?php

$server = "localhost";
$username="root";
$password="123456789";
$db_name="books";

$id=$_POST['BookId'];
$conn = new mysqli($server,$username,$password,$db_name);


$BooK=mysqli_query($conn, "select * from book where BookId= '$id'");
while($books_rows=mysqli_fetch_array($BooK)){


?>
 

 <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Book card</title>

   
  <link href="https://fonts.googleapis.com/css?family=Rakkas&display=swap" rel="stylesheet"></link>
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap-rtl.css" rel="stylesheet">
  
    <link href="assets\css\BookCard1.css" rel="stylesheet">
    

    
</head>

<body>
    <div class="wrapper">
        
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
	 
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">الصفحة الرئيسية<span class="sr-only">(current)</span></a>
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


        <!-- Page Content  -->
        <div class="container">
                        
            
                    <div class="boxone">
                    <div class="one">
                     <h1><?php echo $books_rows['BookName'] ; ?></h1>
                        <table>
                            <tbody>
                                <tr>
                                    <td> <h3>المؤلف : </h3>
                                    <h3 class="doublecot" ></h3>  </td>
                                    <td><h3><?php echo $books_rows['BookWriter'] ; ?></h3></td>
                                    
                                </tr>

                            </tbody>
                        </table> 
                        <div id="desc" >
                          <h3>وصف الكتاب </h3>
                          <div><p class="lead"><?php echo $books_rows['BookDescription'] ; ?></p></div>
                        </div>
                    
                    </div>
                
                    
                    </div>
                
                <div class="boxtwo">

                    <a href="<?php echo $books_rows['BookLink'] ; ?>">
                      <img src="<?php echo $books_rows['BookImage'] ; ?>" alt="">
                    </a>
                

                

                </div>
                </div>


               


             
        </div>
        
    </div>

    
</body>

</html>

    <?php }?>
  