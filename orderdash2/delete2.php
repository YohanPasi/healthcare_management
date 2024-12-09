<?php

    include "configorderdash2.php";

    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql="delete from pres_by_image WHERE id=$id";
        $result=mysqli_query($conn,$sql);

        if($result){
            // echo "Deleted Successfully";
            header('location:orderdash2(html).php');
        }else{
            echo "Error to delete record:".$conn->error;
        }
    }else{
        echo "ID Parameters not provided";
    }

    $conn->close();
?>
