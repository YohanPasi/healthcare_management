<?php 

$host="localhost";
$username="root";
$password="";
$dbname ="doctor";

$conn = mysqli_connect($host,$username,$password,$dbname);

if (!$conn) {
    echo "Connection failes!....";
}
//echo "Connect Successfully!" ;

?>