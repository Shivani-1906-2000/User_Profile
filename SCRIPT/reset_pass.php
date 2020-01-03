<?php include("../config/db.php"); ?>


<?php
    global $conn;
    global $error, $update_good, $fail_update, $empty_update, $confirm_error;

    if(isset($_POST['reset'])){
        if(!empty($_GET['key'])){
            $key = $_GET['key'];
        }else{
            $key = '';
        }
        
        if($key != ''){
            $pass_word = $_POST['password_reset'];
            $cpass_word = $_POST['c_password_reset'];
            
            $password = mysqli_real_escape_string($conn, $pass_word);
//            $cpass = mysqli_real_escape_string($connection, $cpass_word);
            
//            $salt_query = mysqli_query($connection, "SELECT randSaltPass FROM signup");
//            $row = mysqli_fetch_array($salt_query);
//            $salt = $row['randSaltPass'];
//            
//            $password = crypt($pass, $salt);
            
            $sql = mysqli_query($conn, "SELECT * FROM signup WHERE activation_key = '$key' ");
            $count = mysqli_num_rows($sql);
            
            if(!empty($pass_word)){
                if($count == 1){
                    
                    if(!preg_match('/^\S*(?=\S{7,15})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/', $pass_word)){
                        $error = "<div class='alert alert-danger email_alert'>
                                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>
                                Password Must Be Between 7 and 15 Characters and Must Contain At Least One Lowercase Letter One Uppercase Letter and One Digit.</div>";
                    }else{
                        
                        if($pass_word !== $cpass_word){
                            $confirm_error = "<div class='alert alert-danger email_alert'>
                                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>
                                Passwords Do Not Match</div>";
                        }else{
                           $update_sql = "UPDATE signup SET password ='{$password}' WHERE activation_key = '$key' ";
                            $update_query = mysqli_query($conn, $update_sql);

                            if($update_query){
                                $update_good = "<div class='alert alert-success email_alert'>
                                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>
                                    Your Password Reset is Successful.</div>";
                            } 
                            header("location:../index.php");
                        }
                        
                        
                    }
                    
                }else{
                    $fail_update = "<div class='alert alert-danger email_alert'>
                                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>
                                No Data Found</div>";
                }
            }else{
                $empty_update = "<div class='alert alert-danger email_alert'>
                                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>
                                Password Field Cannot be Empty.</div>";
            }
            
        }
    }

?>