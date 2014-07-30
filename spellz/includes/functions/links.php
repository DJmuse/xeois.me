<?php

function curPageURL() {
    $pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    }
    return $pageURL;
}

function findCurrentLink(){
    $currentLocation = $_SERVER['REQUEST_URI'];

    switch($currentLocation){
        case '/spellz/':
            $currentLink = 'home';
            return $currentLink;
            break;
        case '/spellz/index.php':
            $currentLink = 'home';
            return $currentLink;
            break;
        case '/spellz/includes/pages/firstTimeGuest.php':
            $currentLink = 'firstTimeGuest';
            return $currentLink;
            break;
        case '/spellz/includes/pages/spellPricing.php':
            $currentLink = 'spellPricing';
            return $currentLink;
            break;
        default:
            $currentLink = 'unknown';
            return $currentLink;
    }
}
$cLink = findCurrentLink();

?>