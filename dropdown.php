<form action="#" method="post">
<select name="Color[]" multiple> // Initializing Name With An Array
<option value="Red">Red</option>
<option value="Green">Green</option>
<option value="Blue">Blue</option>
<option value="Pink">Pink</option>
<option value="Yellow">Yellow</option>
</select>
<input type="submit" name="submit" value="Get Selected Values" />
</form>
<?php
if(isset($_POST['submit']))
{
// As output of $_POST['Color'] is an array we have to use foreach Loop to display individual value
foreach ($_POST['Color'] as $select)
{
echo "You have selected :" .$select; // Displaying Selected Value
}
}
?>

union select T_name, T_img from trip where T_creator='$useId';";  
https://stackoverflow.com/questions/9884680/pass-value-of-clicked-button-from-one-page-to-another-page-input-field



if($result!= '')
{

  ?>

    <!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
<style>
    #example1 {
    border: 1px solid black;
    background-color:bisque;
    background-size: cover;
    background-repeat: no-repeat;
    padding:5px;
}
   <body>
    
    <div id="example1">
    </body>
</style>
</head>
</html>  

   <div class="login-page">
       <h2 align="right"><button class="btn" onclick="location.href='form1.php'" width="400 px" height="320 px"><i class="fa fa-sign-out"></i> Log out </button></h2> 
      

<link rel="stylesheet" href="styles.css">
     <div class="header">
  	
  </div>
  <div class="form">
   
    <form method="post" action="create_trip.php" class="login-form">
        
	<h2 style="text-align:center" >Add Trip</h2>
      
    <!--  <input value=  //echo $loggedUser['Name'];?> name="Name" placeholder="Trip Creator" required/>-->
        
        <input type="name" name="t_name" placeholder="expense name" required/>
        
        <input type="amt" name="e_amt" placeholder="expense amount" required/>
        
        <input type="date" name="e_date" placeholder="expense date" required/>
        
        <input type="date" name="e_cat" placeholder="category" required/>
        
      
           
       <select name="id[]" size="6" multiple="multiple" >    </div>
            <?php

   while ($row = mysqli_fetch_array($resul))
   {  
       
       ?>
         
             
  <option value=<?php echo $row['U_id'];?>><?php echo $row['U_email'];?></option>
            
             <?php
       //print_r('$row');
       //exit();
   }
       ?>
          </select><br>
            <!--</select>-->
       <!-- <input type="submit" name="Submit" value="Add" />
        <br>-->
        </br>   
     
    
<?php
//$lastid = mysqli_insert_id(($conn));
       //echo "last id : ".$lastid;
    
if(isset($_POST['submit']))
{
     $id = $_POST['id'];
