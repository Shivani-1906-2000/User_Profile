<?php include("../config/db.php"); ?> 
<?php 
global $conn;
function count_values($tbl)
{
    global $conn;
   $query=mysqli_query($conn,"SELECT * FROM $tbl");
    $count=mysqli_num_rows($query);
    echo "<div> {$count} </div>"; 
}
function not_verified()
{
    global $conn;
   $query=mysqli_query($conn,"SELECT * FROM signup WHERE is_active='0'");
    $count=mysqli_num_rows($query);
    echo "<div> {$count} </div>"; 
}

?>
       

       
       
<div class="row content">
        
        <div class="col-md-3 admin-links">
          <ul>
              <li> <a href="dashboard.php"><i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</a> </li>
              <li> <a href="../adminscripts/view.php"><i class="fa fa-user" aria-hidden="true"></i>View all Users</a> </li>
              <li> <a href="../adminscripts/verified.php"><i class="fa fa-check" aria-hidden="true"></i>Verified Users</a> </li>
              <li> <a href="../adminscripts/no_verified.php"><i class="fa fa-times" aria-hidden="true"></i>Not Verified Users</a> </li>
          </ul>
        </div>
        
        <div class="col-md-9">

        <div class="row rowdiv">
            <div class="col-lg-4 col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                               <i class="fa fa-user fa-5x"></i> 
                            </div>
                            <div class="col-xs-9 text-right">
                               <?php count_values("signup"); ?>
                                <div>Users</div>
                            </div>
                        </div>
                    </div>
                 <a href="../adminscripts/view.php">   <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></span>
                        <div class="clearfix"></div>
                    </div> </a>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-check fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                               <?php count_values("profile"); ?>
                                <div>Verified Users</div>
                            </div>
                        </div>
                    </div>
                 <a href="../adminscripts/verified.php">   <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></span>
                        <div class="clearfix"></div>
                    </div> </a>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-remove fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                               <?php not_verified(); ?>
                                <div>Not Verified Users</div>
                            </div>
                        </div>
                    </div>
                 <a href="../adminscripts/no_verified.php">   <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></span>
                        <div class="clearfix"></div>
                    </div> </a>
                </div>
            </div>
        </div>
        
        <?php include("../adminscripts/admin_chart.php"); ?>
        <div id="columnchart_material" style="width:800px; height:500px;">
        </div>
    </div>
    
</div>