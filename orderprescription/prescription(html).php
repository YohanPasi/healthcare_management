<?php  
    include "pres_php.php";

?> 


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", intial-scale="1", shrink-to-fit="no">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <link rel="stylesheet" href="Byprescription.css">
        <!-- <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"> -->
        <script src="scriptByprescription.js"></script> 
    
        <title>Order By Prescription</title>
    
    </head>
    <body>

        
       <!--header-->
    <header>
        <a href="#" class="logo" align="left"> <img src="medicare.png"> </a>

        <ul class="navlist">
            <li><a href="../Find my meds/fndmymeds(html).php">Find My Meds</a></li>
            <li><a href="../ordername/Byname.php">Order By Name</a></li>
            <li><a href="Order By Prescription" class="active">Order By Prescription</a> </li>
        </ul>
        <div class="nav-icons">
            <a href="#">Logout</a>
            <div class="bx bx-menu-id" id="menu-icon"></div>
        </div>
        <br>
    </header>

    <div class="container">
        <header1>Order Medicine</header1>

        <form action="pres_php.php" method="post" enctype="multipart/form-data" >
            <div class="form-new">
                <div class="formfirst">
                    <label>Name :</label>
                    <input type="text" name="Name" placeholder="Enter your Name" required>
                </div>
                <div class="formfirst">
                    <label>Phone Number :</label>
                    <input type="tel" name="Phone_number" placeholder="Enter Phone Number" required>
                </div>
                <div class="formfirst">
                    <label>Address :</label>
                    <input type="text" name="address" placeholder="Enter address" required>
                </div>
                <div class="formfirst">
                    <label>E-mail :</label>
                    <input type="email" name="email" placeholder="Enter Your email address!" required>
                </div>
            </div>
            <div class="upload">
               
                    <div class="upload-data">
                       
                        <i class="fas fa-cloud-upload-alt"></i>
                       
                            
                        <input class="file-upload" type="file" name="file-input">
                        <label class="custom-file-upload" for="file-input">Drag & Drop</label>
                        <span class="file-name"></span>
                    </div> 
                     <button class="select-image" name="img_upload" required>Select Image</button> 
                </div>
                 <div class="button01">
                <input type="submit" name="upload-sub" value="Upload and Order">
            </div>
            <div class="button02">
                <input type="button" id="cancelbutton" value="Cancel">
            </div>
           
        </form>
    </div>

                 <!--footer-->
   <footer>
    <div class="container3">
        <div class="footer-content">
            <div class="footer-section">
                <h3>About Us</h3>
                <p>Convenient, reliable, and affordable healthcare <br></be>at your fingertips.</p><br>
                <div class="payment-icons">
                    <i class='bx bxl-visa'></i>
                    <i class='bx bxl-mastercard'></i>
                    <i class='bx bxl-paypal'></i>
                    <i class='bx bxl-bitcoin'></i>
                </div>
            </div>
            <div class="footer-section">
                <h3>Services</h3>
                <ul>
                    <li>Channel Doctor</li>
                    <li><a href="../Find my meds/fndmymeds(html).php">Find My Meds</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Contact US</h3>
                <p>247,New Kandy Road,Waliwita,Malabe,sriLanka</p>
                <p>Email: Medicalcare@gmail.om</p>
                <p>Phone: 0112896358</p><br>
                <div class="social-icons">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-whatsapp'></i></a>
                    <a href="#"><i class='bx bxl-google-plus'></i></a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="footer-bottom">
        <p>&copy;Copyright 2023 © SLIIT Y1S2 MLB_WE_01.01_08. | All rights reserved</p>
    </div>
</footer>
<!-- FOOTER -->
    </body>
</html>