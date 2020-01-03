<?php 
session_start();
?>


<?php
include("../SCRIPT/user_profile.php");
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
     <div>
         <button class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
         </button>
     </div>
      <a class="navbar-brand crud" href="#">Crud System</a>
    </div>
    <div class="collapse navbar-collapse" id="bsexamplenavcollapse1">
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expended="false"> <?php $_SESSION['firstname']; ?> <span class="caret"></span> </a>
                <ul class="dropdown-menu">
                    <li> <a href="../users/profile.php?firstname=<?php echo $_SESSION['firstname']; ?>">View Profile</a> </li>
                    <li> <a href="../users/edit.php">Edit Profile</a> </li>
                    <li> <a href="../users/complete_profile.php">Complete Profile</a> </li>
                    <li role="separator" class="divider"></li>
                    <li> <a href="../SCRIPT/logout.php">Log Out</a> </li>
                </ul>
            </li>
        </ul>
    </div>
  </div>
</nav>
<!--navigation bar ends here-->


<div class="jumbotron jumbo">
    <h3 class="text-center" style="font-size:70px;font-weight:600;">
        Welcome! <?php echo $_SESSION['firstname']; ?>
    </h3>
    <h4 class="text-center" style="font-size:30px;">Complete Your Profile</h4>
</div>


<div class="container">
    <h1 class="text-center">Fill your details to complete your profile!</h1>
    <div class="row" style="border:1px solid #e7e7e7;">
       <div class="col-md-12">
          <?php echo $msg; ?>
           <form action="" method="POST" enctype="multipart/form-data">
              <div class="form-group">
               <label for="" class="control-label" style="margin-right:60px;">Profile Image</label>
               <img src="https://via.placeholder.com/150x150" alt="">
               <input type="file" class="form-control" name="image">
               </div>
               
               <div class="row">
                   <div class="col-sm-6">
                       <label for="" class="control-label">FirstName</label>
                       <input type="text" class="form-control" name="firstname" value="<?php echo $_SESSION['firstname']; ?>">
                   </div>
                   <div class="col-sm-6">
                       <label for="" class="control-label">LastName</label>
                       <input type="text" class="form-control" name="lastname" value="<?php echo $_SESSION['lastname']; ?>">
                   </div>
               </div>
               
               <div class="row">
                   <div class="col-sm-6">
                       <label for="" class="control-label">Email</label>
                       <input type="email" class="form-control" name="email" value="<?php echo $_SESSION['email']; ?>">
                   </div>
                   <div class="col-sm-6 form-group">
                       <label for="" class="control-label">Gender</label>
                       <select name="gender" id="gender" class="form-control">
                           <option value="select_gender">Select Gender</option>
                           <option value="male">Male</option>
                           <option value="female">Female</option>
                       </select>
                   </div>
               </div>
               
               <br>
               <div class="form-group">
                   <label for="" class="control-label">Short Quote</label>
                   <textarea name="quote" class="form-control" id="" cols="30" rows="10"></textarea>
               </div>
               <br>
               
               <div class="form-group">
                   <label for="" class="control-label">About Me</label>
                   <textarea name="intro" class="form-control" id="" cols="30" rows="10"></textarea>
               </div>
               
               <br>
               
               <div class="form-group">
                   <input type="submit" name="submit" class="form-control btn btn-primary" value="submit">
               </div>
           </form> 
       </div>
        
    </div>
</div>



<!--
<div class="container">
    <div class="row">
        <div class="col-md-3">
            
        </div>
        <div class="col-md-9">
            
        </div>
    </div>
</div>
-->

</body>
</html>