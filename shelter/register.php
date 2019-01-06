<?php if (!(isset($_SESSION)))
{ 
    session_start(); 
}
?>
<!doctype html>
<html lang="en">
<head>
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    <link rel="stylesheet" href="css/layouts/side-menu.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">  
    <?php  require ('../db/mysqli_connect.php'); // Connect to the db. ?>

</head>
<body>
<?php include "header.php";?>
<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="main">
        <div class="header">
            <h1>Register</h1>
            <h2>This is your new username</h2>
            <?php  include ('newuser.php'); ?>
        </div>   
    </div>
</div>

<script src="js/ui.js"></script>

</body>
</html>