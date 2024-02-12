<?php
    session_start();
    
    require_once('connection/connect.php');

   
    if (isset($_POST['sellername']) && isset($_POST['password'])) {
      
        $sellername = $_POST['sellername'];
        $password = $_POST['password'];
        $query = "SELECT * FROM seller WHERE sellername = '$sellername' AND password = '$password'";
 
        $result = mysqli_query($db, $query);

      

        if (mysqli_num_rows($result) != 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $db_seller_id = $row['seller_id'];
                $db_sellername = $row['sellername'];
                $db_password = $row['password'];
                $db_email = $row['email'];
            }


            if ($sellername == $db_sellername && $password == $db_password) {

                $_SESSION['sellername'] = $db_sellername;
                $_SESSION['seller_id'] = $db_seller_id;
                header("Location: seller_dashboard.php");
            }
        } else {
            require_once "seller_login_page.php";
            echo "<p class='text-center'>Wrong Password</p> ";
        }
    }
    ?>