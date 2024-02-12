<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
error_reporting(0);
session_start();
if(empty($_SESSION['seller_id'])){
	header('location:seller_login_page.php');
}

?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Seller Dashboard</title>

    <link href="admin/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">

    <link href="admin/css/helper.css" rel="stylesheet">
    <link href="admin/css/style.css" rel="stylesheet">

</head>

<body class="fix-header">



    <div id="main-wrapper">

        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">

                <div class="navbar-header">
                    <h3 class=>Seller dashboard</h3>
                </div>

                <div class="navbar-collapse">

                    <ul class="navbar-nav mr-auto mt-md-0">

                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  "
                                href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  "
                                href="javascript:void(0)"><i class="ti-menu"></i></a> </li>


                    </ul>

                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <h5>Seller</h5>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="dropdown-user">
                                    <li><a href="seller_logout_db.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="left-sidebar">

            <div class="scroll-sidebar">

                <nav class="sidebar-nav">
                    <ul id="sidebarnav">



                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i
                                    class="fa fa-archive f-s-20 color-warning"></i><span
                                    class="hide-menu">Store</span></a>
                            <ul aria-expanded="false" class="collapse">

                                <li><a href="admin/add_category.php">Add Category</a></li>
                                <li><a href="admin/add_restraunt.php">Add Restaurant</a></li>

                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-cutlery"
                                    aria-hidden="true"></i><span class="hide-menu">Menu</span></a>
                            <ul aria-expanded="false" class="collapse">

                                <li><a href="admin/add_menu.php">Add Menu</a></li>


                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-shopping-cart"
                                    aria-hidden="true"></i><span class="hide-menu">Orders</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="admin/all_orders.php">All Orders</a></li>

                            </ul>
                        </li>
                        <li> 
                            <a class="has-arrow" href="seller_feedback_view.php" aria-expanded="false"><i class="fa fa-comment"></i>"
                                <span class="hide-menu">Feedback</span></a>
                        </li>

                    </ul>
                </nav>

            </div>

        </div>

        <div class="page-wrapper" style="height:1200px;">

            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3>
                </div>

            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-cutlery f-s-40" aria-hidden="true"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?php $sql="select * from dishes";
                                                    $result=mysqli_query($db,$sql); 
                                                        $rws=mysqli_num_rows($result);
                                                        
                                                        echo $rws;?></h2>
                                    <p class="m-b-0">Dishes</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-user f-s-40 color-danger"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?php $sql="select * from users";
                                                    $result=mysqli_query($db,$sql); 
                                                        $rws=mysqli_num_rows($result);
                                                        
                                                        echo $rws;?></h2>
                                    <p class="m-b-0">Customer</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-shopping-cart f-s-40" aria-hidden="true"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?php $sql="select * from users_orders";
                                                    $result=mysqli_query($db,$sql); 
                                                        $rws=mysqli_num_rows($result);
                                                        
                                                        echo $rws;?></h2>
                                    <p class="m-b-0">Orders</p>
                                </div>
                            </div>
                        </div>
                    </div>














                </div>

            </div>


        </div>

    </div>

    <script src="admin/js/lib/jquery/jquery.min.js"></script>

    <script src="admin/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="admin/js/lib/bootstrap/js/bootstrap.min.js"></script>

    <script src="admin/js/jquery.slimscroll.js"></script>

    <script src="admin/js/sidebarmenu.js"></script>

    <script src="admin/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>

    <script src="admin/js/custom.min.js"></script>

</body>

</html>