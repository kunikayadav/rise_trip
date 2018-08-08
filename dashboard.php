<?php
if(!isset($_SESSION)) 
{
    session_start();
}
$loggedUser = isset($_SESSION['loggedUser']) ? $_SESSION['loggedUser'] : array();

?>
<?php
if(!isset($_SESSION['loggedUser'])) 
{
    header('Location:form1.php');
    exit;
}
?>

<?php
include "dbconnect.php";
$useId = $loggedUser['Id'];
$response = array();
//$u_id = $_SESSION['u_id'];

$query ="select trip.T_name, trip.T_img, FROM trip INNER JOIN traveller ON trip.T_id=traveller.Trip_id AND traveller.User_id='$useId';";


$result = mysqli_query($conn,$query);
//print_r($result);
//exit();
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

body {
    background-image: url(trip1.jpg);
    padding: 0px;
    font-family: verdana;
    font-size: 20px;
       
}

/* Center website */
.main {
    max-width: 1000px;
    margin: auto;
    color:white;
    
}

h1 {
    font-size: 50px;
    word-break: break-all;
}
/*
.row {
    margin: 10px -16px;
}

/* Add padding BETWEEN each column 
.row,
.row > .column {
    padding: 8px;
}*/

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 33.33%;
    padding: 5px;
    display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Content */
.content {
    background-color:lavender;
    padding: 10px;
    color:maroon;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: moccasin;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>
</head>
<body>

<!-- MAIN (Center website) -->
<div class="main">
<center> 
    <h2 align="right"><button class="btn" onclick="location.href='form1.php'" width="400 px" height="320 px"><i class="fa fa-sign-out"></i> Log out </button></h2>
    
<h2 style="text-align:center"><b>travel</b></h2>
     <h5 style="text-align:center">teaches how to see</h5>
     Welcome <?php echo $loggedUser['Name'];?> <br>
    <hr>

<div id="myBtnContainer">
    
  <button class="btn" onclick="location.href='form1.php'"><i class="fa fa-home"></i> Home</button>
    
     <button class="btn" onclick="location.href='create_trip.php'"><i class="fa fa-bars"></i> Add Trip</button>
     <br>
   
</div>
</center>
<!-- Portfolio Gallery Grid -->
   
  <?php  if($result!='')

  {
    
    while($row = mysqli_fetch_array($result))
    {

     echo $row['T_name'];?>
    <div class="row">
  <div class="column nature">
    <div class="content">
     <img src="<?php echo $row['T_img'];?>"  height="300" width="300"/> 
      </div>
    </div>
       
    
 <?php //print_r($row);
        //echo $row['T_img'];
      //exit();
       // $loggUser = array('tname' =>               $row['T_name'],'img' =>$row['T_img']);
    }   
    //$_SESSION ['loggUser'] = $loggUser; 
   //print_r($_SESSION ['loggUser']);
   //exit();
	//$response['status']=1;
    
    //$response['message']="You are logged in";
    //echo json_encode($response);
 //header("location: dashboard2.php");
	  
}
else
{
    $message = "Something Went Wrong";
	//$response['status']=0;
	//$response['message']="login failed";
	//echo json_encode($response);
    header("location: dashboard.php");
}

?>
     
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>
</html>
