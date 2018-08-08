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

include "dbconnect.php";
$useId = $loggedUser['Id'];

//mysqli_query($query);

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
<style>
    #example1 
    {
    border: 1px solid black;
    background-color:bisque;
    background-size: cover;
    background-repeat: no-repeat;
    padding:5px;
    }
   <body>
      <div id="example1">
   </body>
</style>
</head>
</html>  
    
<link rel="stylesheet" href="styletrip.css">
  <div class="header">
  	<h2 align="right"><button class="btn" onclick="location.href='logout.php'" width="400 px" height="320 px"><i class="fa fa-sign-out"></i> Log out </button></h2> 
  <div class="login-page">
      
  </div>
<div class="form">
   
<form method="post" action="create_trip.php" class="login-form">
        
<h2 style="text-align:center" >Add Trip</h2>
    <?php echo $loggedUser['Name'];?><br>
     <img src="avatar.png" alt="Avatar" class="avatar"> <br> 
<!--  <input value=  //echo $loggedUser['Name'];?> name="Name" placeholder="Trip Creator" required/>-->
        
        <input type="text" name="t_name" placeholder="trip name" required/>
        
        <input type="file" name="t_img" placeholder="choose image" required/>
        
        <input type="date" name="t_strt" placeholder="start date" required/>
        
        <input type="date" name="t_end" placeholder="end date" required/>  
           
<select name="id[]" size="6" multiple="multiple" id="DDLActivites" data-style="btn-default" class="selectpicker form-control" multiple  data-live-search="true">    
    
 <?php

    $sql="Select U_id, U_email from user where not U_id='$useId';";
    $resul = mysqli_query($conn,$sql);
    ?><?php
   while ($row = mysqli_fetch_array($resul))
   {  
       
       ?>
               
  <option value=<?php echo $row['U_id'];?>><?php echo $row['U_email'];?></option>
            
        <?php
       //print_r('$row');
       //exit();
   }
       ?>
          </select><br>
       <!-- <input type="submit" name="Submit" value="Add" />
        <br>-->
        </br>   
     
    
<?php
      //$lastid = mysqli_insert_id(($conn));
      //echo "last id : ".$lastid;
    
if(isset($_POST['submit']))
{
     $id = $_POST['id'];
    
$t_name = $_POST['t_name'];
$t_img = $_POST['t_img'];
$t_strt = $_POST['t_strt'];
$t_end = $_POST['t_end'];
$t_creator= $loggedUser['Id'];

$response = array();

$query ="INSERT INTO trip (T_name,T_img, T_startdate, T_enddate, T_creator) VALUES ('$t_name','$t_img','$t_strt', '$t_end','$t_creator');";
$result = mysqli_query($conn,$query);
//print_r($result);
//exit();
    if($result!= '')
{
   // while($row = mysqli_fetch_array($result))
   // {
    $lastid = mysqli_insert_id(($conn));
   //echo "last id : ".$lastid;
   // exit();

$sq="Insert into traveller(Trip_id,User_id) Values('$lastid','$t_creator');";
    
    $resu=mysqli_query($conn,$sq);
    if($resu!= '')
        $x=1;
    //echo "last id : ".$lastid;
   {
   foreach ($id as $select)
     {  
      $x++;
      $response1=array();
       $sqli="Insert into traveller(Trip_id,User_id) Values('$lastid','$select');";           

        {
      $res=mysqli_query($conn,$sqli);
       //print_r($sqli);
      //exit();
        }
      }
     //echo "You have selected :" .$select;  
    //echo "last id : ".$lastid;-->
    
if($res!= '')
    {
       $response['message']="Trip Created";
    }
    }
   }
}   
      ?>
      
<!--<input type="submit" name="insert" />-->
  
<input type="submit" style="background-color:#5F9EA0" value="Insert" name="submit" onclick="dashboard2.php">
   <!--   <input type="submit" name="submit" value="SUBMIT" >-->
        <br>
        </br>
<button type="button" onclick="location.href='dashboard2.php'">Back</button><br></br>
<?php $this_year=date('Y');?>
<small>&copy;<?php echo $this_year;?></small>
      
</div> 
</div>
</form>


