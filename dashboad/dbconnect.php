<?php 

$host="localhost";
$username="root";
$password="";
$dbname ="phamacist";

$conn = mysqli_connect($host,$username,$password,$dbname);

if (!$conn) {
    echo "Connection failes!....";
}
//echo "Connect Successfully!" ;

?>