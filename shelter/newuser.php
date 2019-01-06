<html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$username=$_POST['username'];
	$username = str_replace(' ', '', $username); //remove whitespace
	$username = trim(preg_replace('/\s\s+/', ' ', $username)); //remove new lines, replace with single whitespace
	//$username=SHA1('username');
	$q="SELECT * FROM users WHERE username='$username'";   
	$r=mysqli_query($dbc, $q);
	$_SESSION["loggedin"] = "false";
	try
	{
		if (mysqli_num_rows($r) == 0)
		{
		   $q="insert into users (username) VALUES ('" . $username  . "');";   
			$r=mysqli_query($dbc, $q);
			echo "Successful, try logging in now.";
			$_SESSION["username"] = "$username";
			$_SESSION["loggedin"] = "true";
			header("Location: index.php"); /* Redirect browser */
		   exit();
		} 
		else
		{
			echo "Username taken Try again." ;
		}
	} 
	catch (Exception $e)
	{
		echo "Error. No Such username. Error: " . $e;
		
	} 
}
else
{
	include("functions/createrandomname.php");
	echo "<form action='register.php' method='post'>";
	echo "<h4><input type='hidden' name='username' value = '$uniqueusername'></h4>";
	echo "<h4>Your New User Name Will Be <br> <strong> $uniqueusername </strong></h4>";
	echo "<h4>Make Sure To Write It Down!</h4>";
	echo "<p><input type = 'submit' name= 'submit' value= 'Create New User' class = 'w3-button w3-teal'>";
	echo "</form> ";

}
?>
</html>






