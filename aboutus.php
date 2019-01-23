

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
<title>About US</title>


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
              

    

<!-- About Section -->
<div id="about">
            <div class="container">
                <div class="section-title text-center center">
                    <h2>About us</h2>
                    <hr>
                </div>
                <div class="row">
                            <div class="col-md-4"><img src="img/about.jpg" class="img-responsive"></div>
                                
                                    <div class="col-md-4">
                                    <div class="about-text">
                                        <h4>Who We Are</h4>
                                        <p>La2eny is famous and world best lost and found Platform which deals with lost
                                                and found items get back to right owners. In the modern era, and due to the 
                                                advancement of technology specially artificial intelligence technologies,
                                                there are various things available in the modern world like as electronic gadgets,
                                                transportations, home appliances and many more.Moving further, whenever things items 
                                                are lost from us and suffering from pain. Due to this condition you can choose our
                                                La2eny Lost and Found Items services by the free simple register. You can add your lost items
                                                    (color, height, width) in our site We can fully help to find your lost items and get back to you. 
                                            We are happy when we found your lost items and reach to you as soon as possible.
                                            </p>
                                    </div>
                                    </div>


                                    <div class="col-md-4">
                                            <div class="about-text">
                                                <h4> Why La2eny</h4>
                                                <p>
                                                        A huge number of voyagers consistently lose their things. Travel papers, 
                                                        frill, and other important individual things. In 2017, for instance,
                                                        25.8 million bits of baggage were lost. We've built up this site as a free support of everybody, 
                                                        trusting that everybody needs this administration and that we feel the torment of the individuals
                                                        who lost their things. This administration is coordinating administration for who lost things 
                                                        and who discovered things. Just you need to post or report a lost/discovered thing after
                                                        login and by our turn, we will communicate your post in our pages and sending messages
                                                            to the general population close to your post area. Simply I want to get back your lost
                                                            things by find them and bring back to you. We only want happiness in this world.
                                                            For more information call us at +01111111111 or email us hossam@gmail.com We 
                                                            provide the lost and found services in worldwide like as Egypt, USA, Canada,
                                                            United Kingdom, Germany, France, Italy, Russia, Dubai, Omen, Australia, Japan,
                                                                India, Cyprus,
                                                        New Zealand and many more. You give us one chance to serve you very well.
                                                </p>
                                                <ul>
                                                <li>La2eny Is Very Easy</li>
                                                <li>The First Platform for Lost Items In Egypt</li>
                                                <li>Easy To Regesiter And Login</li>
                                                <li>Easy to Add And Found A Lot Of Items</li>
                                                </ul>
                                            </div>
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