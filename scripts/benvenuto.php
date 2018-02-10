<?php 
/*
    if (isset($_SESSION["user"])) {
        echo '<span id="welcome">Benvenuto, ' . $_SESSION["user"] . '.</span>' 
        . "\n\t" . '<span id="logout" style="font-size: 0.6em">(<a href="scripts/logout.php">esci</a>)</span>';
    }
    else {
        echo "\n\t<span id=\"login\"><a href=\"login.php\">Accedi</a></span>";
    }*/

if (isset($_SESSION["user"])) {
    echo '<span id="login"><span id="welcome">Benvenuto, ' . $_SESSION["user"] . '.</span> <span style="font-size: 0.6em">(<a href="scripts/logout.php">esci</a>)</span></span>';
}
else {
    echo "\n<span id=\"login\"><a href=\"login.php\"> Accedi </a></span>";
}
?>