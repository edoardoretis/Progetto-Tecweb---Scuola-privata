<?php 

if (isset($_SESSION["user"])) {
    $tabindexCounter++;
    echo '<span id="login"><span id="welcome">Benvenuto, ' . $_SESSION["user"] 
    . '.</span> <span style="font-size: 0.6em">(<a href="scripts/logout.php" tabindex="' . $tabindexCounter
    . '">esci</a>)</span></span>';
}
else if ($title != "Login") {
    $tabindexCounter++;
    echo "\n<span id=\"login\"><a href=\"login.php\" tabindex=\"$tabindexCounter\">Accedi</a></span>";
}
?>