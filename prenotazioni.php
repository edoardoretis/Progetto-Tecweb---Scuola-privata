<?php 
    session_start();
    if (!isset($_SESSION["user"]))
        header("Location: lezioni.php");
    
    include("presets/header.php");
?>

    <div id="path">Ti trovi in: Area prenotazione
    <?php 
        include("scripts/benvenuto.php");
    ?>
    </div>

    <div id="nav">
        <a href="#corpo" id="skipNav">Salta la navigazione</a> <!-- position: absolute; height: 0; overflow: hidden; -->        
        <ul>
            <li><a href="home.php" tabindex="1"><span xml:lang="en">Home</span></a></li>
            <li><a href="corsi.php" tabindex="2">Corsi</a></li>
            <li><a href="lezioni.php" tabindex="3">Lezioni</a></li>
            <li><a href="esami.php" tabindex="4">Esami</a></li>
            <li><a href="contatti.php" tabindex="5">Contatti</a></li>
        </ul>
    </div>
    <div id="corpo">
        <h2>Area prenotazione lezioni</h2>
        <form method="get" action="validate_prenotation.php">
        <fieldset>

        </fieldset>
        </form>
    </div>
    <?php
    include("presets/footer.php"); 
    ?>
</body>
</html>