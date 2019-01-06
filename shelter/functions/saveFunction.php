<?php
require_once ('../db/mysqli_connect.php'); // Connect to the db.
ini_set("display_errors", "off");
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == "true")
{              
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && (isset($_POST['saveId'])))
	{
		$saveId = $_POST['saveId'];
		$username = $_SESSION["username"];
		$q="SELECT * FROM $tableName WHERE id =  $saveId" ; 
		$r=mysqli_query($dbc, $q);
		try
		{
			if (mysqli_num_rows($r) > 0)
			{
				while ($row=mysqli_fetch_array($r))
				{
		   	   	   $id = $row['id'];
				   $name = $row['name'];
				   $zipcode = $row['zipcode'];
				   $latitude = $row['latitude'];
				   $longitude = $row['longitude'];
				   $address = $row['address'];
				   $comments = $row['comments'];
				   $query="SELECT * FROM saves where username = '$username' && locationid = $id" ; 
				   $row=mysqli_query($dbc, $q);
				   if (mysqli_num_rows($row) < 2)
				   {
					   echo "<br>" . "Saved " . $name . "<br>";
					   $q="INSERT INTO `database350`.`saves`
						(`name`,
						`id`,
						`tableName`,
						`locationName`,
						`address`,
						`comments`,
						`zipcode`,
						`latitude`,
						`longitude`)
						VALUES
						('$username',
						$id,
						'$tableName',
						'$name',
						'$address',
						'$comments',
						'$zipcode',
						$latitude,
						$longitude
						);";
					}
				}
			   
			}
			else 
			{
				if (strlen($_POST['postcode']) == 0 ) echo "Could not find that Id, try again.";
				
			}
			
		} 
		catch (Exception $e)
		{
			echo "Error. No such Save Id exists. " . $e;
			
		}
		$r=mysqli_query($dbc, $q); 
	}
}