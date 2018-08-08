<?php
session_start();
include('dbconnect.php');
$loggedUser= $_SESSION['loggedUser'];
$useId=$loggedUser['Id'];
$response = array();
$id=$_SESSION['trip_id'];
//echo $id;
$query = "SELECT expense.E_trip_id, expense.E_cat_id, category.C_id, category.C_name, SUM(expense.E_amt) AS TOTAL FROM expense INNER JOIN category ON expense.E_cat_id=category.C_id and E_trip_id='$id' GROUP BY expense.E_cat_id";
$result = mysqli_query($conn, $query);
//echo $query;
//exit();

$query1 = "SELECT sum(E_amt) as TOTAL,E_cat_id FROM expense where E_trip_id='$id' and E_user_id='$useId' GROUP BY E_cat_id";
$result1 = mysqli_query($conn, $query1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
 
function drawChart() {
 
    var data = google.visualization.arrayToDataTable([
      ['TOTAL', 'C_id'],
      <?php
      while($row=mysqli_fetch_array($result))
	  {
          
            echo "['".$row['C_name']."', ".$row['TOTAL']."],";
          
      }
      ?>
    ]);
    
    var options = {
        title: 'Overall Expense Category wise',
        width: 600,
        height: 300,
    };
    
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    
    chart.draw(data, options);
}
</script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
 
function drawChart() {
 
    var data = google.visualization.arrayToDataTable([
      ['TOTAL', 'C_id'],
      <?php
      while($row=mysqli_fetch_array($result1))
	  {
          
            echo "['".$row['TOTAL']."', ".$row['E_cat_id']."],";
          
      }
      ?>
    ]);
    
    var options = {
        title: 'Overall Expense of Loggeduser Category wise',
        width: 600,
        height: 300,
    };
    
    var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
    
    chart.draw(data, options);
}
</script>

</head>
<body>
    <!-- Display the pie chart -->
    <div id="piechart">
             this is my first pie chart
    </div>
    <div id="piechart2">
             this is the second one...
    </div>

</body>
</html>
