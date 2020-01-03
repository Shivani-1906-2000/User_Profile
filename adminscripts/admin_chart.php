<?php 
global $conn; 
$user_query=mysqli_query($conn,"SELECT * FROM signup");
$user_count=mysqli_num_rows($user_query);

$verified_query=mysqli_query($conn,"SELECT * FROM profile");
$verified_count=mysqli_num_rows($verified_query);

$notverified_query=mysqli_query($conn,"SELECT * FROM signup  WHERE is_active='0'");
$notverified_count=mysqli_num_rows($notverified_query);
?>


<script type="text/javascript">
google.charts.load("current",{
                   'packages':['bar']
                   });
google.charts.setOnLoadCallback(drawChart);
    
function drawChart(){
       var data=google.visualization.arrayToDataTable([['Data','Count'],<?php 
    $text=["total_users", "verified_users", "notverfied_users"];
    $numbers=[$user_count,$verified_count,$notverified_count];
                                                       
    for ($i=0; $i<count($numbers); $i++)
    {
        echo "['{$text[$i]}'".","."{$numbers[$i]}],";
    }?>]);
       var options={chart:{title:'Graphical Representation of Crud Application'}};
        var chart=new google.visualization.BarChart(document.getElementById("columnchart_material"));
        chart.draw(data,options)
    }
</script>