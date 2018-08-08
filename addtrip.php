<?php 
if(!isset($_SESSION)) 
{
    session_start();
}
?>
<?php
include "dbconnect.php";

$response = array();
//$u_id = $_SESSION['u_id'];

$query ="select T_name, T_img FROM traveller INNER JOIN trip ON traveller.Trip_id=trip.T_id AND traveller.User_id=40";




$result = mysqli_query($conn,$query);
//print_r($result);
//exit();

if($result!='')

  {
    
    while($row = mysqli_fetch_array($result))
    {

 echo $row['T_name'];?>
     <img src="<?php echo $row['T_img'];?>" height="100" width="100" />
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
