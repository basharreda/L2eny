

<?php

session_start(); 

if (!isset($_SESSION['UserName'])) 
{
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) 
{
    session_destroy();
    unset($_SESSION['UserName']);
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact US</title>


<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css3/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css3/style.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<div id="preloader">
  <div id="status"> <img src="img/preloader.gif" height="64" width="64" alt=""> </div>
</div>


     <!-- header -->
     <?php include('header.php');?>
     <!-- header -->
<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="container">
            <div class="section-title center">
            <h2>Contact us</h2>
            <hr>
                    <p>
                Get In Touch

                Have you ever missed someone/something so much that even the thought of
                them made you burst into tears? we know its very bad feeling when you lost something,
                I had this experience before and decided to help all the people who missed their
                people/pets/other things also for the people who want to help find the missing items. 
                La2eny is a large website (FREE) allow you to add lost items/found items we will broadcast
                    your post and sending more than 1000 email near to your location and other services It will 
                    reach your missing. please help us & help your friends who lost and found items. and share this
                    FREE website www.la2eny.com
                        </p>
            </div>

        <div class="col-md-8 col-md-offset-2">
                <div class="col-md-4">
                    <div class="contact-item"> <i class="fa fa-map-marker fa-2x"></i>
                    <p>AHMED ZWEIL St,<br>
                        EL Dokky Giza</p>
                    </div>
                </div>
            
                <div class="col-md-4">
                    <div class="contact-item"> <i class="fa fa-envelope-o fa-2x"></i>
                    <p>info@example.com</p>
                    </div>
                </div>
                        
                <div class="col-md-4">
                    <div class="contact-item"> <i class="fa fa-phone fa-2x"></i>
                    <p> +02 123 456 789<br>
                        +02 987 654 321</p>
                    </div>
                </div>
            <div class="clearfix"></div>
        </div>

    <div class="col-md-8 col-md-offset-2">

         <h3>Leave us a message</h3>
            <form name="sentMessage" id="contactForm" action="cotact_me.php" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                            <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                            <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                    <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
                    <p class="help-block text-danger"></p>
                    </div>

                <div id="success"></div>

                <button type="submit" class="btn btn-default">Send Message</button>
            </form>
      
            <div class="social">
                <h3>Follow us</h3>
                <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-github"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
      </div>
    </div>
  </div>
</div>

<div id="footer">
  <div class="container">
    <p>Copyright &copy; FCI TEAM. Designed by <a href="La2eny" rel="nofollow">La2eny</a></p>
  </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 


<!-- Javascripts
    ================================================== --> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>