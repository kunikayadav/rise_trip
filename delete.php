<?php
include "dbconnect.php";

$id=$_POST['id'];
$q="DELETE FROM user WHERE id=$id";
mysqli_query($conn,$q);
header('location:view.php');
?>