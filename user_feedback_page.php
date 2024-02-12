<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
error_reporting(0);
session_start();
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>FoodShades</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!--header starts-->
    <header id="header" class="header-scroll top-header headrom">
        <!-- .navbar -->
        <nav class="navbar navbar-dark">
            <div class="container">
                <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse"
                    data-target="#mainNavbarCollapse">&#9776;</button>


                <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span
                                    class="sr-only">(current)</span></a> </li>
                        <li class="nav-item"> <a class="nav-link active" href="restaurants.php">Restaurants <span
                                    class="sr-only"></span></a> </li>

                        <?php
						if(empty($_SESSION["user_id"]))
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">signup</a> </li>
                              <li class="nav-item"><a href="admin/index.php" class="nav-link active">Admin login</a> </li>
                              <li class="nav-item"><a href="seller_login_page.php" class="nav-link active">Seller login</a> </li>';
							}
						else
							{
									
									
										echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">your orders</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">logout</a> </li>';
							}

						?>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- /.navbar -->
    </header>

    <div class="page-wrapper">
    <div class="container m-auto my-5">
        <div class="container d-flex align-items-center justify-content-center">
            <div class="card p-5 border-sign-in">
                <div>
                    <h4 class="text-center text-secondary">Feedback</h4>
                    </h4>
                </div>

                <form action="user_feedback_db.php" method="post">
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Title</label>
                            <input name="feedback_title" type="text" class="form-control w-100"  placeholder="title" />
                        </div>
                        <label for="exampleFormControlTextarea1" class="form-label">Your Objection</label>
                        <textarea name="feedback_message"  placeholder="text" class="form-control  w-100" rows="8"></textarea>
                        <button type="submit" class="btn btn-success mt-3">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- start: FOOTER -->
    <footer class="footer">
        <div class="container">

            <!-- bottom footer statrs -->
            <div class="bottom-footer">
                <div class="row">

                    <div class="col-xs-12 col-sm-4 address color-gray">
                        <h5>Address</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat eos assumenda vitae
                            blanditiis quam doloremque?</p>
                        <h5>Phone: 080 000012 222 </h5>
                    </div>
                </div>
            </div>
            <!-- bottom footer ends -->
        </div>
    </footer>
    <!-- end:Footer -->
    </div>



    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>