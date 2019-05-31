<?php
//big/includes/header-b.php
?>

<?php
include ("config.php");
?>

<!DOCTYPE html>
<html lang="en-us">
<title>BIG</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">


<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

<script src="js/script.js"></script>
<script src="js/lightbox-plus-jquery.js"></script>

<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/big.css" />
<link rel="stylesheet" href="css/form.css" />
    

<!-- topnav --> 
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
     </script>
</head>
  <body>
  <nav id="cssmenu">
  <ul>
     <li><a href="../index.php"><span><i class="fa fa-fw fa-bank"></i> WEB120 Portal</span></a></li>
     <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> Home</span></a></li>
     <li><a href="flexbox.php"><span>Flexbox</span></a></li>
     <li><a href="galleries.php"><span>Galleries</span></a></li>
     <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> Google</span></a>
        <ul>
           <li><a href="calendar.php"><span>Calendar</span></a></li>
           <li><a href="map.php"><span>Map</span></a></li>
           <li><a href="youtube.php"><span>YouTube</span></a></li>
        </ul>
     </li>
     <li><a href="shoppingcarts.php"><span>Shopping Carts</span></a></li>
     <li><a href="siteapp.php"><span>Site vs App</span></a></li>
     <li><a href="webcam.php"><span>Web Cam</span></a></li>
  </ul>
</nav>
