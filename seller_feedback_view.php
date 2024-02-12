<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="admin/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    

    <link rel="stylesheet" href="raw_css.css">
    <title>Document</title>
</head>
<div>
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
                            <h5 class="mr-3"><a href="seller_dashboard.php">Seller</a> </h5>
                            <h5 class="mr-3"><a href="seller_logout_db.php"><i class="fa fa-power-off"></i> Logout</a></h5> 
                           
                           
                    </ul>
                </div>
            </nav>
        </div>
</div>

<body>
<div class="container">
        <div class="text-center my-5">
            <h3>Feedbacks</h3>
        </div>

        <div>
            <div class="row container">
                <?php
                require_once("connection/connect.php");
                $sql = "SELECT feedback_id, feedback_date, feedback_title, feedback_message, users.u_id, users.f_name, users.l_name, users.email FROM feedback INNER JOIN users on feedback.u_id = users.u_id ORDER BY feedback_date ASC";

                $result = mysqli_query($db, $sql);
                if (mysqli_num_rows($result) > 0) {
                    //here we will print every row that is returned by our query $sql
                    while ($row = mysqli_fetch_array($result)) {
                        //here we have to write some HTML code, so we will close php tag
                ?>

                        <div class="page-wrapper container col-md-4 mb-5 d-flex justify-content-center">
                            <div class="" style="width: 22rem;">
                                <div class="border rounded p-5 border-dark">
                                    <div class="feedback-title">
                                        <h3 class="card-title"><?php echo $row[2]; ?></h3>
                                    </div>
                                    <div>
                                        <div class="row">
                                             <h4><q><i><?php echo $row[3] ?></i></q></h4>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12"><small><?php echo $row[5] ?> <?php echo $row[6] ?> </small> <br>
                                                <small><?php echo $row[1] ?></small><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
