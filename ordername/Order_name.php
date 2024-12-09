<?php
include "dbconnect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $medicine_code = isset($_POST['Medicine_name']) ? $_POST['Medicine_name'] : '';
    $patient_name = isset($_POST['Name']) ? $_POST['Name'] : '';
    $Quantity = isset($_POST['Quantity']) ? $_POST['Quantity'] : '';
    $phone_no = isset($_POST['Phone_number']) ? $_POST['Phone_number'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';


    $sql = "INSERT INTO prescription_by_name (medicine_code, patient_name, Quantity, phone_no, address, email)
            VALUES ('$medicine_code', '$patient_name', '$Quantity', '$phone_no', '$address', '$email')";

    if (mysqli_query($conn, $sql)) {
        header("Location: Byname.php?msg=New record created successfully");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>