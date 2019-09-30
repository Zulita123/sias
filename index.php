<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'sistem/proses.php';
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>S I A S</title>
    <script src="asset/jquery.min.js"></script>
    <script src="asset/bootstrap.min.js"></script>
    <link href="css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <?php
  session_start();
  if (!isset($_SESSION['nama'])) {
    header('location:login.php');
  } 
  ?>
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php?p=home">
                        <!-- Logo icon -->
                        <b><i class="fa fa-envelope"></i></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span><i class="fa fa-mail">SIAS</i></span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- Messages -->
                        <!-- End Messages -->
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">

                        <!-- Search -->
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                        <!-- Comment -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <?php echo $_SESSION['nama'] ?>
                            </a>
                           
                        </li>
                        <!-- End Comment -->
                        <!-- Messages -->
                        <!-- End Messages -->
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/users/5.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="#"><i class="fa fa-user" readonly></i> <?php echo $_SESSION['level'];?></a></li>
                                    <li><a href="proses/logout.php" onclick="return confirm('Apakah Anda Yakin Untuk Logout?')"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li> <a  href="index.php?p=home" aria-expanded="false"><i class="fa fa-dashboard"></i><span class="hide-menu">Beranda</span></a></li>
                         <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-envelope-o"></i><span class="hide-menu">Surat Masuk</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="index.php?p=input-masuk">Tambahkan Surat Masuk</a></li>
                                <li><a href="index.php?p=surat-masuk">Data Surat Masuk</a></li>
                            </ul>
                        </li>
                         <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-paper-plane-o"></i><span class="hide-menu">Surat Keluar</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="index.php?p=input-keluar">Tambahkan Surat Keluar</a></li>
                                <li><a href="index.php?p=surat-keluar">Data Surat Keluar</a></li>
                            </ul>
                        </li>
                        <li> <a  href="index.php?p=disposisi" aria-expanded="false"><i class="fa fa-comment-o"></i><span class="hide-menu">Disposisi</span></a></li>                        
                        <li> <a  href="index.php?p=petugas" aria-expanded="false"><i class="fa fa-user-o"></i><span class="hide-menu">Petugas</span></a></li>   
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-area-chart"></i><span class="hide-menu">Laporan</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="index.php?p=lap-masuk">Surat Masuk</a></li>
                                <li><a href="index.php?p=lap-keluar">Surat Keluar</a></li>
                                <li><a href="index.php?p=lap-dispo">Disposisi</a></li>
                            </ul>
                        </li>                     
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-trash-o"></i><span class="hide-menu">Log Hapus</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="index.php?p=surat-hapus">Surat Masuk</a></li>
                                <li><a href="index.php?p=log-keluar">Surat Keluar</a></li>
                            </ul>
                        </li>  
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="konten">
            <?php
                if (empty($_GET['p'])){
                    echo "<script>document.location.href='index.php?p=home'</script>";
                }else{
                    $home=$_GET['p'];
                    include"page/$home.php";
                }
            ?>
        </div>
        <!-- End Page wrapper  -->
    
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>


    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>

    <script src="js/lib/datatables/datatables.min.js"></script>

</body>

</html>