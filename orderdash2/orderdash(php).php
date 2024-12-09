<?php
    include "configorderdash2.php";

    $sql = "SELECT `ID`, `patient_name`, `phone_no`, `address`, `email`, `img_dir` FROM `pres_by_image`";
    $result = $conn->query($sql);

    if($result-> num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<tr><td>". $row['ID']."</td><td>".$row["patient_name"]."</td><td>".$row["phone_no"]."</td><td>".$row["address"]."</td><td>".$row["email"]."</td><td>".$row["img_dir"]."</td><td>";
        }
        echo "</table>";
    }
    else{
        echo "0 result";
    }

    $conn->close();
    ?>
    