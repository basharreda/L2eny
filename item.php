<?
require_once "connect.php";

class item extends connection
{
	function select_all()
	{
		parent::connect();
		$sql = "SELECT * FROM items";
		$result=mysql_query($sql);
		$num_of_rows=mysql_num_rows($result);
		for($i=0;$i<$num_of_rows;$i++)
		{
			$row=mysql_fetch_array($result);
			$arr[$i][0]=$row["item_id"];
			$arr[$i][1]=$row["category"];
			$arr[$i][2]=$row["color"];
			$arr[$i][3]=$row["location"];
			$arr[$i][4]=$row["status"];
			$arr[$i][5]=$row["description"];
			$arr[$i][6]=$row["user_up"];
			$arr[$i][6]=$row["reg_date"];
		}
		parent::disconnect();
		return $arr;
		
	}
	
	
	function select_by_id($id)
	{
		parent::connect();
		$sql = "SELECT * FROM items where item_id=$id";
		$result=mysql_query($sql);
		$num_of_rows=mysql_num_rows($result);

			$row=mysql_fetch_array($result);
			$arr[0]=$row["item_id"];
			$arr[1]=$row["category"];
			$arr[2]=$row["color"];
			$arr[3]=$row["location"];
			$arr[4]=$row["status"];
			$arr[5]=$row["description"];
			$arr[6]=$row["user_up"];
			$arr[6]=$row["reg_date"];
			
		
		parent::disconnect();
		return $arr;
		
	}
	
	function select_by_uploader($id)
	{
		parent::connect();
		$sql = "SELECT * FROM items where user_up=$id";
		$result=mysql_query($sql);
		$num_of_rows=mysql_num_rows($result);

			$row=mysql_fetch_array($result);
			$arr[0]=$row["item_id"];
			$arr[1]=$row["category"];
			$arr[2]=$row["color"];
			$arr[3]=$row["location"];
			$arr[4]=$row["status"];
			$arr[5]=$row["description"];
			$arr[6]=$row["user_up"];
			$arr[6]=$row["reg_date"];
			
		
		parent::disconnect();
		return $arr;
		
	}
	
	function delete_by_id($id)
	{
		parent::connect();
		$sql = "delete from items where item_id=$id";
		$result=mysql_query($sql);
		parent::disconnect();
		if ($result)
		{	
			return true;
		}
		else
		{
			return false;
		}
		
		
		
	}

	function delete_by_uploader($id)
	{
		parent::connect();
		$sql = "delete from items where user_up=$id";
		$result=mysql_query($sql);
		parent::disconnect();
		if ($result)
		{	
			return true;
		}
		else
		{
			return false;
		}
		
		
		
	}
	
	
	
}


?>