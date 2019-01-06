
<?php 

if (NULL != (session_start()))
{
	unset($_SESSION['username']);
	session_destroy();
	include ("login.php");
}
?>


