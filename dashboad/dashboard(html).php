<?php

include "dbconnect.php";


?>


<?php
        $name_count = "SELECT COUNT(`ID`) AS `name_count` FROM `prescription_by_name`";

        $result_rs = $conn->query($name_count);
        $result_name = $result_rs->fetch_assoc();

 ?>
<?php
             $img_count = "SELECT COUNT(`ID`) AS `img_count` FROM `pres_by_image`";

             $result_rs = $conn->query($img_count);
             $result_img = $result_rs->fetch_assoc();

             ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard(css).css">

    <script src="scriptdashboard.js"></script>

    <title>Pharmacy Dashboard</title>

</head>

<body>
<header>
        <a href="#" class="logo" align="left"> <img src="medicare.png"> </a>

        <ul class="navlist">
            <li><a href="#" class="active">PharmacistDashboard</a></li>
            <li><a href="../orderdash2/orderdash2(html).php">PrescriptionDashboard</a></li>
            <li><a href="../orderdash/orderdash1(html).php">OrderDashboard</a> </li>
        </ul>
        <div class="nav-icons">
            <a href="#">Log Out</a>
            <div class="bx bx-menu-id" id="menu-icon"></div>
        </div>
        <br>
    </header>
   
    <section id="content">
        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Pharmacy Dashboard</h1>

                </div>
            </div>
            <ul class="box-info">
                <li>
                    <img src="vector3.jpg" class="order">
                    <span class="text">
                        <h3>
                        <?php echo $result_name["name_count"] ?>
                        </h3>
                        <p>Medicine Orders</p>
                    </span>
                </li>
                <li>
                    <img src="vector2.jpg" class="patient">
                    <span class="text">
                        <h3>
                        <?php echo $result_img["img_count"] ?>  
                        </h3>
                        <p>Prescription Orders</p>
                    </span>
                </li>
               
            </ul>
            
            <div class = "add-btns">
                <button class="view-order"><a href="../orderdash/orderdash1(html).php">View Medicine Orders</a></button>
                <button class="view-pres"><a href="../orderdash2/orderdash2(html).php">View Prescription Orders</a></button>
                
            </div>
        </main>
        <!-- MAIN -->
    </section>
</body>

</html>
