<?php

if (!isset($_SESSION)) 
{
    session_start();
}
$loggedUser = isset($_SESSION['loggedUser']) ? $_SESSION['loggedUser'] : array();
//print_r($loggedUser);
//exit();
?>
<?php
if(!isset($_SESSION['loggedUser'])) 
{
    header('Location:l.php');
    exit;
}
include "dbconnect.php";
$id=$_SESSION['trip_id'];
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
 
      
<link rel="stylesheet" href="styletrip.css">
     <div class="header">
         <h2 align="right"><button class="btn" onclick="location.href='logout.php'" width="400 px" height="320 px"><i class="fa fa-sign-out"></i> Log out </button></h2> 
      <div class="login-page">
          
     </div>
  <div class="form">
    <form method="post" action="addexpense.php" class="login-form">
        
	<h2 style="text-align:center" >Add Expense</h2>
      <?php echo $loggedUser['Name'];?><br>
     <img src="avatar.png" alt="Avatar" class="avatar"><br>
    <!--  <input value=  //echo $loggedUser['Name'];?> name="Name" placeholder="Trip Creator" required/>-->
        
        <input type="text" name="e_name" placeholder="expense name" required/>
        
        <input type="date" name="e_date" placeholder="expense date" required/>
        
        <input type="amt" name="e_amt" placeholder="expense amount" required/>
              
        <select name="id[]" id="DDLActivites" data-style="btn-default" class="selectpicker form-control" multiple  data-live-search="true"><br></br>

				
                    <?php
					
//include('dbconnect.php');
echo mysqli_error ($conn);
$query = "Select C_id, C_name from category;";
$result = mysqli_query($conn,$query);
?> <?php
while($row = mysqli_fetch_array($result))
{
                    ?> <option value=<?php echo $row['C_id'];?>><?php echo $row['C_name'];?></option>
                    
						<?php 
                        }
							  
					?></select>
                
                <h2>
<input type="submit" style="background-color:#5F9EA0"  name="submit" value="SUBMIT"  /></h2>
            </form>
           <?php
if(isset($_POST['submit']))
{

   foreach ($_POST['id'] as $select)
   {
   //echo "You have selected :" .$select; 
   //$id=$_SESSION['trip_id'];
       $e_name = $_POST['e_name'];
       $e_date = $_POST['e_date'];
       $e_amt = $_POST['e_amt'];
       $useId = $loggedUser['Id'];
       //$catogroy=$row['c_id'];
       $cid=$select;
       $response1 = array();
    
$uery="INSERT INTO `expense`(`E_trip_id`, `E_user_id`, `E_name`, `E_date`, `E_amt`, `E_cat_id`) VALUES ('$id','$useId','$e_name','$e_date','$e_amt','$cid');";
    //echo $uery;
   // exit;
    if(mysqli_query($conn, $uery))
			  {
				  
				$response['status']=1;
				$response['message']="Registartion Successful";
				echo json_encode($response);
				header("Location:dashboard2.php");
				
			  }
			  else
			  {
				echo mysqli_error($conn);
				$response['status']=0;
				$response['message']="Registartion not Successful, please try again";
				echo json_encode($response);	
			  
              }
 
 
$result = mysqli_query($conn,$que); 
if($result != '')
    {
    
	$response1['message']="added expence";
	echo json_encode($response1);
    header('location:exp.php');
    }
        
     else
        {
	$response1['status']=0;
	$response1['message']="loging Not successful";
	echo json_encode($response1);
        }
    }
    
}
            
?>
<button type="button" onclick="location.href='expense.php'">Back</button><br> </br>

<?php $this_year=date('Y'); ?>
<small>&copy;<?php echo $this_year;?></small>         
              
 </div>
    </div>
        </form>
     