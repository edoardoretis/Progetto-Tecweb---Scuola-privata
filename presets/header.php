<?php 
$tabindexCounter = 0;
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="it" lang="it">
<head>
    <title>' . $title . ' - English World</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="title" content="Scuola Privata - '. $title .  '" />
    <meta name="description" content="Scuola Privata per corsi di lingua inglese" />
    <meta name="keywords" content="Scuola privata, istruzione, corsi, inglese, b1, b2, madrelingua, docente,
        professore, studente, studio" />
    <meta name="author" content="Elisa, Timoty, Edoardo" />
    <meta name="language" content="italian it" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="style/style.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="style/small.css" rel="stylesheet" type="text/css" media="handheld, screen and (max-width:480px), only screen and (max-device-width:480px)" /> 
    <link href="style/print.css" rel="stylesheet" type="text/css" media="print" />

    <script type="text/javascript" src="scripts/ultima_modifica.js"></script>
    <script type="text/javascript" src="scripts/responsive_menu.js"></script>
</head>

<body>
    <div id="header" class="group">
    <a id="hMenu" class="hMenu" href="#nav" onclick="responsiveMenu()">Menù</a>
    <img src="img/logo.jpg" class="valid" alt="Logo"/>
    <h1 xml:lang="en">English World</h1>
    <h2>Scuola privata di inglese per tutte le et&agrave;</h2>' . "\n\t";
    echo '<h2 id="affiliation"';
    if ($title != "Home")
        echo ' style="visibility: hidden"'; 
    
    echo '>Direttore: <abbr title="Dottor">Dr.</abbr> Rossi Mario</h2>' . "\n";
    echo '</div>';

    echo "\n\t";
    if ($title != "Home") 
        echo '<div id="path" class="group">Ti trovi in: <span xml:lang="en">Home</span> &gt;&gt; ' . $title;
    else 
        echo '<div id="path" class="group">Ti trovi in: <span xml:lang="en">' . $title . '</span>';

    include("scripts/benvenuto.php");
    echo '</div>' . "\n\t";
?>