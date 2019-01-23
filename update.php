
<?php
include('connect.php');
session_start(); 

if (!isset($_SESSION['UserName'])) 
{
    $_SESSION['msg'] = "You must log in first";
}
if (isset($_GET['logout']))
 {
    session_destroy();
    unset($_SESSION['UserName']);
    header("location: index.php");
}

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

    <title>UPDATE ITEM</title>


    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css3/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css3/style.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>	
 
<link rel="stylesheet" type="text/css"  href="css3/style.css">

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
       
    
      
    <br><br><br>

 <!-- Create Form -->
 <div class="card border-primary">
        
 <div class="card-header bg-primary text-white">
            <strong><i class="fa fa-edit"></i><a href="update.php" > EDIT ITEM</a></strong>
            </div>
            <br><br>
            <div class="card-body">
            <form class="form-horizontal" name="item_create" onsubmit="return insertValidation();" action="edit.php" method="post">

                <?php include('errors.php');?>
                <input type="hidden" name="id" value="<?=$row['item_id'] ?>">
               <!-- Text input-->
            <div class="form-group">
                        <label class="col-md-4 control-label" for="username">Category</label>  
                        <div class="col-md-5">
                        <input id="category" name="category" type="text" value="<?=$row['category'] ?>"   class="form-control input-md">
                            
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="username">Color</label>  
                        <div class="col-md-5">
                        <input id="color" name="color" type="text" value="<?=$row['color'] ?>"  class="form-control input-md">
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="username">Location</label>  
                        <div class="col-md-5">
                        <input id="location" name="location" type="text" value="<?=$row['location'] ?>"   class="form-control input-md">
                        </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="selectbasic">STATUS</label>
                        <div class="col-md-4">
                            <select id="stat" name="status" value="<?=$row['image'] ?>" class="form-control" >
                            <option value="lost" >LOST</option>
                             <option value="found" >FOUND</option>
                            </select>
                        </div>
                        </div>

                    

                        <!-- File Button --> 
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="image">Image</label>
                        <div class="col-md-4">
                            <input id="img" name="img" class="input-file" value="<?=$row['status'] ?>" type="file">
                        </div>
                        </div>

                   
  
                            <div class="form-group">
                            <label class="col-md-4 control-label" for="desc">Description</label>
                            <div class="col-md-4">                     
                                <input class="form-control" id="description" value="<?=$row['description'] ?>" name="description" type="text">
                            </div>
                            </div>

                        <!-- Button -->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="reg"></label>
                        <div class="col-md-4">
                            <button id="edit" name="edit" class="btn btn-default" type="submit">Save</button>
                        </div>
                        </div>
                    
                </form>

            </div>
        </div>
        <!-- End create form -->

 

   </div><!-- /.container -->



</div>  

</div>  
<br><br><br>
<br><br><br>

    <!-- Footer -->
    <?php include('footer.php');?>
    <!-- End Footer -->



  </body>
</html>