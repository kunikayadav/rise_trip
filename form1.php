<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=2, maximum-scale=2, user-scalable=no" />      	
		<link rel="stylesheet" type="text/css" href="style2.css">  
	   	<link href='https://fonts.googleapis.com/css?family=Vibur' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
	    <script type="text/javascript">
function noBack(){window.history.forward();}
noBack();
window.onload=noBack;
window.onpageshow=function(evt){if(evt.persisted)noBack();}
window.onunload=function(){void(0);}
</script>
        
	</head>
	
	<body>
        
	<!--<div class="header">
		<h1 text-color="white">Trip Form </h1>
	</div>-->
	
	<div class="container">
	<div class="row">
		<div class="col-md-5 col-md-offset-6">	
		<div class="panel panel-default panel-transparent">
			
      <div class="panel-heading">
			  <i class="fa fa-fw fa-user"></i> Login</div>
			
      <div class="panel-body">
<div class="search-wrapper">
    <!--<div class="form">

<!--<div class="login-page">

<link rel="stylesheet" href="styletrip.css">
     <div class="header">
  	
  </div>
  <div class="form">-->
   
<form id="formLogin" method="post" action="login1.php" class="login-form">
    
    <div class="form-group">
<label class="control-label col-md-3" for="username"><span class="glyphicon glyphicon-envelope"></span>Email:</label>
        
<div class="col-md-9">
    <!--<input type="email" name="email" placeholder="email" required />-->
<input type="text" name="email" id="email" class="search-box" placeholder="Enter email" required>
       <button class="close-icon" onclick="document.getElementById('email').value = ''">
    </button>
        </div></div>
    <br></br>  
    
 <div class="form-group">
<label class="control-label col-md-3" for="pwd"><span class="glyphicon glyphicon-lock"></span> Password:</label>
     
<div class="col-md-9">
    <!--<input type="password" name="password"  placeholder="password" required/>-->
<input type="password" name="password"  id="pwd" class="search-box"  placeholder="Enter password" required>
    <button class="close-icon" onclick="document.getElementById('pwd').value = ''"></button>
     </div></div>
     
    <div class="form-group">        
<div class="col-sm-offset-2 col-sm-10">
<div class="checkbox">
<label><input type="checkbox"> Remember me</label></div>
</div></div>
          
<div class="form-group">        
<!--<div class="col-sm-offset-2 col-sm-10">-->

</div></div>				
        </div>
      
<div class="panel-footer">
    <input type="submit" value="Login" class="btn btn-primary">
<p> Not yet a member? <a href="signup.php">Sign up</a></p>
    
</div>	
</div>
</div>
	</div>
	</div>
            </form>
    </body>
</html>
    
	<!--<h2 style="text-align:center;">Login Form</h2>
    <h4>Please fill all entries.</h4>
    <input type="email" name="email" placeholder="email" required />
	  
    
	  
<button type="submit">login</button><br>
        </br>
<button type="button" onclick="location.href='signup.php'">sign up</button>
      
<?php $this_year=date('Y');?>
<p class="message">Not registered? <a href="register1.php">Create an account</a></p>
<small>&copy;<?php echo date('Y');?></small>

      </form>
  </div>
</div>-->

