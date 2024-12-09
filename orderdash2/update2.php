<?php
include "configorderdash2.php";

$id=$_GET['updateid'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patient_name = isset($_POST['Name']) ? $_POST['Name'] : '';
    $phone_no = isset($_POST['phone']) ? $_POST['phone'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
   
    $sql = "UPDATE pres_by_image SET `patient_name`='$patient_name', `phone_no`=$phone_no, `address`='$address' 
    WHERE `ID`=$id";




    if (mysqli_query($conn, $sql)) {
        header("Location:orderdash2(html).php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", intial-scale="1", shrink-to-fit="no">
        <link rel="stylesheet" href="update2(css).css">
        <script src="scriptByname.js"></script> 
    
        <title>Update Form</title>
    
    </head>
    <body>

        
       <!--header-->
    <header>
        <a href="#" class="logo" align="left"> <img src="medicare.png"> </a>

        <ul class="navlist">
            <li><a href="orderdash2(html).php">Prescription Dashboad</a></li>
            <li><a href="#Order By Name" class="active">Update Form</a> </li>
        </ul>
        <div class="nav-icons">
            <a href="#">Logout</a>
            <div class="bx bx-menu-id" id="menu-icon"></div>
        </div>
        <br>
    </header>

    <div class="container">
        <header1>Update Form</header1>

        <form method="post" action="update2.php?updateid=<?php echo $id; ?>">

            <div class="form-new">
                <div class="formfirst">
                    <label>Patient Name :</label>
                    <input type="text" name="Name" placeholder="Enter Patient Name" required>
                </div>
                <div class="formfirst">
                    <label>Phone Number :</label>
                    <input type="tel" name="phone" placeholder="Enter Phone Number" required>
                </div>
                <div class="formfirst">
                    <label>Address :</label>
                    <input type="text" name="address" placeholder="Enter address" required>
                </div>
            </div>
            <div class="button01">
                <input type="submit" value="Update">
            </div>
            <div class="button02">
                <input type="button" id="cancelbutton" value="Cancel" onclick="window.history.back();">

            </div>
        </form>
    </div>

    </body>


</html>