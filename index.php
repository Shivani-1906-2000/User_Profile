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
<link rel="stylesheet" type="text/css" href="CSS/style.css">


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
    <ul class="nav nav-tabs">
       <li> <a href="#index" data-toggle="tab">Index</a> </li>
       <li> <a href="#login" data-toggle="tab">Login</a> </li>
       <li> <a href="#signup" data-toggle="tab">Sign Up</a> </li>
       <li> <a href="#admin" data-toggle="tab">Admin</a> </li> 
    </ul>
    
    <div class="tab-content">
        <div id="index" class="tab-pane fade-in">
            <p>Index</p>
        </div>
    </div>
    
    <div class="tab-content">
        <div id="login" class="tab-pane fade-in">
            <?php
            include ("./user/login_form.php");
            ?>
        </div>
    </div>
    
    <div class="tab-content">
        <div id="signup" class="tab-pane fade-in">
            <?php
            include ("./user/signup.php");
            ?>
        </div>
    </div>
    
    <div class="tab-content">
        <div id="admin" class="tab-pane fade-in">
            <p>Admin</p>
            <?php
            include ("./admin/admin_login.php");
            ?>
        </div>
    </div>
</div>




<!--linking jquery file-->
<!--
<script src="JS/reg.js"></script>
<script src="JS/login.js"></script>
-->
</body>
</html>