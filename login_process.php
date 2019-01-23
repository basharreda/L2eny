<?php
include('connect.php');
session_start();

// initializing variables
$username = "";
$pass = "";
$errors = array(); 


// connect to the database
// This example uses PDO (PHP Data Object)
// $server_name = "localhost";
// $user_name   = "root";
// $password    = "01271553762";
// $database    = "project";
$db = mysqli_connect('localhost', 'root', '01271553762', 'project');


// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['user']);
    $password = mysqli_real_escape_string($db, $_POST['pass']);
  
    if (empty($username)) 
    {
        array_push($errors, "Username is required");
    }
    if (empty($password)) 
    {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) 
    {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE UserName='".$username."' AND Password='".$password."' ";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) !=0) 
        {
          $_SESSION['UserName'] = $username;
          $_SESSION['success'] = "logged_in";
          header('location: create.php');
        }
        else 
        {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
  


?>