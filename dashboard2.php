<?php
if(!isset($_SESSION)) 
{
    session_start();
}
$loggedUser = isset($_SESSION['loggedUser']) ? $_SESSION['loggedUser'] : array();
?>

<?php
include "dbconnect.php";
$useId = $loggedUser['Id'];
?>
<?php
if(!isset($_SESSION['loggedUser'])) 
{
    header('Location:form1.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*   {
    box-sizing: border-box;
    }

body 
{
    background:url('australia.jpg');
    padding: 0px;
    font-family: verdana;
    font-size: 20px;      
}

/* Center website */
.main 
{
    max-width: 1000px;
    margin: auto;
    color:white;   
}

h1 
{
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
.column 
{
    
    float: left;
    width: 33.33%;
    padding: 5px;
    display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after 
{
   
    content: "";
    display: table;
    clear: both;
}

/* Content */
.content 
{
    
    background-color:lavender;
    padding: 10px;
    color:maroon;
}

/* The "show" class is added to the filtered elements */
.show 
{
    
  display: block;
}

/* Style the buttons */
.btn 
{
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: lavender;
  cursor: pointer;
}

.btn:hover 
{
  background-color: #ddd;
}

.btn.active 
{
  background-color: #666;
  color: white;
}
    
</style>
</head>
<body >
<div class="main" >
<center> 
<h2 align="right"><button class="btn" onclick="location.href='form1.php'" width="400 px" height="320 px"><i class="fa fa-sign-out"></i> Log out </button></h2>
    
    <!--<a class="logout" href="logout.php" width="1px"> <img src="images/logout.png" align="right"> </a>-->
       
<h2  ><b>travel</b></h2>
<h6 style="text-align:center">teaches how to see</h6>
    
Welcome <?php echo $loggedUser['Name'];?> <br>
    <hr>
    
<div id="myBtnContainer">
        
     <button class="btn"><i class="fa fa-home"></i> Home</button>
        
     <button class="btn" onclick="location.href='create_trip.php'"><i class="fa fa-bars"></i> Add Trip</button>
     <br>
</div>
</center>
     
<?php 
    $response = array();
//$u_id = $_SESSION['u_id'];

$query ="select T_id, trip.T_name, trip.T_img FROM trip INNER JOIN traveller ON trip.T_id=traveller.Trip_id AND traveller.User_id='$useId';"; 

$result = mysqli_query($conn,$query);
//print_r($result);
//exit();

if($result!='')

{
    
    while($row = mysqli_fetch_array($result))
    {
        //echo $row['T_id'];
        // $tripId= $row['T_id'];
        //echo $tripId;
?>
       
    <b><?php echo $row['T_name'];?></b>
            
<div class="row">
  <div class="column nature">
    <div class="content">
 
     <a href = "expense.php?id=<?php echo $row['T_id'] ?>">
    <img src="<?php echo $row['T_img'];?>" value="<?php echo $row['T_id'];?>" height="300" width="300" ></a>
    </div>
  </div>            
    
 <?php 
        
    }
        //print_r($row);
        //echo $row['T_img'];
      //exit();
}
      
else
{
    $message = "Something Went Wrong";
	//$response['status']=0;
	//$response['message']="login failed";
	//echo json_encode($response);
    header("location: dashboard2.php");
}

?>
 </div>
</div> 
      
<!--<h2 align="center"><button type="button" onclick="location.href='tripform.php'">Add trip</button></h2>-->
  
<script>
filterSelection("all")
function filterSelection(c) 
{
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) 
  {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) 
{
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++)
  {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name)
{
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
for (var i = 0; i < btns.length; i++) 
{
  btns[i].addEventListener("click", function()
  {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
</body>
</html>
