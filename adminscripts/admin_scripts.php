<?php include("./config/db.php"); ?>


<?php 
if (isset($_POST['admin_btn']))
{
    $admin_email=$_POST['admin_email'];
    $admin_password=$_POST['admin_password'];
    $email=mysqli_real_escape_string($conn,$admin_email);
    $password=mysqli_real_escape_string($conn,$admin_password);
    $select_query="SELECT * FROM admin_login WHERE email='{$email}'";
    $query=mysqli_query($conn,$select_query);
    $row=mysqli_fetch_array($query);
    $email_admin=$row['email'];
    $password_admin=$row['password'];
    if (!empty($admin_email) && !empty($admin_password))
    {
        if($email===$email_admin && $password===$password_admin)
        {
            header("Location:./admin/dashboard.php");
            $_SESSION['email']=$email_admin;
        }
        else
        {
            $error1 = "<div class='alert alert-danger email_alert'>
                                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>
                                Admin Login credentials are invalid</div>";
        }
    }
    else
    {
      $error1 = "<div class='alert alert-danger email_alert'>
                                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>
                                Email and Password cannot be empty</div>";  
    }
}
?>