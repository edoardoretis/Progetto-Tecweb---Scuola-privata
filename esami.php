
<?php 
    session_start();
    
    $title = "Esami";
    include("presets/header.php"); //include la prima parte della pagina
    
    $activeItem = 3;
    include("presets/menu.php");
?>
    <div id="corpo">
    <h2>Esami</h2>
    <p>Qui puoi vedere <?php if(isset($_SESSION["user"])) echo " e <a href='prenotazioni_esami.php'>prenotare</a> "?> le date degli esami relative ai corsi.</p>
    <?php 
    include("scripts/connection.php");
    
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
        
        $oraAttuale = strtotime(date("d/m/y G:i:s"));

        echo "<h4>Corso Base (B0)</h4>\n";
        echo "\t<ul>\n";
        foreach($corsoBase as $i) {
            $inizio = strtotime($i["OraInizio"]);
            $fine = strtotime($i["OraFine"]);

            // if ($oraAttuale < $inizio) {
                echo "\t\t<li>" . date("d/m/y", $inizio) . " ";
                echo "Aula " . $i["idAula"] . ", dalle " . date("G:i", $inizio) . 
                    ' alle ' . date("G:i", $fine) . ";</li>\n";
            // }
        }

        echo "\t</ul>\n";
        echo "\t<h4>Corso Intermedio (B1)</h4>\n";
        echo "\t<ul>\n";
        foreach($corsoIntermedio as $i) {
            $inizio = strtotime($i["OraInizio"]);
            $fine = strtotime($i["OraFine"]);

            // if ($oraAttuale < $inizio) {
                echo "\t\t<li>" . date("d/m/y", $inizio) . " ";
                echo "Aula " . $i["idAula"] . ", dalle " . date("G:i", $inizio) . 
                    ' alle ' . date("G:i", $fine) . ";</li>\n";
            // }
        }

        echo "\t</ul>\n\t<h4>Corso Avanzato (B2)</h4>\n" . "\t<ul>\n";
        foreach($corsoAvanzato as $i) {
            $inizio = strtotime($i["OraInizio"]);
            $fine = strtotime($i["OraFine"]);

            // if ($oraAttuale < $inizio) {
                echo "\t\t<li>" . date("d/m/y", $inizio) . " ";
                echo "Aula " . $i["idAula"] . ", dalle " . date("G:i", $inizio) . 
                    ' alle ' . date("G:i", $fine) . ";</li>\n";
            // }
        }

        echo "\t</ul>\n\t<h4>Corso Madrelingua (M1)</h4>\n" . "\t<ul>\n";
        foreach($corsoMadreLingua as $i) {
            $inizio = strtotime($i["OraInizio"]);
            $fine = strtotime($i["OraFine"]);

            // if ($oraAttuale < $inizio) {
                echo "\t\t<li>" . date("d/m/y", $inizio) . " ";
                echo "Aula " . $i["idAula"] . ", dalle " . date("G:i", $inizio) . 
                    ' alle ' . date("G:i", $fine) . ";</li>\n";
            // }
        }
        echo "\t</ul>\n";
    }

    else 
        echo "<p>Non ci sono lezioni prenotate.</p>";

    if (isset($_SESSION["user"])) {
        $tabindexCounter++;
        echo "<a id='prenotazione' href='prenotazioni_esami.php' tabindex='$tabindexCounter'>Prenota un esame</a>";
    }

    ?>

    </div>
<?php
    include("presets/footer.php"); 
?>
</body>
</html>
