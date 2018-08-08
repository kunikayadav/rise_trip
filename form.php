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
        
	<div class="header">
		<h1 text-color="white">Trip Form </h1>
	</div>
	
	<div class="container">
	<div class="row">
		<div class="col-md-5 col-md-offset-6">	
		<div class="panel panel-default panel-transparent">
			
      <div class="panel-heading">
			  <span class="glyphicon glyphicon-log-in"></span> Login</div>
			
      <div class="panel-body">
          <div class="form">
<form method="post" action="login1.php" class="login-form">
<div class="form-group">
<label class="control-label col-md-3" for="username"><span class="glyphicon glyphicon-envelope"></span>Email-id:</label>
<div class="col-md-9">
<input type="name" class="form-control" id="email" placeholder="Enter email" required></div></div>
    <br></br>				
 <div class="form-group">
<label class="control-label col-md-3" for="pwd"><span class="glyphicon glyphicon-lock"></span> Password:</label>
<div class="col-md-9">
<input type="password" class="form-control" id="pwd" placeholder="Enter password" required></div></div>
    <div class="form-group">        
<div class="col-sm-offset-2 col-sm-10">
<div class="checkbox">
<label><input type="checkbox"> Remember me</label></div>
</div></div>
          
<div class="form-group">        
<div class="col-sm-offset-2 col-sm-10">
<input type="submit" value="submit" class="btn btn-primary" >
</div></div>				
        </div>
      
<div class="panel-footer">
<p> Not yet a member? <a href="signup.php">Sign up</a></p>
    
</div>	
</div>
</div>
	</div>
	</div>
            </form>
    </body>
</html>