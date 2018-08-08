<?php
if(!isset($_SESSION['loggedUser'])) 
{
    header('Location:../index.php');
    exit;
}
?>
<?php 

require_once dirname(__FILE__) . '/dbconnect.php';

//include '../scripts/dbconnesdct.php';

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$active = 1;

$query = "insert into user(u_name,u_email,u_mobile,u_password,u_active) 
                  value ('".  mysql_real_escape_string($name)."',
                         '".  mysql_real_escape_string($email)."',
                         '".  mysql_real_escape_string($mobile)."',
                         '".  mysql_real_escape_string($password)."',
                         '".  mysql_real_escape_string($active)."')";
//echo   $query;
//exit();
$result = mysql_query($query, CONNECTION);

//echo $result;
//exit();

if ($result == 1) 
{
    header('Location: ../index.php');
}
else
{
    $message = "Something Went Wrong";
    header('Location: ../registration/registeration.php?Message='.$message);
}

