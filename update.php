<?php
include "dbconnect.php";
if(isset($_POST['done']))
{
$id=$_GET['U_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password= $_POST['password'];
$q="update user set U_id=$id, U_name='$name', U_email='$email',U_mobile='$mobile',U_password='$password' where U_id=$id";
    
$query=mysqli_query($conn,$q);
header('location:view.php');
}
?>

<div class="login-page">

<link rel="stylesheet" href="styles.css">

    <p>Please fill in this form to create an account.</p>
     <div class="header">
  	<h2 style="text-align:center;">Login</h2>
  </div>
  <div class="form">
   
    <form method="post" action="register1.php" class="login-form">
	
      <input type="name" name="name" placeholder="name"/>
	  
      <input type="email" name="email"  placeholder="email"/>
	   <input type="mobile" name="mobile"  placeholder="mobile"/>
	    <input type="password" name="password"  placeholder="password"/>
	  
  	
    
      <button type="submit" header('location:form1.php')>Update</button><br>
	  </br>
      
	    
      <button type="button" onclick="history.back();">Back</button>
      
    </form>
	 </div>
</div>