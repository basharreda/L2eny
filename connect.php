
<?php

$server_name = "localhost";
$user_name   = "root";
$password    = "01271553762";
$database    = "project";


$mysql_connection = new mysqli($server_name, $user_name, $password,$database );


// Check connection
if ($mysql_connection->connect_error) 
{
    die("<center> Connection Failed: " . $mysql_connection->connect_error . " </center><br>");
}


class connection
{
	var $host="localhost";
	var $db="project";
	var $username="root";
	var $password="01271553762";
	
	var $connect;
	
	function connect()
	{	
		$this->connect=mysql_connect($this->host,$this->username,$this->password);
		mysql_select_db($this->db);		
	}
	
	function disconnect()
	{
		if (isset($this->connect))
		{
			mysql_close($this->connect);
		}
	}
	
	
}

?>
   
   