<?php
    include "config1(order).php";

    $sql = "SELECT `ID`, `medicine_code`, `patient_name`, `Quantity`, `phone_no`, `address`, `email` FROM `prescription_by_name`";
    $result = $conn->query($sql);

    if($result-> num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<tr><td>". $row['ID']."</td><td>".$row["medicine_code"]."</td><td>".$row["patient_name"]."</td><td>".$row["Quantity"]."</td><td>".$row["phone_no"]."</td><td>".$row["address"]."</td><td>".$row["email"]."</td></tr>";
        }
        echo "</table>";
    }
    else{
        echo "0 result";
    }

    $conn->close();
    ?>
    