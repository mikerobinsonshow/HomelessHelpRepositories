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
    <meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">
    <title>NYC HELPS</title>

    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">    
    
    
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="css/layouts/side-menu-old-ie.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel="stylesheet" href="css/layouts/side-menu.css">
        <!--<![endif]-->
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
            <h1>Emergency Resources</h1>
            <h2>Below are locations you can find NYC Link terminals. </h2>
        </div>

        <div class="header">


         <?php 
             echo "Type in a zipcode to search. <BR>";
            //Zip code form
            echo "<form action = 'nyclink.php' method = 'POST'>";
            echo "Search for Zipcode: <input type = 'text' name = 'postcode'>";
            echo "<input type = 'submit' name = 'submit' value = 'Search'>";
            echo "<br>";
        ?>


        <?php 
            $search = '';
            $tableName = 'linknyc';
            $postcode = '10001';
            //SAVE FORM
            if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == "true")
            {
                $thisPage = $_SERVER['PHP_SELF'];
                echo "<form action = $thisPage  method = 'POST'>";
                echo "Save Id: <input type = 'text' name = 'saveId'>";
                echo "<input type = 'submit' name = 'submit' value = 'Save'>"; 
            } 

            include 'functions/saveFunction.php';
            include 'Mapdisplay.php'; 
            echo "<br>";
        ?>
            </div>

            
        </div>
    </div>
</div>




<script src="js/ui.js"></script>

</body>
</html>

