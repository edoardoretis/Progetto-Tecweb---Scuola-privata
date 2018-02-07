
<?php 
    session_start();
    
    $title = "Esami";
    include("presets/header.php"); //include la prima parte della pagina
    
    $activeItem = 3;
    include("presets/menu.php");
?>
    <div id="corpo">
    <h2>Esami</h2>
    <p>Qui puoi vedere <?php if(isset($_SESSION["user"])) echo " e <a href='#'>prenotare</a> "?> le date degli esami.</p>
    <?php 
    $server = "localhost";
    $serverUser = "root";
    $serverPassword = "";
    $db = "Tecweb";
    /*
    Per accedere dal server:
    $server = "localhost";
    $serverUser = "tgranzie";
    $serverPassword = "Yaiyahqu9guz9oox";
    $db = "tgranzie";
    */
    $conn = new mysqli($server,$serverUser,$serverPassword,$db);
    
    // Check connection
    if ($conn->connect_error)
        die("Connection failed: " . $conn->connect_error);
    
    //query
    $sql = "SELECT DISTINCT esami.idCorso, idAula, Nomecorso, OraInizio, OraFine FROM esami JOIN corsi ON esami.IdCorso = corsi.IdCorso ORDER BY OraInizio"; 
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        $corsoBase = array();
        $corsoIntermedio = array();
        $corsoAvanzato = array();
        $corsoMadreLingua = array();

        while ($row = $result->fetch_assoc()) {
            if ($row["Nomecorso"] == "Base")
                array_push($corsoBase, $row);
            else if ($row["Nomecorso"] == "Intermedio")
                array_push($corsoIntermedio, $row);
            else if ($row["Nomecorso"] == "Avanzato")
                array_push($corsoAvanzato, $row);
            else 
                array_push($corsoMadreLingua, $row);
        }
        $conn->close();
        
        if (isset($_SESSION["prenotazioneOk"])) {
            echo "<p class='formProcessed'>" . $_SESSION["prenotazioneOk"] . "</p>";
            unset($_SESSION["prenotazioneOk"]);
        }


        //script presente per non stampare lezioni i cui orari sono già passati
        
        echo "<ul class='listTitle'><li>Corso Base (B0)</h3>" . "<ul>";
        
        $oraAttuale = strtotime(date("d/m/y G:i:s"));

        foreach($corsoBase as $i) {
            $inizio = strtotime($i["OraInizio"]);
            $fine = strtotime($i["OraFine"]);

            // if ($oraAttuale < $inizio) {
                echo "<li>" . date("d/m/y", $inizio) . " ";
                echo "Aula " . $i["idAula"] . ", dalle " . date("G:i", $inizio) . 
                    ' alle ' . date("G:i", $fine) . ";</li>";
            // }
        }

        echo "</li></ul><li>Corso Intermedio (B1)" . "<ul>";
        foreach($corsoIntermedio as $i) {
            $inizio = strtotime($i["OraInizio"]);
            $fine = strtotime($i["OraFine"]);

            // if ($oraAttuale < $inizio) {
                echo "<li>" . date("d/m/y", $inizio) . " ";
                echo "Aula " . $i["idAula"] . ", dalle " . date("G:i", $inizio) . 
                    ' alle ' . date("G:i", $fine) . ";</li>";
            // }
        }

        echo "</li></ul><li>Corso Avanzato (B2)" . "<ul>";
        foreach($corsoAvanzato as $i) {
            $inizio = strtotime($i["OraInizio"]);
            $fine = strtotime($i["OraFine"]);

            // if ($oraAttuale < $inizio) {
                echo "<li>" . date("d/m/y", $inizio) . " ";
                echo "Aula " . $i["idAula"] . ", dalle " . date("G:i", $inizio) . 
                    ' alle ' . date("G:i", $fine) . ";</li>";
            // }
        }

        echo "</li></ul><li>Corso Madrelingua (M2)" . "<ul>";
        foreach($corsoMadreLingua as $i) {
            $inizio = strtotime($i["OraInizio"]);
            $fine = strtotime($i["OraFine"]);

            // if ($oraAttuale < $inizio) {
                echo "<li>" . date("d/m/y", $inizio) . " ";
                echo "Aula " . $i["idAula"] . ", dalle " . date("G:i", $inizio) . 
                    ' alle ' . date("G:i", $fine) . ";</li>";
            // }
        }

        echo "</ul></li></ul>";
    }

    else 
        echo "<p>Non ci sono lezioni prenotate.</p>";

    if (isset($_SESSION["user"])) {
        echo "<a id='prenotazione' href='prenotazioni_esami.php'>Prenota un esame</a>";
    }

    ?>

    </div>
<?php
    include("presets/footer.php"); 
?>
</body>
</html>
