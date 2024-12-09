<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", intial-scale="1", shrink-to-fit="no">

        <link rel="stylesheet" href="Deliver.css"> 
        <script src="scriptdeliver.js"></script>

        <script>
            alert("Welcome to the Deliver page!");
        </script>
    </head>

        <title>Deliver Form</title>
    
    <body>
            
    <header>
        <a href="#" class="logo" align="left"> <img src="medicare.png"> </a>

        <ul class="navlist">
            <li><a href="../orderdash/orderdash1(html).php">Order Medicine Dashboard</a></li>
            <li><a href="#Deliver" class="active">Deliver</a> </li>
            <li><a href="../orderdash2/orderdash2(html).php">Prescription Order Dashboard</a></li>
        </ul>
        <div class="nav-icons">
            <a href="#">Log Out</a>
            <div class="bx bx-menu-id" id="menu-icon"></div>
        </div>
        <br>
    </header> 
    <div class="container">
        <header1>Deliver Medicine</header1>

        <form action="php/connect.php" method="post" name="deliver-form" >
            <div class="form-new">
                <div class="formfirst">
                    <label>Patient Name :</label>
                    <input type="text" name="name" placeholder="Enter patient name" required>
                </div>
                <div class="formfirst">
                    <label>Phone No :</label>
                    <input type="tel" name="phone_no" placeholder="Enter patient phone Number" required>
                </div>
                <div class="formfirst">
                    <label>Address :</label>
                    <input type="text" name="address" placeholder="Enter Patient address" required>
                </div>
                <div class="formfirst">
                    <label>Cost :</label>
                    <input type="number" name="cost" placeholder="Enter the cost" required>
                </div>
            </div>
            <div class="button01">
                <input type="submit" value="Deliver">
            </div>
            <div class="button02">
                <input type="button" id="cancelbutton" value="Cancel">
            </div>
        </form>
    </div>
        </body>
    </html>    