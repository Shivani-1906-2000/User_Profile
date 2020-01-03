<?php require("../config/db.php"); ?>
<?php require("../SCRIPT/activate.php"); ?>


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




    <div class="container panel-body">
       <div class="row text-center">
           <?php echo $update_good; ?>
           <?php echo $update_fail; ?>
           <?php echo $fail; ?>
       </div>
        <div class="row sub_msg text-center">
            <p>Click on the button below to go to the login page</p>

        </div>

       <div class="row signup text-center">
           <div class="row">
               <h3> <a href="../index.php" class="btn btn-primary">Click here to login</a> </h3>
           </div>
       </div>
    </div>


    </body>
</html>
