
<?php
$servername='localhost';
$username='root';
$password='123456789';
$db_name = "books";
$conn=mysqli_connect($servername,$username,$password,"$db_name");

$id=$_GET['id'];

?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="assets/dash/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="assets\vendor\bootstrap\css\bootstrap-rtl.css">
    <!-- Custom styles for this template-->
    <link href="assets/dash/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">


<!-- Page Wrapper -->
<div id='wrapper'>

<!-- Sidebar -->
<ul class='navbar-nav bg-gradient-primary sidebar sidebar-dark accordion' id='accordionSidebar'>

    <!-- Sidebar - Brand -->
    <a class='sidebar-brand d-flex align-items-center justify-content-center' href='admin.php'>
       
        <div class='sidebar-brand-text mx-3'>الصفحة الرئيسية ⚓</div>
    </a>

    <!-- Divider -->
    <hr class='sidebar-divider my-0'>

    <!-- Heading -->
 

    <!-- Nav Item - Pages Collapse Menu -->
    <li class='nav-item'>
        <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#collapsePages'
            aria-expanded='true' aria-controls='collapsePages'>
            <i class='fas fa-fw fa-folder'></i>
            <span>الصفحات</span>
        </a>
        <div id='collapsePages' class='collapse' aria-labelledby='headingPages' data-parent='#accordionSidebar'>
            <div class='bg-white py-2 collapse-inner rounded'>
                <h6 class='collapse-header'>Book Angle:</h6>
                
                <a class='collapse-item' href='viewtest.php'>الكتب</a>
                <a class='collapse-item' href='adduser.php'>اضافة مستخدمين</a>
                <a class='collapse-item' href='addBook.php'>اضافة كتاب </a>
                <a class='collapse-item' href='viewtest.php'>حذف كتاب</a>
                <a class='collapse-item' href='index.php'>الصفحة الرئيسة</a>
                
                
            </div>
        </div>
    </li>

    
    <!-- Divider -->
    <hr class='sidebar-divider d-none d-md-block'>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class='text-center d-none d-md-inline'>
        <button class='rounded-circle border-0' id='sidebarToggle'></button>
    </div>
>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id='content-wrapper' class='d-flex flex-column'>

    <!-- Main Content -->
            <div id='content' >

            <form method="post">
            <table class="table table-bordered table-dark table-hover ">
                <?php  $user_query=mysqli_query($conn, "select * from login_user");
                $user_rows=mysqli_fetch_array($user_query);
                ?>
                 <tr>
                        
                        <td>الاسم</td>
                        <td>اسم المستخدم</td> 
                        <td>كلمة المرور</td>
                         
                </tr>
               
                    <tr>
                   
                        <td><input type="text" name="name" value="<?php echo  $user_rows['name'];  ?>"></td>
                        <td><input type="text" name="username" value=<?php echo  $user_rows['username'] ; ?>></td>
                        <td><input type="text" name="password" value=<?php echo  $user_rows['password'] ; ?>></td>
                       
                    </tr>
                        <td>  <input type="submit" name="submit" value="حفظ"> </td>
                    </tr>
                </table>
        </form>



                
            </div> 
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class='sticky-footer bg-white'>
        <div class='container my-auto'>
            <div class='copyright text-center my-auto'>
                <span>Copyright &copy; BooksAngel 2021</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->


<!-- Bootstrap core JavaScript-->
<script src='assets/dash/vendor/jquery/jquery.min.js'></script>
<script src='assets/dash/vendor/bootstrap/js/bootstrap.bundle.min.js'></script>

<!-- Core plugin JavaScript-->
<script src='assets/dash/vendor/jquery-easing/jquery.easing.min.js'></script>

<!-- Custom scripts for all pages-->
<script src='assets/dash/js/sb-admin-2.min.js'></script>

<!-- Page level plugins -->
<script src='assets/dash/vendor/chart.js/Chart.min.js'></script>

<!-- Page level custom scripts -->
<script src='assets/dash/js/demo/chart-area-demo.js'></script>
<script src='assets/dash/js/demo/chart-pie-demo.js'></script>




    
</body>

</html>

<?php 
if (isset($_POST['submit'])){

$name= $_POST['name'];
$uname=$_POST['username'];
$pass=$_POST['password'];


mysqli_query($conn,"update login_user set name='$name',userName='$uname',password='$pass' where id='$id'");
header('location:xuser.php');
}
?>