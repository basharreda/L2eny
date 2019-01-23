
<?php
include('connect.php');

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
if(isset($_SESSION['UserName']))
{
$wewe=$_SESSION['UserName'];
}
$db = mysqli_connect('localhost', 'root', '01271553762', 'project');

    $user_check_query = "SELECT id FROM users WHERE UserName='$wewe' limit 1 ";
    $result2 = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result2);
    $userr= $user['id'];
    $mysql_statement = "SELECT * FROM items where user_up='$userr' ";
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
 

    <script src="confirm_items.js"></script>
  </head>

  <body>


     <!-- header -->
    <?php include('header.php');?>
     <!-- header --> 
     <div class="item3-image">
        <div class="item3-text">
        </div>
    </div>
    <div class="container">    
   
    <br>
    <br>
    <br>

 
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
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Color</th>
                        <th>Location</th>
                        <th>Status</th>
                        <th style="width: 20%;">Actions</th>
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
                            <a href="show.php?id=<?=$item['item_id']?>" class="btn btn-sm btn-light"><i class="fa fa-th-list"></i></a>
                            <a href="update.php?id=<?=$item['item_id']?>" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                            <a href="#" class="btn btn-sm btn-danger" data-toggle="modal"
                            data-target="#modal-delete-<?=$item['item_id']?>"><i class="fa fa-trash"></i></a>
                                       <?php include('modal.php') ?>
                        
                        
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