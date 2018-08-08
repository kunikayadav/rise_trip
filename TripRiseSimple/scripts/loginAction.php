<?php
if(!isset($_SESSION)) 
{
    session_start();
}

require_once dirname(__FILE__) . '/dbconnect.php';

$email = $_POST['email'];
$password = $_POST['password'];

//echo $email;
//exit();

$query = "select * from user where u_email = '$email' and u_password = '$password'";
//echo $query;
//exit();
$result  = mysql_query($query);
//echo $result;
//exit();
if($result != '')
{
    while($row = mysql_fetch_array($result))
    {
//        print_r($row);
//        exit();
        $loggedUser = array('Name' =>               $row['u_name'],
                            'Email' => $row['u_email']);
    }
    $_SESSION ['loggedUser'] = $loggedUser;   
//    print_r($_SESSION ['loggedUser']);
//    exit();
    header('Location: ../dashboard.php');   
}
else
{
    $message = "Something Went Wrong";
    header('Location: ../index.php?Message='.$message); 
}



