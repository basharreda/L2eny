<?php

include('connect.php');
session_start();


// initializing variables
$username = "";
$phone = "";
$email    = "";
$country = "";
$city = "";
$password_1="";
$password_2="";

$errors = array(); 


// connect to the database
// This example uses PDO (PHP Data Object)
// $server_name = "localhost";
// $user_name   = "root";
// $password    = "01271553762";
// $database    = "project"

$db = mysqli_connect('localhost', 'root', '01271553762', 'project');

if (isset($_POST['reg_user'])) 
  {
        // receive all input values from the form
        $username   =  mysqli_real_escape_string($db,$_POST['user']);
        $phone      = mysqli_real_escape_string($db, $_POST['phone']);
        $email      = mysqli_real_escape_string($db,$_POST['email']);
        $country    = mysqli_real_escape_string($db,$_POST['country']);
        $city       = mysqli_real_escape_string($db, $_POST['city']);
        $password_1 = mysqli_real_escape_string($db, $_POST['password']);
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


        // form validation: ensure that the form is correctly filled ...
        // by adding (array_push()) corresponding error unto $errors array
        if (empty($username)) { array_push($errors, "username is required"); }
        if (empty($phone)) { array_push($errors, "phone is required"); }
        if (empty($email)) { array_push($errors, "Email is required"); }
        if (empty($country)) { array_push($errors, "country is required"); }
        if (empty($city)) { array_push($errors, "city is required"); }
        if (empty($password_1)) { array_push($errors, "Password is required"); }
        if (empty($password_2)) { array_push($errors, "Password is required"); }
        
        if ($password_1 != $password_2) 
        {
        array_push($errors, "The two passwords do not match");
        }

        // first check the database to make sure 
        // a user does not already exist with the same username and/or email
        $user_check_query = "SELECT * FROM users WHERE UserName='$username' OR Email='$email' ";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        echo $user;
    
        if ($user) 
        { // if user exists
   
          if ($user['UserName'] === $username ) 
          {
            array_push($errors, "Username already exists");
          }
          if ($user['Email'] === $email) 
          {
            array_push($errors, "email already exists");
          }

      
        }

        // Finally, register user if there are no errors in the form
        if (count($errors) == 0) 
        {
         $password = md5($password_1);//encrypt the password before saving in the database

          $query = "INSERT INTO users (UserName,Phone,Email,Country,City,Password) 
                VALUES('$username','$phone', '$email','$country','$city', '$password')";
          mysqli_query($db, $query);
          $_SESSION['UserName'] = $username;
          $_SESSION['success'] = "logged_in";
          header('location: create.php');
         }
  }
else
        {
         
        }
/////////////////////////////////////////////////





?>