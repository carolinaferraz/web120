<?php
//includes/portal-config.php

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

// echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

// echo THIS_PAGE;

// die;

switch(THIS_PAGE){

    case 'index.php':
        $title = "BIG";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
    
    case 'calendar.php':
        $title = "Big -  Calendar";
        $logo = "fa-paper-plane-o";
        $PageID = 'Calendar';
    break;

    case 'flexbox.php':
    $title = "BIG - Flexbox";
    $logo = "fa-universal-access";
    $PageID = 'Flexbox';
    break;

    case 'galleries.php':
        $title = "BIG - Galleries";
        $logo = 'fa-sitemap';
        $PageID = 'Galleries';        
    break;

    case 'google.php':
        $title = "BIG - Google";
        $logo = 'fa-sitemap';
        $PageID = 'Google';        
    break;

    case 'Map.php':
        $title = "BIG - Map";
        $logo = 'fa-sitemap';
        $PageID = 'Galleries';        
    break;

    case 'shoppingcarts.php':
        $title = "BIG - Shopping Carts";
        $logo = 'fa-sitemap';
        $PageID = 'Shopping Carts';        
    break;

    case 'siteappp.php':
        $title = "BIG - Site vs App";
        $logo = 'fa-sitemap';
        $PageID = 'Site vs App';        
    break;

    case 'youtube.php':
    $title = "BIG - YouTube";
    $logo = 'fa-sitemap';
    $PageID = 'YouTube';        
    break;

    case 'siteappp.php':
    $title = "BIG - Site vs App";
    $logo = 'fa-sitemap';
    $PageID = 'Site vs App';        
    break;

    case 'webcam.php':
    $title = "BIG - Webcam";
    $logo = 'fa-sitemap';
    $PageID = 'Webcam';        
    break;


    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
   }