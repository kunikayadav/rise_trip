<?php
//if (!isset($_SESSION)) 
{
    //session_start();
}
//session_destroy();
//header('Location:form1.php');
?>

<?php
	session_start();
	session_destroy();
	header('location:form1.php');
?>