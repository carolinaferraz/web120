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
        $title = "Carolina's WEB120 Portal";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
    
    case 'contactme.php':
        $title = "Carolina's WEB120 Contact Page";
        $logo = "fa-paper-plane-o";
        $PageID = 'Contact Carolina';
    break;

    case 'aia.php':
    $title = "Carolina's Final Project AIA (Client work)";
    $logo = "fa-universal-access";
    $PageID = 'AIA';
    break;

    case 'flowchart.php':
        $title = "Carolina's Flowchart Page";
        $logo = 'fa-sitemap';
        $PageID = 'Flowchart';        
    break;


    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
   }



$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = 'AIA';
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Me";

// makeLinks() 

function makeLinks ($nav1) {
    
    $myReturn = '';
    foreach($nav1 as $url => $text) {
        
        if($url == THIS_PAGE) {
            $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";
        } else {
            $myReturn .= "<li><a href=\"$url\">$text</a></li>";
        }   
    }    return $myReturn; 
}
?>