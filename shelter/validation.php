<html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{

	$username=$_POST['username'];
	$_SESSION["loggedin"] = "false";

	$q="SELECT username FROM users WHERE username =  ? ";  
	$stmt=mysqli_prepare($dbc,$q);
	mysqli_stmt_bind_param($stmt,'s',$username);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_bind_result($stmt,$username);
	if(mysqli_stmt_fetch($stmt))
	{
	   echo"<p> Welcome $username! </p>";
	   $user = $row['username'];
	   $_SESSION["loggedin"] = "true";	
	   $_SESSION['username'] = $username;
	   echo "<p> $username successfully login!</p>";
	   header("Location: saves.php"); /* Redirect browser */
	   exit();
	}
	else
	{
		$_SESSION["loggedin"] = "false";
		header("Location: login.php"); /* Redirect browser */
	}

}
else
{
	?>
	<div align = "center">
	<form action="login.php" method="post">
	<p ><input type="text" name="username"></p>
	<p><input type="submit" name="submit" value="Enter" class = "w3-button w3-teal"></p>
	</form> 
	</div>
	<?php
}
?>
</html>






    
