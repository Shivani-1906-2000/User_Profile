<?php
include ("./SCRIPT/insert.php");
?>
   <div class="container">
    <div class="row" style="text-align:center;">
        <h3>USER SIGN UP</h3>
    </div>
    <div class="row sub_msg">
        <p>This is a system that allows user to update,delete,create information</p>
    </div>
    <div class="row">
        <div class="row sign_up">
            <h3>Welcome, Please Sign Up!</h3>
        </div>
        <form method="POST" class="form-horizontal" id="form_test">
           <div class="row form-group input_group">
              <?php echo $error1,$error2 ?>
               <label for="" class="col-sm-2">Email:</label>
               <div class="col-sm-10">
                   <input type="text" name="email" class="form-control" id="email"> <span id="error_email"></span>
               </div>
           </div>
           <div class="row form-group input_group">
              <?php echo $error3 ?>
               <label for="" class="col-sm-2">First Name:</label>
               <div class="col-sm-10">
                   <input type="text" name="firstname" class="form-control" id="firstname"> <span id="error_firstname"></span>
               </div>
           </div>
           <div class="row form-group input_group">
              <?php echo $error4 ?>
               <label for="" class="col-sm-2">Last Name:</label>
               <div class="col-sm-10">
                   <input type="text" name="lastname" class="form-control" id="lastname"> <span id="error_lastname"></span>
               </div>
           </div>
           <div class="row form-group input_group">
              <?php echo $error5 ?>
               <label for="" class="col-sm-2">Password:</label>
               <div class="col-sm-10">
                   <input type="password" name="password" class="form-control" id="password"> <span id="error_password"></span>
               </div>
           </div>
           <div class="row form-group input_group" style="margin:0px 40px 20px 40px; padding-left:30%;">
               <div class="col-xs-10">
                   <input type="submit" name="submit" class="form-control" id="submit">
               </div>
           </div>
        </form>
    </div>
</div>