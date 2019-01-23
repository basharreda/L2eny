

<?php

include('connect.php');
session_start(); 



$catg = "";
$color = "";
$status    = "";
$location = "";
$desc = "";
$img="";
$id2="";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', '01271553762', 'project');


if (isset($_POST['edit'])) 
{
    // receive all input values from the form
    $catg   = $_POST['category'];
    $color = $_POST['color'];
    $status    =$_POST['status'];
    $location =  $_POST['location'];
    $desc =  $_POST['description'];
    $img = $_POST['img'];
    $id2= $_POST['id'];




    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($catg)) { array_push($errors, "category is required"); }
    if (empty($color)) { array_push($errors, "color is required"); }
    if (empty($status)) { array_push($errors, "status is required"); }
    if (empty($location)) { array_push($errors, "location is required"); }
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) 
    {

            $mysql_statement = "UPDATE items 
                                SET Category='$catg',
                                    Color='$color',
                                    Location='$location',
                                    Status='$status',
                                    image='$img',
                                    descriptoin='$desc'
                                WHERE item_id='$id2' ";
            if (!($mysql_connection->query($mysql_statement) === TRUE))
            {
                echo "<center> Update Failed : " . $mysql_connection->error . " </center><br>";
            }
        $_SESSION['item'] = $catg;
        $_SESSION['success'] = "updated";
        header('location: profile.php');
    }
}
else
    {
        // header('location: create.php?status=fail_create');
        // exit();
    }
/////////////////////////////////////////////////



?>
