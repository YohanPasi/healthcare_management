<?php
include "dbconnect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patient_name = isset($_POST['name']) ? $_POST['name'] : '';
    $age = isset($_POST['age']) ? $_POST['age'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $nic_no = isset($_POST['nic']) ? $_POST['nic'] : '';
    $phone_no = isset($_POST['phone']) ? $_POST['phone'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $specialization = isset($_POST['specialization']) ? $_POST['specialization'] : '';
    $doctor_name = isset($_POST['doctor']) ? $_POST['doctor'] : '';
    $hospital_name = isset($_POST['hospital']) ? $_POST['hospital'] : '';
    $date = isset($_POST['date']) ? $_POST['date'] : '';
    $time = isset($_POST['time']) ? $_POST['time'] : '';

    $sql = "INSERT INTO `appointment`(`ID`, `patient_name`, `age`, `gender`, `nic_no`, `phone_no`, `address`, `email`, `specialization`, `doctor_name`, `hospital_name`, `date`, `time`) 
    VALUES (NULL ,'$patient_name','$age',' $gender',' $nic_no',' $phone_no','$address','$email',' $specialization','$doctor_name','$hospital_name','$date','$time')";

    if (mysqli_query($conn, $sql)) {
        header("Location: Appo(html).php?msg=New record created successfully");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>