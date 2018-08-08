<!--Changing the number in the column_# class ch<!DOCTYPE html>
<html>
<head>
<link rel="anges the number of columns-->
<?php
if(!isset($_SESSION)) 
{
    session_start();
}
$loggedUser = isset($_SESSION['loggedUser']) ? $_SESSION['loggedUser'] : array();

?>
<?php
//$loggUser = isset($_SESSION['loggUser']) ? $_SESSION['loggUser'] : array();
?>

<?php
include "dbconnect.php";
$useId = $loggedUser['Id'];
$response = array();
//$u_id = $_SESSION['u_id'];

$query ="select T_name, T_img FROM trip INNER JOIN traveller ON trip.T_id=traveller.Trip_id AND traveller.User_id='$useId' union select T_name, T_img from trip where T_creator='$useId';";  


$result = mysqli_query($conn,$query);
//print_r($result);
//exit();
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
    <link rel="stylesheet" href="dashstyle.css">
    </head>
<body>
	
      <?php  if($result!='')

  {
    
    while($row = mysqli_fetch_array($result))
    {

 echo $row['T_name'];?>
    <div id="wrap">
	<div id="columns" class="columns_4">
  <figure>
     <img src="<?php echo $row['T_img'];?>" height="300" width="300"/></figure>
    
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
    header("location: dashboard2.php");
}

?>
	
	
	
</div>

</body>
    </html>