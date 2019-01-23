

<?php

include('connect.php');
if(isset($_GET['id']))
{
    try{
        echo "<center style='color:red'> Inserting Multi Record Using Binding... </center><br>";
        echo "<center> Preparing ... </center><br>";
        $stmt = $mysql_connection->prepare("DELETE FROM items WHERE item_id=? limit 1");
        echo "<center> Binding ... </center><br>";
        if (!$stmt)
        {
            die("<center> Binding Failed: " . $stmt . " " . $mysql_connection->error . " </center><br>");
        }
        $stmt->bind_param("i",$_GET['id']);
        echo "<center> Executing ... </center><br>";
        // set parameters and execute
        if (!($stmt->execute() === TRUE))
        {
            die("<center> deletion Failed: " . $mysql_statement . " " . $mysql_connection->error . " </center><br>");
        }
        header("Location:profile.php?status=deleted");

        }
        catch(Exception $e)
        {
            echo "ERROR ". $e->getMessage();
            exit();
        }
}
?>



