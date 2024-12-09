<?php

    include "config1(order).php";

    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql="delete from prescription_by_name WHERE id=$id";
        $result=mysqli_query($conn,$sql);

        if($result){
            // echo "Deleted Successfully";
            header('location:orderdash1(html).php');
        }else{
            echo "Error to delete record:".$conn->error;
        }
    }else{
        echo "ID Parameters not provided";
    }

    $conn->close();
?>
