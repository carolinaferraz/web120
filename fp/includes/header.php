<?php
//FP/includes/header.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>candy store</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link rel="stylesheet" href="jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/candy.css" />
<link rel="stylesheet" href="css/form.css" />

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>
<!-- START WRAPPER -->
<div class="wrapper">

<header>
  <h1><a href="index.php"> <span style="background-color: #fff5f5">&nbsp;candy store&nbsp;</span></a></h1>

  <p id="center"><a class="hover" href="index.php"><img src="img/candy.png" width="35" height="35" alt="candy"> <img src="img/candy2.png" width="74" height="35" alt="candy"></a></p>
  
  <nav>
    <ul class="topnav" id="topnav-id">
    <li><a class="nav" href="index.php">Home</a></li>
          <li><a class="nav" href="store.php">Store</a></li>
          <li><a class="nav" href="about.php">About Us</a></li>
          <li><a class="nav" href="contactme.php">Contact</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav><br>
</header>

<!-- JavaScript Top Navigation Response  --> 
<script>
function myFunction() {
  var x = document.getElementById("topnav-id");
  if (x.className === "topnav") {
    x.className += " responsive";
    } else {
      x.className = "topnav";
    }
}
</script>