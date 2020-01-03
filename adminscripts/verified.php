<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD APPLICATION - INDEX PAGE</title>
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="../admin/css/admin.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar navbar-inverse" style="margin:0px">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand crud" href="#">CRUD SYSTEM</a>
    </div>
</div>
</nav>

<div class="container-fluid">
  <div class="row content">
        
        <div class="col-md-3 admin-links">
          <ul>
              <li> <a href="dashboard.php"><i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</a> </li>
              <li> <a href="../adminscripts/view.php"><i class="fa fa-user" aria-hidden="true"></i>View all Users</a> </li>
              <li> <a href="../adminscripts/verified.php">Verified Users</a> </li>
              <li> <a href="../adminscripts/no_verified.php">Not Verified Users</a> </li>
          </ul>
        </div>
        
        <div class="col-md-9">

        <div class="row table-responsive">
            <div class="col-md-12">
                <table class="table table-bordered table-hover">
                    <thead>
                       <tr>
                        <th>Id</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Last Updated</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include("../config/db.php"); ?>
                        <?php 
                        $query="SELECT * FROM profile";
                        $verifiedusers=mysqli_query($conn,$query);
                        while($row=mysqli_fetch_array($verifiedusers))
                        {
                            $id=$row['id'];
                            $firstname=$row['firstname'];
                            $lastname=$row['lastname'];
                            $email=$row['email'];
                            $gender=$row['gender'];
                            $intro=$row['intro'];
                            $image=$row['image'];
                            $date_time=$row['date_time'];
                            echo "<tr>";
                            echo "<td> {$id} </td>";
                            echo "<td> {$firstname} </td>";
                            echo "<td> {$lastname} </td>";
                            echo "<td> {$email} </td>";
                            echo "<td> {$gender} </td>";
                            echo "<td> {$intro} </td>";
                            echo "<td> <img width='50px' src='../IMAGES/{$image}'> </td>";
                            echo "<td> {$date_time} </td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</div>   
    </div>

<?php include("../user/footer.php"); ?>
</body>
</html>