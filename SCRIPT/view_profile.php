


<?php
include ("../config/db.php");
?>


<?php
global $conn,$count;
global $firstname,$lastname,$email,$gender,$intro,$user_image,$user_quote;
$query_select="SELECT * FROM profile WHERE user_id={$_SESSION['id']}";
$query=mysqli_query($conn,$query_select);
$count=mysqli_num_rows($query);
while($row=mysqli_fetch_array($query))
{
    $id=$row['user_id'];
    $user_email=$row['email'];
    $user_firstname=$row['firstname'];
    $user_lastname=$row['lastname'];
    $user_gender=$row['gender'];
    $user_intro=$row['intro'];
    $user_image=$row['image'];
    $user_quote=$row['quote'];
}


function profile_image()
{global $count,$user_image;
    if($count<=0)
    {
        echo "<img src='https://placeholder.com/250*250' style='margin-left:40px;>'";
    }
    else{
        echo "
        <div class='thumbnail' style='border:none; padding-top:1px;'>
        <a href='#'> 
        <img src='../images/$user_image' style='margin-left:40px;'>
        </a>
        </div>";
    }
}

function profile_data()
{
    global $count,$user_firstname,$user_lastname,$user_email,$user_intro,$user_gender;
    if ($count<=0)
    {
        echo "<div class=alert alert-info email_alert text-center' style='margin:0px 10px 20px 0px;'>
        Firstname has not been updated </div>";
        echo "<div class=alert alert-info email_alert text-center' style='margin:0px 10px 20px 0px;'>
        Lastname has not been updated </div>";
        echo "<div class=alert alert-info email_alert text-center' style='margin:0px 10px 20px 0px;'>
        Email has not been updated </div>";
        echo "<div class=alert alert-info email_alert text-center' style='margin:0px 10px 20px 0px;'>
        Gender has not been updated </div>";
        echo "<div class=alert alert-info email_alert text-center' style='margin:0px 10px 20px 0px;'>
        Description has not been updated </div>";
    }
    else{
        echo "<label class='control-label col-sm-3'>Firstname:</label>
        <div class='col-sm-9'>$user_firstname</div><br><br>";
        echo "<label class='control-label col-sm-3'>Lastname:</label>
        <div class='col-sm-9'>$user_lastname</div><br><br>";
        echo "<label class='control-label col-sm-3'>Email:</label>
        <div class='col-sm-9'>$user_email</div><br><br>";
        echo "<label class='control-label col-sm-3'>Gender:</label>
        <div class='col-sm-9'>$user_gender</div><br><br>";
        echo "<label class='control-label col-sm-3'>About Me:</label>
        <div class='col-sm-9'>$user_intro</div><br><br>";
        
    }
}
?>