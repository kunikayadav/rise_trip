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
    header('Location:index.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dashboard - Trip</title>
    </head>
    <body>
        Welcome <?php echo $loggedUser['Name'];?>
        
        your email is <?php echo $loggedUser['Email'];?>
       
        <a class="logout" href="scripts/logout.php" > <img src="images/logout.png" /> </a>
    </body>
</html>
