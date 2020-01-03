<?php
include ("../SCRIPT/forgot.php")
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crud Application</title>
    
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!--jquery cdn-->
<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!--css-->
<link rel="stylesheet" type="text/css" href="../CSS/style.css">


</head>
<body>
   

   <!--   navigation bar starts here-->
    <nav class="navbar navbar-default" style="background-color:#198ff5;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand crud" href="#">Crud System</a>
    </div>
  </div>
</nav>
<!--navigation bar ends here-->










<div class="container">
    <div class="row" style="text-align:center;">
        <h3>Forget Password?</h3>
    </div>
    <div class="row sub_msg">
        <p>This is a system that allows user to update,delete,create information</p>
    </div>
    <div class="row">
        <div class="row sign_up">
            <h3>Welcome, Please enter your email below!</h3>
        </div>
        <form method="POST" class="form-horizontal" id="form_test">
           <div class="row form-group input_group">
               <label for="" class="col-sm-2">Email:</label>
               <div class="col-sm-10">
                   <input type="text" name="email_login" class="form-control" id="email_login"> <span id="error_email"></span>
               </div>
           </div>
           <div class="row form-group input_group" style="margin:0px 40px 20px 40px; padding-left:20%;">
               <div class="col-xs-10">
                   <input type="submit" name="forgot_pass" class="form-control" id="forgot_pass" value="submit">
               </div>
           </div>
        </form>
    </div>
</div>


    </body>
</html>