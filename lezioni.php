
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
    <p>Qui puoi vedere <?php if(isset($_SESSION["user"])) echo " e <a class='stdLink' href='prenotazioni.php'>prenotare</a> "?> gli orari delle lezioni.</p>

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
        
        echo "<ul class='listTitle'><li>Corso Base</h3>" . "<ul>";
        
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

        echo "</li></ul><li>Corso Intermedio" . "<ul>";
        foreach($corsoIntermedio as $i) {
            $inizio = strtotime($i["OraInizio"]);
            $fine = strtotime($i["OraFine"]);

            // if ($oraAttuale < $inizio) {
                echo "<li>" . date("d/m/y", $inizio) . " ";
                echo "Aula " . $i["idAula"] . ", dalle " . date("G:i", $inizio) . 
                    ' alle ' . date("G:i", $fine) . ";</li>";
            // }
        }

        echo "</li></ul><li>Corso Avanzato" . "<ul>";
        foreach($corsoAvanzato as $i) {
            $inizio = strtotime($i["OraInizio"]);
            $fine = strtotime($i["OraFine"]);

            // if ($oraAttuale < $inizio) {
                echo "<li>" . date("d/m/y", $inizio) . " ";
                echo "Aula " . $i["idAula"] . ", dalle " . date("G:i", $inizio) . 
                    ' alle ' . date("G:i", $fine) . ";</li>";
            // }
        }

        echo "</li></ul><li>Corso Madrelingua" . "<ul>";
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
        echo "<p>Non ci sono esami prenotati.</p>";

    if (isset($_SESSION["user"])) {
        echo "<a id='prenotazione' href='prenotazioni.php'>Prenota una lezione</a>";
    }

    ?>

    </div>
    
<?php
    include("presets/footer.php"); 
?>

</body>
</html>
