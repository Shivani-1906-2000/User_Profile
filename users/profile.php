<?php
include("../SCRIPT/view_profile.php");
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
                    <li> <a href="../users/profile.php?firstname=<?php echo $_SESSION['firstname'] ?>">View Profile</a> </li>
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
    <h4 class="text-center" style="font-size:30px;">View your Profile!</h4>
</div>


<div class="container row_data">
    <br>
    <p class="text-center" style="font-size:30px; font-style:italic;"> <?php echo $user_quote; ?> </p>
    
    <div class="row" style="border:1px solid #e7e7e7;">
        <div class="col-sm-4" style="margin-top:20px">
            <div class="form-group">
                <?php profile_image(); ?>
            </div>
        </div>
        
        <div class="col-sm-8" style="margin-top:20px;">
            <div class="row form-group">
                <?php profile_data(); ?> 
            </div>
        </div>
    </div>
</div>

<?php include("../user/footer.php"); ?>

</body>
</html>