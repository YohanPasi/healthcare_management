<?php
include "config1(order).php";

$id=$_GET['updateid'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $medicine_code = isset($_POST['Medicine_name']) ? $_POST['Medicine_name'] : '';
    $Quantity = isset($_POST['Quantity']) ? $_POST['Quantity'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
   
    $sql = "UPDATE prescription_by_name SET `medicine_code`='$medicine_code', `Quantity`=$Quantity, `address`='$address' 
    WHERE `ID`=$id";




    if (mysqli_query($conn, $sql)) {
        header("Location:orderdash1(html).php");
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
        <link rel="stylesheet" href="update(css).css">
        <script src="scriptByname.js"></script> 
    
        <title>Update Form</title>
    
    </head>
    <body>

        
       <!--header-->
    <header>
        <a href="#" class="logo" align="left"> <img src="medicare.png"> </a>

        <ul class="navlist">
            <li><a href="orderdash1(html).php">Order Dashboad</a></li>
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

        <form method="post" action="update.php?updateid=<?php echo $id; ?>">

            <div class="form-new">
                <div class="formfirst">
                    <label>Medicine Name or Code :</label>
                    <input type="text" name="Medicine_name" placeholder="Enter Medicine name or code" required>
                </div>
                <div class="formfirst">
                    <label>Quantity :</label>
                    <input type="number" name="Quantity" placeholder="Enter Quantity" required>
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