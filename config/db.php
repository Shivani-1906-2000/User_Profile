<?php 
global $conn;
?>


<?php


ob_start();
if(!isset($_SESSION))
{
    session_start();
}
$conn=mysqli_connect("localhost","root","","crud_app");
if($conn)
{
//     echo "Database connected";
}
    
else{
     echo "not connected";
}
?>