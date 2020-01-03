<?php
include("../config/db.php");
global $conn;
global $update_good, $update_fail, $fail;
if(!empty($_GET['key']))
{
    $key=$_GET['key'];

}
else
{
    $key="";
}


if($key!="")
{
    $sql=mysqli_query($conn,"SELECT * FROM signup WHERE activation_key='$key'");
    $count=mysqli_num_rows($sql);
    if($count==1)
    {
        while($row=mysqli_fetch_array($sql))
        {
            $is_active=$row['is_active'];
            if($is_active==0)
            {
                $update_sql="UPDATE signup SET is_active='1' WHERE activation_key='$key'";
                $update_query=mysqli_query($conn,$update_sql);
                if($update_query)
                {
                    $update_good=" <div class='alert alert-info' style='margin-top:10px;'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>email has been verified</div>";
                }
                else
                {
                    $update_fail=" <div class='alert alert-danger' style='margin-top:10px;'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>email has not been verified</div>";
                }
            }
        }
    }
}
else
{
   $fail=" <div class='alert alert-danger' style='margin-top:10px;'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>error occured</div>";
}
?>
