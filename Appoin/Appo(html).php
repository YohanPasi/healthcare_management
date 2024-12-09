<?php

    include "appo(php).php"

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", intial-scale="1", shrink-to-fit="no">

        <link rel="stylesheet" href="Appo.css">
        <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> -->
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <script src="scriptapoo.js"></script>

        <script>
            alert("Welcome to the Appointment page!");
        </script>

        <title>Appointment Form</title>
    </head>
    <body>
        <!--header-->
    <header>
        <a href="#" class="logo" align="left"> <img src="medicare.png"> </a>

        <ul class="navlist">
            <li><a href="#">Home</a></li>
            <li><a href="#">AboutUs </a></li>
            <li><a href="../Our team/ourteam(html).php">OurTeam</a></li>
            <li><a href="#">ContactUs</a></li>
            <li><a href="#Appointment" class="active">Appointment</a> </li>
        </ul>
        <div class="nav-icons">
            <a href="#">Login</a>
            <div class="bx bx-menu-id" id="menu-icon"></div>
        </div>
        <br>
        </header>
        
        <div class="container">
            <header2>Make an Appointment</header2>

            <form action="appo(php).php" method="post">
                <div class="firstform">
                    <div class="personal_details">
                        <span class="title">Personal Details</span>
                       
                        <div class="field1">
                           
                            <div class="form-details">
                                <label for="name">Name :</label><br>
                                <input type="text" id="name" name="name" required>
                            </div>

                            <div class="form-details">
                                <label for="age">Age :</label><br>
                                <input type="number" id="age" name="age" min="0" max="150" required>
                            </div>

                            <div class="form-details">
                                <label for="gender">Gender :</label><br>
                                <select id="gender" name="gender" class="dropdown" required>
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                               
                            </div>

                            <div class="form-details">
                                <label for="nic">NIC Number :</label><br>
                                <input type="text" id="nic" name="nic">
                            </div>

                            <div class="form-details">
                                <label for="phone">Phone Number :</label><br>
                                <input type="tel" id="phone" name="phone" required>
                            </div>

                            <div class="form-details">
                                <label for="address">Address :</label><br>
                                <textarea id="textarea" name="address" rows="4" required></textarea>
                            </div>

                            <div class="form-details">
                                <label for="email">E-mail :</label><br>
                                 <input type="email" id="email" name="email" placeholder="Enter Your email address!" required>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="secondform">
                    <div class="Appointment_Details">
                        <span class="title">Appointment Details</span>
                        <div class="field2">
                            <div class="form-details">
                                <label for="specialization">Specialization :</label>
                                <select id="specialization" name="specialization" class="dropdown" required>
                                    <option value="">Select Specialization</option>
                                    <option value="Psychiatrist">Psychiatrist</option>
                                    <option value="nephrologist">Nephrologist</option>
                                    <option value="oncologist">Oncologist</option>
                                    <option value="radiologist">Radiologist</option>
                                    <option value="surgeon">Surgeon</option>
                                    <option value="neurologist">Neurologist</option>
                                </select>
                            </div>

                        <div class="form-details">
                            <label for="doctor">Doctor :</label><br>
                            <input type="text" id="doctor" name="doctor" required>
                        </div>

                        <div class="form-details">
                            <label for="hospital">Hospital :</label><br>
                            <input type="text" id="hospital" name="hospital" required>
                        </div>
                
                        <div class="form-details">
                            <label for="date">Date :</label><br>
                            <input type="date" id="date" name="date" required>
                        </div>
                
                        <div class="form-details">
                            <label for="time">Preferred Time :</label><br>
                            <input type="time" id="time" name="time" required>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="buttons">
                    <button type="submit">
                        <span class="btnText">Pay</span>
                    </button>
                </div>

            </form>
        </div>
   <!--footer-->
   <footer>
    <div class="container2">
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
                    <li><a href="../Find my meds/fndmymeds(html).php"> Find My Meds</a></li>

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