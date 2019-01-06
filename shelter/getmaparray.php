<html>
<?php  require_once ('../db/mysqli_connect.php'); // Connect to the db. ?> 
<?php

	if (!isset($postcode))$postcode = '%';
	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		if (isset($_POST['postcode']))
		{
			$postcode = $_POST['postcode'];
			if (isset($_POST['saveId']) && strlen($_POST['saveId']) == 0 && strlen($postcode) != 5  ) echo "Invalid Zipcode.";
		}
	}
	//This needs a search variable sent from parent page!
	$q="SELECT * FROM $tableName WHERE name like '%$search%' AND zipcode LIKE '%$postcode%'"; //change back to search
	//echo $q;
	//if (isset($_POST['zipcode'])) $q = $q . " AND zipcode = '" . $_POST['zipcode'] . "'";  
	$r=mysqli_query($dbc, $q);
	try
	{
		//if results are found
		if (mysqli_num_rows($r) > 0)
		{
			//create an array and append the information from each row found matching search
			while ($row=mysqli_fetch_array($r))
	   		{
			   $id = $row['id'];
			   $name = $row['name'];
			   $zipcode = $row['zipcode'];
			   $latitude = $row['latitude'];
			   $longitude = $row['longitude'];
			   $address = $row['address'];
			   $comments = $row['comments'];
			   //"locations[] =" APPENDS an array, it does not overwrite. This statement iteratevley appends all valudes to end of array locations[]
			   $locations[] = array( //creates locations array to hold all data. Will be passed onto maps
			   	'id' => $id,
			   	'name' => $name,
			   	'zipcode' => $zipcode,
			   	'latitude' => $latitude,
			   	'longitude' => $longitude,
			   	'address' => $address,
			   	'comments' => $comments
			   	);
			}
			//foreach ($locations as $location)//Repeat back the list, this can be deleted later
		    //{
		   		//echo $location['name'];
			    //echo "<br>";
		    //}
		} 
		else
		{
			echo "Incorrect search" ;
			header("Location: index.php"); /* Redirect browser */

		}
	    
	} 
	catch (Exception $e)
	{
		echo "Error. No Such search. Error: " . $e;
		
	} 

	?>

	
</html>







