
<?php
include('connect.php');
session_start(); 



$mysql_statement = "SELECT * FROM items where status='lost' ";
$result = $mysql_connection->query($mysql_statement);






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
 

    <link rel="stylesheet" href="css2/style.css">
    <script src="confirm_items.js"></script>
  </head>

  <body>

     <!-- header -->
    <?php include('header.php');?>
     <!-- header -->
    
    
     <div class="item-image">
        <div class="item-text">
        </div>
    </div>

    <div class="container">
       
    
      
    <br><br><br>


 <!-- Table Product -->
 <div class="card" >
            <div class="card-header ">
            <strong><i class="fa fa-database"></i> ITEMS</strong>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="card-title float-left">Table OF Found Items</h5>
                </div>
            </div>
           

            <table class="table table-bordered table-hover table-striped">
                <thead >
                    <tr >
                        <th >Category</th>
                        <th>Color</th>
                        <th>Location</th>
                        <th>Status</th>
                        <th style="width: 10%;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                  <?php if($result->num_rows>0):?>
                     <?php foreach($result as $item): ?>
                <tr>
                        <td><?= $item['category'] ?></td>
                        <td><?= $item['color'] ?></td>
                        <td><?= $item['location'] ?></td>
                        <td><?= $item['status'] ?></td>
                        <td>
                            <a href="show.php?id=<?=$item['item_id']?>" class="btn btn-lg btn-light"><i class="fa fa-th-list"></i></a>                        
                        </td>
                </tr>
                    <?php endforeach ?>
                    <?php endif ?>

                </tbody>
            </table>
        </div>
      </div>
      <!-- End Table Product -->
      <br>






</div>  
<br><br><br><br><br><br>

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