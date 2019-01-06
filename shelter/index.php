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
    \<link rel="stylesheet" href="js/description.css">    
    <script src="js/jquery-3.3.1.min"></script>

    
    
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
            <h2>Everything is going to be fine. </h2>
        </div>

        <div class="header">
            <h2 class="content-subhead" align="center">I need...</h2>
            <a  href ="dropinshelter.php" class="w3-button w3-block w3-teal w3-padding-large " id = "index1" style="height:75px ">Adult Drop In Shelter</a>
            <span id="desc1" class = "descriptions">Drop in shelters for adults </span>
            <a  href ="healthcare.php" id = 'index2' class="w3-button w3-block w3-green w3-padding-large" style="height:75px">Healthcare</a>
            <p id="desc2" class = "descriptions">Free mental and physical healthcare </p>
            <a  href ="jobtraining.php" id = 'index3' class="w3-button w3-block w3-yellow w3-padding-large" style="height:75px">Job Training</a>
            <p id="desc3" class = "descriptions">Free Job training programs at all Housingwrosk locations </p>  
            <a  href ="legalhelp.php" id = 'index4' class="w3-button w3-block w3-orange w3-padding-large" style="height:75px">Legal</a>
            <p id="desc4" class = "descriptions">Free legal help for all patients of Housingworks </p>
            <a  href ="runawayyouth.php" id = 'index5' class="w3-button w3-block w3-red w3-padding-large" style="height:75px">Runaway Youth</a>
            <p id="desc5" class = "descriptions"> Emergency drop in shelters for at risk youth</p> 
            <a  href ="nyclink.php" id = 'index6' class="w3-button w3-block w3-purple w3-padding-large" style="height:75px">NYC Link Locations</a> 
            <p id="desc6" class = "descriptions">Free Wifi available throughout New York </p>
            </div>

            
        </div>
    </div>
</div>





</body>
</html>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

$(document).ready(function(){
    $(".descriptions").hide();
  $("#index1").hover(function(){
    $("#desc1").show();
  },
  function(){   
    $("#desc1").hide();
  }); 

  $("#index2").hover(function(){
    $("#desc2").show();
  },
  function(){   
    $("#desc2").hide();
  }); 

  $("#index3").hover(function(){
    $("#desc3").show();
  },
  function(){   
    $("#desc3").hide();
  }); 

  $("#index4").hover(function(){
    $("#desc4").show();
  },
  function(){   
    $("#desc4").hide();
  }); 

  $("#index5").hover(function(){
    $("#desc5").show();
  },
  function(){   
    $("#desc5").hide();
  }); 

  $("#index6").hover(function(){
    $("#desc6").show();
  },
  function(){   
    $("#desc6").hide();
  }); 




});
</script>
</head>
<body>

<p id="p1">This is a paragraph.</p>