<?php
include("../config/db.php");
global $id,$user_email,$user_firstname,$user_lastname,$user_gender,$user_intro,$user_quote,$user_image,$msg;

$query_select="SELECT * FROM signup WHERE id={$_SESSION['id']}";
$query=mysqli_query($conn,$query_select);

 if(!$query)
 {
     die("query failed".mysqli_error($conn));
 }
     while($row=mysqli_fetch_array($query))
     {
         $id=$row['id'];
         $user_email=$row['email'];
         $user_firstname=$row['firstname'];
         $user_lastname=$row['lastname'];
     }
     if(isset($_POST['submit']))
     {
         
        $user_email= mysqli_real_escape_string($conn,$_POST['email']);
        $user_firstname= mysqli_real_escape_string($conn,$_POST['firstname']);
        $user_lastname= mysqli_real_escape_string($conn,$_POST['lastname']);
        $user_gender= mysqli_real_escape_string($conn,$_POST['gender']);
        $user_intro= mysqli_real_escape_string($conn,$_POST['intro']);
        $user_quote= mysqli_real_escape_string($conn,$_POST['quote']);
        $user_image=$_FILES['image']['name'];
        $user_temp_image=$_FILES['image']['tmp_name'];
        move_uploaded_file($user_temp_image,"../IMAGES/$user_image");
        
        if(!empty($user_firstname) && !empty($user_lastname) && !empty($user_email) && !empty($user_gender) && !empty($user_intro) && !empty($user_quote) && !empty($user_image))
        {
            $query_send="INSERT INTO `profile`(`user_id`, `firstname`, `lastname`, `email`, `gender`, `intro`, `image`, `date_time`, `quote`) VALUES ('$id','$user_firstname','$user_lastname','$user_email','$user_gender','$user_intro','$user_image','now()','$user_quote')";
            $send=mysqli_query($conn,$query_send);
            if(!$send)
            {
               echo "Data was not inserted into database";
            }
        }
         else{
             $msg="<div class='alert alert-danger email_alert'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>
                            Field cannot be empty</div>";
         }
         header ("Location:../users/profile.php?firstname={$user_firstname}");
     }
 
?>