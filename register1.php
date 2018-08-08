<?php

include "dbconnect.php";

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password= $_POST['password'];
$active = 1;

$response = array();

$query = "INSERT INTO user (U_name,U_email,U_mobile,U_password,U_active) 
VALUES('$name', '$email','$mobile','$password','$active')";

//print_r($conn,$query);
//exit();

if(mysqli_query($conn, $query))
{
	$response['status']=1;
	$response['message']="Registration Successful";
	echo json_encode($response);	
    header("location:form1.php");
}
else
{
	$response['status']=0;
	$response['message']="Registration Not successful";
	echo json_encode($response);
}

?>
