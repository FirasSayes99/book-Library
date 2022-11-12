<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('localhost','root','123456789','books') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM login_user WHERE userName='" . $_POST["userName"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
		$_SESSION["is_admin"] = $row['is_admin'];
        } else {
         $message = "Invalid Username or Password!";
        }
    }
    if (isset($_SESSION["id"])) {
        if ($_SESSION["is_admin"]==1) {
            header("Location:admin.php");
        } else {
            header("Location:index.php");
        }
    }
?>


<!DOCTYPE html>
<html >
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="assets/logIn/img/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="assets/logIn/vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="assets/logIn/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="assets/logIn/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

	<link rel="stylesheet" type="text/css" href="assets/logIn/vendor/animate/animate.css">
	
	<link rel="stylesheet" type="text/css" href="assets/logIn/vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="assets/logIn/vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="assets/logIn/vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="assets/logIn/vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="assets/logIn/css/util.css">

	<link rel="stylesheet" type="text/css" href="assets/logIn/css/main.css">


  
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap-rtl.css" rel="stylesheet">
  
	<link href="assets/vendor/bootstrap/css/bootstrap-rtl.css" rel="stylesheet">

</head>
<body>

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

	<div class="limiter" style="margin-top:50px;">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(assets/logIn/images/book.jpg);">
					<span class="login100-form-title-1">
						تسجيل الدخول
					</span>
				</div>

				<form class="login100-form validate-form" name="frmUser" method="post" action="">


                <div class="message"><?php if($message!="") { echo $message; } ?></div>


					<div class="wrap-input100 validate-input m-b-26" data-validate="حقل مطلوب">
						
						<input class="input100" type="text" name="userName" placeholder="ادخل اسم المستخدم">
						<span class="focus-input100"></span>
					
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "حقل مطلوب">
						
						<input class="input100" type="password" name="password" placeholder="ادخل كلمة المرور">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								تذكرني
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								هل نسيت كلمة المرور؟
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="submit">
							دخول
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="assets/logIn/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/logIn/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/logIn/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/logIn/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/logIn/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/logIn/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/logIn/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/logIn/js/main.js"></script>

</body>
</html>