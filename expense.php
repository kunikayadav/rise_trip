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
$response = array();
$id=$_GET['id'];
$_SESSION['trip_id']=$id;
//echo $id;

$query="SELECT E_trip_id,E_user_id, E_name, SUM(E_amt) as sum, E_cat_id FROM expense where E_trip_id='$id' and E_user_id='$useId';";
    
$result = mysqli_query($conn,$query);
   //print_r($result);
   //exit();
?>

<!DOCTYPE html>
<html>
<head>
    
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
         <h2 align="right"><button class="btn" onclick="location.href='form1.php'" width="400 px" height="320 px"><i class="fa fa-sign-out"></i> Log out </button></h2> 
  	<div class="login-page">
     
     </div>
         <centre>
<div class="form">
   
    <form method="post" action="addexpense.php" class="login-form">
        
	<h2 style="text-align:center" >Expense</h2>
        <?php echo $loggedUser['Name'];?><br>
     <img src="avatar.png" alt="Avatar" class="avatar">
        
   <!--<input value=<?php //echo $loggedUser['Name'];?> name="Name" placeholder="Trip Creator" required/>-->
    
<?php
   if($result!='')
    {
      while($row = mysqli_fetch_array($result))
       {
         $sum = $row['sum'];
        ?>
            
          <h5 align="left"> Total Expense: <input value="<?php echo $sum;?>"readonly> </h5> 
        <!--<h5 align="left"> Expense Name:<input value="<?php echo $row['E_name'];?>"  placeholder="expense name" /></h5>-->
          <?php
        }  
         ?>
       <?php      
     }
?>

<input type="submit" style="background-color:#5F9EA0" value="Add Expense" name="Add" onclick="location:'addexpense.php'">
       <br>
       <!--<a href="report.php?id=<?php echo $row['id']?>"> -->
           <button type="button" onclick="location.href='report.php'">Report</button><br></a>
      </br>
<?php $this_year=date('Y');?>
        <small>&copy;<?php echo $this_year;?></small>
     </form> 
         </centre>
  </div>
</div> 
  
        