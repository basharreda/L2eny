<?php

include('connect.php');
session_start(); 

if (!isset($_SESSION['UserName'])) 
{
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['UserName']);
    header("location: index.php");
}
if(isset($_SESSION['UserName']))
{

$wewe=$_SESSION['UserName'];

}

$catg = "";
$color = "";
$status    = "";
$location = "";
$desc = "";
$img="";
$userr="";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', '01271553762', 'project');


if (isset($_POST['create'])) 
{
    // receive all input values from the form
    $catg   = $_POST['category'];
    $color = $_POST['color'];
    $status    =$_POST['status'];
    $location =  $_POST['location'];
    $desc =  $_POST['description'];
    $img = $_POST['img'];
    $user_check_query = "SELECT id FROM users WHERE UserName='$wewe' limit 1 ";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user) 
    { // if user exists
    
        if ($user['id'] ==" " ) 
        {
        array_push($errors, "ERROR in ID");
        }
        else
        {

            $userr= mysqli_real_escape_string($db,$user['id']);
        }
    }


    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($catg)) { array_push($errors, "category is required"); }
    if (empty($color)) { array_push($errors, "color is required"); }
    if (empty($status)) { array_push($errors, "status is required"); }
    if (empty($location)) { array_push($errors, "location is required"); }
    if (empty($userr)) { array_push($errors, "userr is ERROR"); }
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) 
    {

        $query = "INSERT INTO items (Category,Color,Location,Status,image,descriptoin,user_up) 
            VALUES('$catg','$color','$location', '$status','$img','$desc','$userr')";
        mysqli_query($db, $query);
        $_SESSION['item'] = $catg;
        $_SESSION['success'] = "created";
        header('location: create.php');
    }
}
else
    {
        // header('location: create.php?status=fail_create');
        // exit();
    }
/////////////////////////////////////////////////



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
    
     <div class="item2-image">
        <div class="item2-text">
        </div>
    </div>

    <div class="container">
       
    
      
    <br><br><br>




 <!-- Create Form -->
 <div class="card">
            <div class="card-header ">
            <strong><i class="fa fa-plus"></i> Add New ITEM</strong>
            </div>
            </div>
<br><br>
    <form class="form-horizontal" name="item_create" onsubmit="return insertValidation();" action="" method="post">
    <?php include('errors.php'); ?>



            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="username">Category</label>  
            <div class="col-md-5">
            <input id="category" name="category" type="text" placeholder="ENTER category" class="form-control input-md">
                
            </div>
            </div>

             <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="color">Color</label>  
            <div class="col-md-5">
            <input id="color" name="color" type="text" placeholder="ENTER color" class="form-control input-md">
            </div>
            </div>

             <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="color">Location</label>  
            <div class="col-md-5">
            <input id="location" name="location" type="text" placeholder="ENTER location" class="form-control input-md">
            </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
            <label class="col-md-4 control-label" for="selectbasic">STATUS</label>
            <div class="col-md-4">
                <select id="stat" name="status" class="form-control">
                <option value="lost" >LOST</option>
                <option value="found" >FOUND</option>
                </select>
            </div>
            </div>

             <!-- File Button --> 
             <div class="form-group">
            <label class="col-md-4 control-label" for="filebutton">Image</label>
            <div class="col-md-4">
                <input id="img" name="img" class="input-file" type="file">
            </div>
            </div>


            <!-- Textarea -->
            <div class="form-group">
            <label class="col-md-4 control-label" for="textarea">Description</label>
            <div class="col-md-4">                     
                <input class="form-control" id="description" name="description" type="text">
            </div>
            </div>


            <!-- Button -->
            <div class="form-group">
            <label class="col-md-4 control-label" for="reg"></label>
            <div class="col-md-4">
                <button id="create" name="create" class="btn btn-default" type="submit">Create</button>
            </div>
            </div>

           
            </form>















        </div>  
        
    <br><br><br>
    <br><br><br>
    <!-- Footer -->
    <?php include('footer.php');?>
    <!-- End Footer -->






  </body>
</html>