
<?php
include('connect.php');
session_start(); 



$id= $_GET['id'] ? intval($_GET['id']) : 0;

  $mysql_statement = "SELECT * FROM items where item_id='$id' limit 1";
  $result = $mysql_connection->query($mysql_statement);

  if ($result->num_rows > 0)
  {
    $row = $result->fetch_assoc();
  }
  else 
  {
      echo "<center> 0 results </center><br>";
  }
  



?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico">

    <title>CRUD ITEMS</title>


<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css3/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css3/style.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>		
		

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jquery.parallax.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 

<!-- Javascripts
    ================================================== --> 
<script type="text/javascript" src="js/main.js"></script>





 

    <script src="confirm_items.js"></script>
  </head>

  <body>



     <!-- header -->
    <?php include('header.php');?>
     <!-- header -->
    
     <div class="item2-image">
        <div class="item2-text">
        </div>
    </div>
    

    <div class="container">
    <br>
    <h4>SHOW ITEM </h2>
	<br>
	<div class="row" id="ads">

            <!-- Category Card -->
            <div class="col-md-6">
                <div class="card rounded">
                    <div class="card-image">
                        <span class="card-notify-badge"><?=$row['category'] ?></span>
                        <span class="card-notify-year">2018</span>
                        <img class="img-fluid" src=" images\<?=$row['image'] ?> " alt="Alternate Text" />
                        
                    </div>
                    <br>
                    <div class="card-image-overlay m-auto">
                        <span class="card-detail-badge"><?=$row['color'] ?></span>
                        <span class="card-detail-badge"><?=$row['location'] ?></span>
                        <span class="card-detail-badge"><?=$row['status'] ?></span>
                        <span class="card-detail-badge"><?=$row['reg_date'] ?></span>
                    </div>
                    <br>
                    <div class="card-body text-center">
                        <div class="ad-title m-auto">
                            <h5><?=$row['description'] ?></h5>
                        </div>
                    </div>
                </div>
            </div>
  
</div>
</div>


<br><br><br>








































</div>  
    <!-- Footer -->
    <?php include('footer.php');?>
    <!-- End Footer -->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jquery.parallax.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 

<!-- Javascripts
    ================================================== --> 
<script type="text/javascript" src="js/main.js"></script>


  </body>
</html>