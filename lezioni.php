
<?php 
    session_start();
    
    $title = "Lezioni";
    include("presets/header.php"); //include la prima parte della pagina
    
    $activeItem = 2;
    include("presets/menu.php");
?>
    <div id="corpo">
    <h2>Orari delle lezioni</h2>
    <?php
    if (isset($_SESSION["prenotazioneOk"])) {
        echo "<p class='formProcessed'>" . $_SESSION["prenotazioneOk"] . "</p>";
        unset($_SESSION["prenotazioneOk"]);
    }
    ?>
    <p>Qui puoi vedere <?php if(isset($_SESSION["user"])) echo " e <a class='stdLink' href='prenotazioni.php'>prenotare</a> "?> gli orari delle lezioni relative ai corsi.</p>

    <?php 
    include("scripts/connection.php");

    //query
    $sql = "SELECT DISTINCT lezioni.idCorso, idAula, Nomecorso, OraInizio, OraFine FROM lezioni JOIN corsi ON lezioni.IdCorso = corsi.IdCorso ORDER BY OraInizio"; 
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


        //script presente per non stampare lezioni i cui orari sono già passati
        
        echo "<h4>Corso Base</h4>\n";
        
        $oraAttuale = strtotime(date("d/m/y G:i:s"));
        
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

        echo "\t<h4>Corso Intermedio</h4>\n";
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

        echo "\t</ul>\n\t<h4>Corso Avanzato</h4>\n" . "\t<ul>\n";
        foreach($corsoAvanzato as $i) {
            $inizio = strtotime($i["OraInizio"]);
            $fine = strtotime($i["OraFine"]);

            // if ($oraAttuale < $inizio) {
                echo "\t\t<li>" . date("d/m/y", $inizio) . " ";
                echo "Aula " . $i["idAula"] . ", dalle " . date("G:i", $inizio) . 
                    ' alle ' . date("G:i", $fine) . ";</li>\n";
            // }
        }

        echo "\t</ul>\n\t<h4>Corso Madrelingua</h4>\n" . "\t<ul>\n";
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
        echo "<p>Non ci sono esami prenotati.</p>";

    if (isset($_SESSION["user"])) {
        $tabindexCounter++;
        echo "<a id='prenotazione' href='prenotazioni.php' tabindex='$tabindexCounter'>Prenota una lezione</a>";
    }

    ?>

    </div>
    
<?php
    include("presets/footer.php"); 
?>

</body>
</html>
