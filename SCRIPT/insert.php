
<!--//require_once './lib/swift_required.php';-->



<?php



include("./config/db.php");
global $conn;




$f_name=$l_name=$password=$email="";
$error1=$error2=$error3=$error4=$error5=$error6="";
if(isset($_POST['submit']))
{
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $email1="Select * from signup where email='{$email}'";
    $sqli_query=mysqli_query($conn,$email1);
    $count=mysqli_num_rows($sqli_query);
    if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password))
    {
        if($count>0)
        {
            $error1=" <div class='alert alert-danger email_alert' style='margin-top:10px;'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>user already exists</div>";
        }
        else{
            $f_name=mysqli_real_escape_string($conn,$firstname);
            $l_name=mysqli_real_escape_string($conn,$lastname);
            $email=mysqli_real_escape_string($conn,$email);
            $password=mysqli_real_escape_string($conn,$password);
            
            if(!FILTER_VAR($email,FILTER_VALIDATE_EMAIL))
            {
                $error2=" <div class='alert alert-danger' style='margin-top:10px;'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>email not correct</div>";
            }
            
            if(!preg_match("/^[a-zA-Z ]*$/",$f_name))
            {
               $error3=" <div class='alert alert-danger' style='margin-top:10px;'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>only letters are allowed for firstname</div>"; 
            }
            
            if(!preg_match("/^[a-zA-Z ]*$/",$l_name))
            {
               $error4=" <div class='alert alert-danger' style='margin-top:10px;'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>only letters are allowed for lastname</div>"; 
            }
            
            if(!preg_match("/^\S*(?=\S{7,15})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/",$password))
            {
               $error5=" <div class='alert alert-danger' style='margin-top:10px;'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>must contain 7-15 characters one lowercase one uppercase and one digit</div>"; 
            }
            
            if(preg_match("/^[a-zA-Z ]*$/",$f_name) && FILTER_VAR($email,FILTER_VALIDATE_EMAIL) && preg_match("/^[a-zA-Z ]*$/",$l_name) && preg_match("/^\S*(?=\S{7,15})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/",$password))
            {
                $user_activation_key=md5(rand().time());
                $sql="INSERT INTO signup (email,firstname,lastname,password,activation_key,is_active,date_time) VALUES ('$email','$firstname','$lastname','$password','$user_activation_key','0',now())";
                
                    $query=mysqli_query($conn,$sql);
                
                if(!$query)
                {
                    die("query failed".mysqli_error($conn));
                }
                
                
                
                
                if($query)
                {
                    
                    $msg="please activate your account using this link <a href='http://localhost/CRUD_APP/user/user_activation.php?key=".$user_activation_key."'> Verify Your Email</a>";
                    
                    
                    
                    
                    
                    
                    
                    // Create the Transport that call setUsername() and setPassword()
//                        $transport = new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl');
//                        $transport->setUsername('shivani.a1906@gmail.com')->setPassword('shivani@2808');
//
//                        $mailer = new Swift_Mailer($transport);
//                        // Create the message
//                        $message = new Swift_Message('Test');
//                        // Give the message a subject
//                        $message->setSubject('Verify Your Email Address')
//                        // Set the From address with an associative array
//                            ->setFrom(array('shivani.a1906@gmail.com' => 'Shivani Agarwal'))
//                        // Set the To addresses with an associative array
//                        ->setTo(array($email))
//                        // Give it a body
//                        ->setBody('Body Message')
//                        // And optionally an alternative body
//                        ->addPart($msg, 'text/html');
//                        // Optionally add any attachments
//                        $result = $mailer->send($message);
                    
                    
                    $subject="Verify your email";
                    $headers="From: shivani.a1906@gmail.com";
                    
                    $result=mail($email,$subject,$msg,$headers);
                    
                    
                    
                    
                    
                    
                    if(!$result)
                    {
                        $fail=" <div class='alert alert-danger' style='margin-top:10px;'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>Male has not been send</div>";
                    }
                    else
                    {
                       $fail=" <div class='alert alert-danger' style='margin-top:10px;'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>Male has been send</div>"; 
                    }
                        
                }
            
            }
        }
    }
    
    
    
    
    else
    {
        if(empty($firstname))
        {
            $error3=" <div class='alert alert-danger' style='margin-top:10px;'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>firstname cannot be empty</div>"; 
        }
        
        if(empty($lastname))
        {
            $error4=" <div class='alert alert-danger' style='margin-top:10px;'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>lastname cannot be empty</div>"; 
        }
        
        if(empty($email))
        {
            $error2=" <div class='alert alert-danger' style='margin-top:10px;'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>email cannot be empty</div>"; 
        }
        
        if(empty($password))
        {
            $error5=" <div class='alert alert-danger' style='margin-top:10px;'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>password cannot be empty</div>"; 
        }
    }
    
    
}
?>