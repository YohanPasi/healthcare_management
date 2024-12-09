<?php
    include "configorderdash2.php";

    if($conn) {
        $sql = "SELECT `ID`, `patient_name`, `phone_no`, `address`, `email`, `img_dir` FROM `pres_by_image`";
        
        $result = $conn->query($sql);
    }else {
        echo "Fail to connect the database!";
    }

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", intial-scale="1", shrink-to-fit="no">

        <link rel="stylesheet" href="orderdash2(css).css"> 
        <script src=""></script>

        <script>
            alert("Welcome to Pharmacist Dasboard!");
        </script>
    </head>

        <title>Prescription Dashboard</title>
    
    <body>

            
    <header>
        <a href="#" class="logo" align="left"> <img src="medicare.png"> </a>

        <ul class="navlist">
            <li><a href="../dashboad/dashboard(html).php">PharmacistDashboard</a></li>
            <li><a href="PresDashboard" class="active">PrescriptionDashboard</a></li>
            <li><a href="../orderdash/orderdash1(html).php">OrderDashboard</a> </li>
        </ul>
        <div class="nav-icons">
            <a href="#">Log Out</a>
            <div class="bx bx-menu-id" id="menu-icon"></div>
        </div>
        <br>
    </header>

        <div class="container" id="contaniner">
            
            <div class="container1" id = "container1">
                <h1 class="topic">Prescription Orders</h1>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Patient Name</th>
                                <th>Phone Number</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Image/File</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

    <?php

        if(isset($result)){
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>".$row["ID"]."</td>";
                    echo "<td>".$row["patient_name"]."</td>";
                    echo "<td>".$row["phone_no"]."</td>";
                    echo "<td>".$row["address"]."</td>";
                    echo "<td>".$row["email"]."</td>";
                    echo "<td>".$row["img_dir"]."</td>";
                    echo "<td>";
                    echo "<a href='update2.php?updateid=". $row['ID'] . "'>Update</a>";
                    echo "<a href='delete2.php?deleteid=". $row['ID'] . "'>Delete</a>";
                    echo "<a href='../deliver/deliver.php?deliverid=". $row['ID'] . "'>Deliver</a>";
                    echo "</td>";
                    echo "</tr>";
                   
                }
            } else{
                echo "<tr><td colspan='8'>No result found.</td></tr>";
            }

            } else{
                echo "<tr><td colspan='8'>Failed to fetch data</td></tr>";
                }

    ?>
    </tbody>

        </table>
            </div>           
        </div>    
    </body>
    </html>

    <?php
        if($conn){ 
        $conn->close();
        }    
    ?>
