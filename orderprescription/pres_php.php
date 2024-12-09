<?php
    include "dbconnect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $patient_name = isset($_POST['Name']) ? $_POST['Name'] : '';
        $phone_no = isset($_POST['Phone_number']) ? $_POST['Phone_number'] : '';
        $address = isset($_POST['address']) ? $_POST['address'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        
        $img_dir = isset($_FILES['img_dir']['tmp_name']) ? $_FILES['file-input']['tmp_name'] : '';

        // Move the uploaded file to a permanent location
        $targetDir = "uploaded/"; // Specify the directory where you want to store the uploaded files
        $targetFile = $targetDir . basename($_FILES["img_dir"]["name"]);
        move_uploaded_file($_FILES["img_dir"]["tmp_name"], $targetFile);

        $sql = "INSERT INTO pres_by_image (patient_name, phone_no, address, email, img_dir)
                VALUES ('$patient_name', '$phone_no', '$address', '$email', '$targetFile')";

        if (mysqli_query($conn, $sql)) {
            header("Location: prescription(html).php?msg=New record created successfully");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
?>
