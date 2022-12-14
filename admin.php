<?php
session_start();
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
<?php
if($_SESSION["name"]) {
?>
مرحبا <?php echo $_SESSION["name"]; ?>

<?php  echo"

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
                <a class='collapse-item' href='xuser.php'>المستخدمين</a>
                <a class='collapse-item' href='ad.php'>اضافة كتاب </a>
                <a class='collapse-item' href='adu.php'>اضافة مستخدم </a>
                <a class='collapse-item' href='index.php'>الصفحة الرئيسة</a>
                
                
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
   

   

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
    <div id='content'>

        <!-- Topbar -->
        <nav class='navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow'>

            <!-- Sidebar Toggle (Topbar) -->
            <button id='sidebarToggleTop' class='btn btn-link d-md-none rounded-circle mr-3'>
                <i class='fa fa-bars'></i>
            </button>

            <!-- Topbar Search -->
            <form
                class='d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search'>
                <div class='input-group'>
                    <input type='text' class='form-control bg-light border-0 small' placeholder='بحث '
                        aria-label='Search' aria-describedby='basic-addon2'>
                    <div class='input-group-append'>
                        <button class='btn btn-primary' type='button'>
                            <i class='fas fa-search fa-sm'></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class='navbar-nav ml-auto'>

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class='nav-item dropdown no-arrow d-sm-none'>
                    <a class='nav-link dropdown-toggle' href='#' id='searchDropdown' role='button'
                        data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        <i class='fas fa-search fa-fw'></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class='dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in'
                        aria-labelledby='searchDropdown'>
                        <form class='form-inline mr-auto w-100 navbar-search'>
                            <div class='input-group'>
                                <input type='text' class='form-control bg-light border-0 small'
                                    placeholder='' aria-label='Search'
                                    aria-describedby='basic-addon2'>
                                <div class='input-group-append'>
                                    <button class='btn btn-primary' type='button'>
                                        <i class='fas fa-search fa-sm'></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                
                <!-- Nav Item - User Information -->
                <li class='nav-item dropdown no-arrow'>
                    <a class='nav-link dropdown-toggle' href='#' id='userDropdown' role='button'
                        data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        <img class='img-profile rounded-circle' src='assets/dash/img/undraw_profile.svg'>
                        <span class='mr-2 d-none d-lg-inline text-gray-600 small'>".$_SESSION["name"]."</span>
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class='dropdown-menu dropdown-menu-right shadow animated--grow-in'
                        aria-labelledby='userDropdown'>
                        
                        <div class='dropdown-divider'></div>
                        <a class='dropdown-item' href='#' data-toggle='modal' data-target='#logoutModal'>
                            <i class='fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400'></i>
                            تسجيل الخروج
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class='container-fluid'>

            <!-- Page Heading -->
            <div class='d-sm-flex align-items-center justify-content-between mb-4'>
                <h1 class='h3 mb-0 text-gray-800'>الصفحة الرئيسة</h1>
            </div>

            <div class='row'>

                <!-- Area Chart -->
                <div class='col-xl-8 col-lg-7'>
                    <div class='card shadow mb-4'>
                        <!-- Card Header - Dropdown -->
                        <div
                            class='card-header py-3 d-flex flex-row align-items-center justify-content-between'>
                            <h6 class='m-0 font-weight-bold text-primary'>عرض الارباح</h6>
                            <div class='dropdown no-arrow'>
                                <a class='dropdown-toggle' href='#' role='button' id='dropdownMenuLink'
                                    data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                    <i class='fas fa-ellipsis-v fa-sm fa-fw text-gray-400'></i>
                                </a>
                                <div class='dropdown-menu dropdown-menu-right shadow animated--fade-in'
                                    aria-labelledby='dropdownMenuLink'>
                                    <div class='dropdown-header'>Dropdown Header:</div>
                                    <a class='dropdown-item' href='#'>Action</a>
                                    <a class='dropdown-item' href='#'>Another action</a>
                                    <div class='dropdown-divider'></div>
                                    <a class='dropdown-item' href='#'>Something else here</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class='card-body'>
                            <div class='chart-area'>
                                <canvas id='myAreaChart'></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pie Chart -->
                <div class='col-xl-4 col-lg-5'>
                    <div class='card shadow mb-4'>
                        <!-- Card Header - Dropdown -->
                        <div
                            class='card-header py-3 d-flex flex-row align-items-center justify-content-between'>
                            <h6 class='m-0 font-weight-bold text-primary'>عرض</h6>
                            <div class='dropdown no-arrow'>
                                <a class='dropdown-toggle' href='#' role='button' id='dropdownMenuLink'
                                    data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                    <i class='fas fa-ellipsis-v fa-sm fa-fw text-gray-400'></i>
                                </a>
                                <div class='dropdown-menu dropdown-menu-right shadow animated--fade-in'
                                    aria-labelledby='dropdownMenuLink'>
                                    <div class='dropdown-header'>Dropdown Header:</div>
                                    <a class='dropdown-item' href='#'>Action</a>
                                    <a class='dropdown-item' href='#'>Another action</a>
                                    <div class='dropdown-divider'></div>
                                    <a class='dropdown-item' href='#'>Something else here</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class='card-body'>
                            <div class='chart-pie pt-4 pb-2'>
                                <canvas id='myPieChart'></canvas>
                            </div>
                            <div class='mt-4 text-center small'>
                                <span class='mr-2'>
                                    <i class='fas fa-circle text-primary'></i> الكتب
                                </span>
                                <span class='mr-2'>
                                    <i class='fas fa-circle text-success'></i> الزوار
                                </span>
                                <span class='mr-2'>
                                    <i class='fas fa-circle text-info'></i> العائدات
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
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

<!-- Scroll to Top Button-->
<a class='scroll-to-top rounded' href='#page-top'>
<i class='fas fa-angle-up'></i>
</a>

<!-- Logout Modal-->
<div class='modal fade' id='logoutModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel'
aria-hidden='true'>
<div class='modal-dialog' role='document'>
    <div class='modal-content'>
        <div class='modal-header'>
            <h5 class='modal-title' id='exampleModalLabel'> هل انت مغادر ؟</h5>
            <button class='close' type='button' data-dismiss='modal' aria-label='Close'>
               
            </button>
        </div>
        <div class='modal-body'>اضغط على تسجيل الخروج لاتمام هذه العملية </div>
        <div class='modal-footer'>
            <button class='btn btn-secondary' type='button' data-dismiss='modal'>الغاء</button>
            <a class='btn btn-primary' href='logout.php'>تسجيل الخروج </a>
        </div>
    </div>
</div>
</div>

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




";  ?>


<?php
}else echo "<h1>Please login first .</h1> <a href='login.php'>login</a>";
?>
    
</body>

</html>