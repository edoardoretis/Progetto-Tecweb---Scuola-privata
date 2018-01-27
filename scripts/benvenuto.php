<?php 
        if (isset($_SESSION["user"])) {
            echo '<span id="login">Benvenuto, ' . $_SESSION["user"] . '. <span style="font-size: 0.6em">(<a href="scripts/logout.php">esci</a>)</span></span>';
        }
        else {
            echo '<span id="login"><a href="login.php"> Accedi </a></span>';
        }
    ?>