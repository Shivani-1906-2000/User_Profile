<?php
include("../config/db.php");
global $conn;
?>


<?php
if(isset($_POST['forgot_pass']))
{
    $email=$_POST['email_login'];
    $email=mysqli_real_escape_string($conn,$email);
    $query="Select * from signup where email='{$email}'";
    $sqli_query=mysqli_query($conn,$query);
    $user_row=mysqli_num_rows($sqli_query);
    
    if(!empty($email))
    {
        if($user_row<=0)
        {
            $error1= "<div class='alert alert-danger email_alert'>
                                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>
                                User does not exists</div>";
        }
        
        else
        {
            while($row=mysqli_fetch_array($sqli_query))
            {
                $user_email=$row['email'];
                $user_key=$row['activation_key'];
            }
            
            $msg="Please Follow this link to reset your password
            <a href='http://localhost/CRUD_APP/user/reset_password.php?key=".$user_key."'>Reset your password </a>";
            
            
            
            $subject="Reset password";
                    $headers="From: shivani.a1906@gmail.com";
                    
                    $result=mail($email,$subject,$msg,$headers);
            
             if(!$result)
                    {
                        $fail=" <div class='alert alert-danger' style='margin-top:10px;'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>Mail has not been send</div>";
                    }
                    else
                    {
                       $fail=" <div class='alert alert-danger' style='margin-top:10px;'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>Mail has been sent now you can chnage your password</div>"; 
                    }
        }
    }
}
?>