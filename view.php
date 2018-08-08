<?php 
include "dbconnect.php";

$query = "SELECT * from trip";
$result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>
    <title><head>fetch data from database</head>
    </title>
<body>
<table align="center" border="1px" style="width:600px" line-height:40px;> 
<tr >
    <th colspan="8"><h2>User data</h2> </th>
    </tr>
    <t class="bg-dark text-white text-center">
    <th> ID</th>
        <th>Name</th>
        <th> Image</th>
        <th> Startdate</th>
        <th> Enddate </th>
        <th> Creator</th>
    </t>
    <?php

   while ($row = mysqli_fetch_array($result))
   {
       ?>
    <tr class="text-center">
        <td><?php echo $row['T_id'];?></td>
        <td><?php echo $row['T_name'];?></td>
        <td><img src="<?php echo $row['T_img'];?>" height="100" width="100"></td>
        <td><?php echo $row['T_startdate'];?></td>
        <td><?php echo $row['T_enddate'];?></td>
        <td><?php echo $row['T_creator'];?></td>
        <td><button class="btn-danger btn"><a href="delete.php?id=<?php echo $row['U_id'];?>" class="text-white">Delete</a></button></td>
        <td><button class="btn-primary btn"><a href="update.php?id=<?php echo $row['U_id'];?>" class="text-white">Update</a></button></td>
       
    </tr>
    <?php
   }
       ?> 

</table> 
    </body>
</html>

	