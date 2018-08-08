<?php
if(isset($_REQUEST['Message']))
{
    echo $_REQUEST['Message'];
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Trip Management</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lato:400,900,700,300,100' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="logo pull-left col-md-6 col-sm-6 col-xs-12">
                            <h1>RISE</h1>
                        </div>
<!--                        <div class="social col-md-6 col-sm-6 col-xs-12">
                                <ul class="pull-right">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>-->
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="main-title text-center">
                            <h2>Tour a Trip</h2>
                            <p>Keep all your travel plans in one place and access your itineraries anytime, on any device. Of course, you get this feature with the free version of TripIt, too.</p>
                            <div>&nbsp;</div>
                            <a href="registration/registeration.php" class="subscribe-tag page-scroll">Register</a>
                            <a href="registration/login.php" class="subscribe-tag page-scroll">Sign In</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer" id="footer">
            <div class="container">
                <div class="row">
<!--                    <div class="col-md-12">                        
                        <div class="social text-center">
                            <ul>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>-->
                    <div class="col-md-12 text-center footer-line">
                        <p>2018 &copy; RISHABH | Designed By <a target="_blank" href="http://www.learnatrise.in/">RISE</a> | <a target="_blank" href="http://www.rishabhsoft.com/">Rishabh Software</a></p>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.countdown.min.js"></script>        
    </body>
</html>