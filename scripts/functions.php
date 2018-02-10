<?php

function validateInput($var) {
    $var = trim($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);
    return $var;
}

//controlla se il formato data è corretto
function validateDate($date) { 
    if (false === strtotime($date)) { 
        return false;
    } 
    list($year, $month, $day) = explode('-', $date); 
    return checkdate($month, $day, $year);
}

//controlla se il formato ore è corretto
function validateTime($timeStr){
    $dateObj = DateTime::createFromFormat('d.m.Y H:i', "10.10.2010 " . $timeStr);

    if ($dateObj !== false && $dateObj && $dateObj->format('G') == 
        intval($timeStr)){
        return true;
    }
    return false;
}

?>