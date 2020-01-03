<?php include("../config/db.php"); ?>
<?php
global $conn;
global $user_firstname,$user_lastname,$user_email,$user_gender,$user_intro,$user_image,$user_quote;
global $error, $count;

$query_select="SELECT * FROM profile WHERE user_id={$_SESSION['id']}";
$query=mysqli_query($conn,$query_select);
$count=mysqli_num_rows($query);
if(!$query)
{
    die("QUERY FAILED" . mysqli_error($conn));
}
while($row=mysqli_fetch_array($query))
{
    $user_id=$row['user_id'];
    $user_email=$row['email'];
    $user_firstname=$row['firstname'];
    $user_lastname=$row['lastname'];
    $user_gender=$row['gender'];
    $user_quote=$row['quote'];
    $user_intro=$row['intro'];
    $user_image=$row['image'];
    $date=$row['date_time'];
}
    
    if(isset($_POST['update']))
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
        
        if(empty($user_image))
        {
            $query=mysqli_query($conn,"SELECT * FROM profile WHERE user_id={$_SESSION['id']}");
            while($row=mysqli_fetch_array($query))
            {
                $user_image=$row['image'];
            }
        }
        
        if($count<=0)
        {
            $error="<div class='alert alert-danger email_alert' style='margin-top:10px;'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>Please complete your profile before you can update</div>";
        }
        else{
            $update="UPDATE profile SET ";
            $update.="firstname='{$user_firstname}',";
            $update.="lastname='{$user_lastname}',";
            $update.="email='{$user_email}',";
            $update.="gender='{$user_gender}',";
            $update.="quote='{$user_quote}',";
            $update.="intro='{$user_intro}',";
            $update.="image='{$user_image}',";
            $update.="date_time=now() ";
            $update.="WHERE user_id={$_SESSION['id']}";
            
            $update_query=mysqli_query($conn,$update);
            if(!$update_query)
{
    die("UPDATE WAS NOT SUCCESSFUL" . mysqli_error($conn));
}
            header ("Location:../users/profile.php?firstname={$user_firstname}");
        }
}
?>