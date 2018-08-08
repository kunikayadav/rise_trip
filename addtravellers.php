<?php 
if(!isset($_SESSION)) 
{
    session_start();
}
$loggedUser = isset($_SESSION['loggedUser']) ? $_SESSION['loggedUser'] : array();
?>

<?php

$response = array();
$useId = $loggedUser['Id'];

 //echo $id;
 //exit();
$e_name = $_POST['e_name'];
$e_date = $_POST['e_date'];
$e_amt = $_POST['e_amt'];
$c_id = $select;
 $id=$_SESSION['trip_id'];

$sqli="INSERT INTO expense( `E_trip_id`, `E_user_id`, `E_name`, `E_date`, `E_amt`,'E_cat_id') VALUES ('$id','$useId', '$e_name','$e_date','$e_amt','$c_id');";
echo $sqli;
         exit();
?>
 <!--       
<div class="login-page">

<link rel="stylesheet" href="styletrip.css">
     <div class="header">
  	
  </div>
  <div class="form">
   
    <form method="post" action="addtravellers.php" class="login-form">
	<h2 style="text-align:center;">Add Travellers</h2>
        <!--<h4>Please fill all entries.</h4>-->
         <select name="email[]"  multiple>
        <!--<select name="email[]" size="5" multiple>-->  
<?php

   while ($row = mysqli_fetch_array($result))
   {  
       ?>
  <option value=<?php echo $row['U_id'];?>><?php echo $row['U_email'];?></option>
             <?php
   }
       ?>
          
            </select>
        <br>
        </br>   
<input type="submit" name="submit" value="Get Selected Emails" />
    </form>
<?php
      
if(isset($_POST['submit']))
{
// As output of $_POST['Color'] is an array we have to use foreach Loop to display individual value

$lastid = mysqli_insert_id(($conn)); 
echo "last id : ".$lastid;

foreach ($_POST['email'] as $select)
{
   
//echo "You have selected :" .$select; 
// Displaying Selected Value 
//echo "last id : ".$lastid;
    
$sql="Insert into traveller(Trip_id,User_id) Values('$lastid',$select);";
    
}
}
?>
        
	  
     <!-- <input type="password" name="password"  placeholder="password" required/>-->
	  
  	
     <!-- <button type="submit" href="dashboard2.php">Add</button>
        
        <br>
        </br>-->
    <?php 
     $this_year=date('Y');
        ?>
    <button type="button" onclick="history.back();">Back</button><br>
      </br>
    <small>&copy;<?php echo date('Y');?></small>
      
       <!-- <button type="button" onclick="location.href='signup.php'">sign up</button>-->
		





