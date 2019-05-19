<?php
//includes/header.php
?>

<?php
include ("../../includes/portal-config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>WEB120 Portal</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>

<script src="../js/lightbox.js"></script>

<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />
<link rel="stylesheet" href="css/lightbox.css" />

</head>

<body>
<!-- START WRAPPER -->
<div class="wrapper">

<header>
  <h1><a href="../index.php"><i class="logo fa fa-home"></i> Carolina Ferraz SCC WEB120 Portal</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <li><a href="../index.php" class="selected">Welcome</a></li>
      <li><a href="index.php">Big</a></li>
      <li><a href="../aia.php">AIA</a></li>
      <li><a href="../flowchart.php">Flowchart</a></li>
      <li><a href="../fp/index.php">Final Project</a></li>
      <li><a href="../contactme.php">Contact Carolina</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
<h2 class="pageID"><?=$pageID?></h2>