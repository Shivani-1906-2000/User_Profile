<?php
include ("./adminscripts/admin_scripts.php");
?>
   
   
   
   <div class="container">
    <div class="row" style="text-align:center;">
        <h3>CRUD APPLICATION USER LOGIN</h3>
    </div>
    <div class="row sub_msg">
        <p>This is a system that allows user to update,delete,create information</p>
    </div>
    <div class="row">
        <div class="row sign_up">
            <h3>Welcome Admin, Please Log In!</h3>
        </div>
        <form method="POST" class="form-horizontal" id="form_test">
           <div class="row form-group input_group">
               <label for="" class="col-sm-2">Email:</label>
               <div class="col-sm-10">
                   <input type="text" name="admin_email" class="form-control" id="email_login"> <span id="error_email"></span>
               </div>
           </div>
           <div class="row form-group input_group">
               <label for="" class="col-sm-2">Password:</label>
               <div class="col-sm-10">
                   <input type="password" name="admin_password" class="form-control" id="password_login"> <span id="error_password"></span>
               </div>
           </div>
           <div class="row form-group input_group" style="margin:0px 40px 20px 40px; padding-left:20%;">
               <div class="col-xs-10">
                   <input type="submit" name="admin_btn" class="form-control" id="admin_btn" value="login">
               </div>
           </div>
        </form>
    </div>
</div>