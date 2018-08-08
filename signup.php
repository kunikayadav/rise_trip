<div class="login-page">
    <html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=2, maximum-scale=2, user-scalable=no" />      	
		<link rel="stylesheet" type="text/css" href="style2.css">  
	   	<link href='https://fonts.googleapis.com/css?family=Vibur' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>		
		
	</head>
	<body>
    
	<div class="container">
	<div class="row">
		<div class="col-md-5 col-md-offset-7">	
		<div class="panel panel-default panel-transparent">
    	
      <div class="panel-heading">
			  <span class="glyphicon glyphicon-edit"></span> Sign Up Now!</div>
   <div class="panel-body">
       <div class="search-wrapper">
           

<!--<link rel="stylesheet" href="styletrip.css">

    <p>Please fill in this form to create an account.</p>
<div class="header">
  	
</div>
  <div class="form">-->
  
    <form method="post" action="register1.php" class="signup-form">
	<!--<h2 style="text-align:center;">Sign Up Now!</h2>-->
        
    <div class="form-group">
    <label class="control-label col-md-3" for="username"><span class="glyphicon glyphicon-user"></span>Username:</label>
<div class="col-md-9">
<input type="text" name="name" class="search-box" maxlength="15" placeholder="Enter username" required>
        <button class="close-icon"></button>
        </div></div>  
    <br></br>
      
           
      <div class="form-group">
      <label class="control-label col-md-3" for="email"><span class="glyphicon glyphicon-envelope"></span>Email:</label>
       <div class="col-md-9">
      <input type="text" name="email" class="search-box" pattern=".+@.+." size="20" placeholder="Enter email-id" required>
           <button class="close-icon" type="reset"></button>
              </div></div>
      <br></br>

     <div class="form-group"> 
    <label class="control-label col-md-3" for="mobile"><span class="glyphicon glyphicon-phone"></span> Mobile:</label>
     <div class="col-md-9">
    <input type="text" name="mobile" class="search-box" maxlength="10" pattern="[0-9]{10}"
            placeholder="Enter mobile no." required>
         <button class="close-icon" type="reset"></button>
         </div></div>
             
    <br></br>

    <div class="form-group">
    <label class="control-label col-md-3" for="pwd"><span class="glyphicon glyphicon-lock"></span> Password:</label>
    <div class="col-md-9">
     <input type="password" name="password" class="search-box" placeholder="Enter password" required>
        <button class="close-icon" type="reset"></button>
        </div></div>
            <br></br>

<div class="form-group">        
<div class="col-sm-offset-1 col-sm-10">
        <!--<div class="panel-footer">-->
<button type="submit" class="btn btn-primary"  href="form1.php" float="left">Submit</button>
        
<!--<button type="button" class="btn btn-primary" onclick="form1.php">Back</button> --> 
</div></div>				
        
      
<!--<div class="panel-footer">-->
   
</div>	
</div>
        </div>
        </div>
        </div>
    </form>
        </body>
    </html>

</div>



     <!-- <input type="name" name="name" placeholder="name" required/>
	  
      <input type="email" name="email"  placeholder="email" required/>
	   <input type="mobile" name="mobile"  placeholder="mobile" required/>
	    <input type="password" name="password"  placeholder="password" required/>
	 

<button type="submit">Submit</button><br></br>
	    
<button type="button" onclick="history.back();">Back</button>
      <?php $this_year=date('Y'); ?><br></br>
<small>&copy;<?php echo $this_year;?></small>
    </form>
  </div> 
</div>  
	 


<!--<div class="login-page">

    <html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />      	
		<link rel="stylesheet" type="text/css" href="style2.css">  
	   	<link href='https://fonts.googleapis.com/css?family=Vibur' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>		
		
	</head>
	
	<body>
	
	
	<div class="container">
	<div class="row">
		<div class="col-md-5 col-md-offset-7">	
		<div class="panel panel-default panel-transparent">
    	
      <div class="panel-heading">
			  <span class="glyphicon glyphicon-edit"></span> Sign Up Now!</div>
   <div class="panel-body">
    <form method="post" action="register1.php" class="signup-form">
        
        <div class="form-group">
<label class="control-label col-md-3" for="username"><span class="glyphicon glyphicon-user"></span>Username:</label>
<div class="col-md-9">
<input type="name"  placeholder="Enter username" required></div></div>
    <br></br>
      
      <div class="form-group">
      <label class="control-label col-md-3" for="email"><span class="glyphicon glyphicon-envelope"></span>Email:</label>
<div class="col-md-9">
<input type="email" placeholder="Enter email-id" required></div></div>
    <br></br>

     <div class="form-group"> 
    <label class="control-label col-md-3" for="mobile"><span class="glyphicon glyphicon-phone"></span> Mobile:</label>
<div class="col-md-9">
<input type="number" placeholder="Enter mobile no." required></div></div>  
    <br></br>

 <div class="form-group">
<label class="control-label col-md-3" for="pwd"><span class="glyphicon glyphicon-lock"></span> Password:</label>
<div class="col-md-9">
<input type="password" placeholder="Enter password" required></div></div>
    
    
    
</div>
          
<div class="form-group">        
<div class="col-sm-offset-2 col-sm-10">
<button type="submit" class="btn btn-primary" href="form.php">Submit</button>
</div></div>				
        </div>
      
<div class="panel-footer">
    <button type="button" onclick="history.back();">Back</button>
 
    
</div>	
</div>
</div>
	</div>
	</div>
</div>
</body>
</html>-->
	<!--<h2 style="text-align:center">Sign Up Now!</h2>
      <input type="name" name="name" placeholder="name" required/>
	  
      <input type="email" name="email"  placeholder="email" required/>
	   <input type="mobile" name="mobile"  placeholder="mobile" required/>
	    <input type="password" name="password"  placeholder="password" required/>
	  
  	
    
      <button type="submit">Submit</button><br>
	  </br>
      
	    
      <button type="button" onclick="history.back();">Back</button>
      
    </form>
	 </div>
</div>-->

