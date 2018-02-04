<?php 
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="it" lang="it">
<head>
    <title>' . $title . ' - English World</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="title" content="Scuola Privata - Home page" />
    <meta name="description" content="Scuola Privata per corsi di linguab inglese" />
    <meta name="keywords" content="Scuola privata, istruzione" />
    <meta name="author" content="Elisa, Edoardo, Timoty" />
    <meta name="language" content="italian it" />

    <link href="style/style.css" rel="stylesheet" type="text/css" media="screen"/>
    <link type="text/css" rel="stylesheet" href="small.css" media="hendheld, screen and(max-width:480px), only screen and(max-device-width:480px)"/>
    <link href="style/print.css" rel="stylesheet" type="text/css" media="print"/>

    <script type="text/javascript" src="ultima_modifica.js"></script>
</head>

<body>
    <div id="header">
    <img src="img/logo.jpg" class="valid" alt="Logo"/>
    <h1 xml:lang="en">English World</h1>
    <h2>Scuola privata di inglese per tutte le et&agrave;</h2>
    <h2>Direttore: Dr. Rossi Mario</h2>
    </div>';

    if ($title != "Home") 
        echo '<div id="path">Ti trovi in: <span xml:lang="en">Home</span> &gt;&gt; ' . $title;
    else 
        echo '<div id="path">Ti trovi in: <span xml:lang="en">' . $title . '</span>';

    include("scripts/benvenuto.php");
    echo '</div>';
?>