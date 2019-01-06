
<form action = <?php echo $_SERVER['PHP_SELF'] ; ?> method = 'POST'>
Search by zipcode: <input type = 'text' name = 'zipcode'> 
<input type = 'submit' value = 'Enter'>
</form>



<?php
//Determine if Zip code is valid zipcode -> 5 digits
$success = false;
$iszipentered = false;	
$zipcode = ''; //set to empty in case this variable is called without being set		
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
	$subject=$_POST['zipcode'];
	$pattern='/^\d{5}$/';
	$success = preg_match($pattern, $subject, $match);
	if($success)
	{
		$zipcode = $match[0];
		$iszipentered = $success;
		echo "ZIP ENTERED IS  " . $zipcode;
	}
}
?>


<?php 

?>