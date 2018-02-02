
<?php 
    session_start();
    include("presets/header.php"); //include la prima parte della pagina
?>

    <div id="path">Ti trovi in: <span xml:lang="en">Home</span> &gt;&gt; Lezioni
    <?php 
        include("scripts/benvenuto.php");
    ?>
    </div>
    
    <div id="nav">
        <a href="#corpo" id="skipNav">Salta la navigazione</a> <!-- position: absolute; height: 0; overflow: hidden; -->
        <ul>
            <li><a href="home.php"><span xml:lang="en">Home</span></a></li>
            <li><a href="corsi.php">Corsi</a></li>
            <li class= "active">Lezioni</li>
            <li><a href="esami.php">Esami</a></li>
            <li><a href="contatti.php">Contatti</a></li>
        </ul>
    </div>
    <div id="corpo">
        <h2>Orari delle lezioni</h2>
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
    
    $sql = "SELECT DISTINCT lezioni.idCorso, idAula, Nomecorso, OraInizio, OraFine FROM lezioni JOIN corsi ON lezioni.IdCorso = corsi.IdCorso ORDER BY OraInizio";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $corsoBase = array();
        $corsoIntermedio = array();
        $corsoAvanzato = array();
        $corsoMadreLingua = array();
        while ($row = $result->fetch_assoc()) {
            // echo $row["idCorso"] . " " . $row["idAula"] . "<br />";
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
        
        echo "<ul class='listTitle'><li>Corso Base:</h3>" . "<ul>";
        foreach($corsoBase as $i) {
            $inizio = strtotime($i["OraInizio"]);
            $fine = strtotime($i["OraFine"]);
            echo "<li>" . date("d/m/y", $inizio) . " ";
            echo "Aula " . $i["idAula"] . ", dalle " . date("G:i", $inizio) . 
                ' alle ' . date("G:i", $fine) . ";</li>";
        }

        echo "</li></ul><li>Corso Intermedio:" . "<ul>";
        foreach($corsoIntermedio as $i) {
            $inizio = strtotime($i["OraInizio"]);
            $fine = strtotime($i["OraFine"]);
            echo "<li>" . date("d/m/y", $inizio) . " ";
            echo "Aula " . $i["idAula"] . ", dalle " . date("G:i", $inizio) . 
                ' alle ' . date("G:i", $fine) . ";</li>";
        }

        echo "</li></ul><li>Corso Avanzato:" . "<ul>";
        foreach($corsoAvanzato as $i) {
            $inizio = strtotime($i["OraInizio"]);
            $fine = strtotime($i["OraFine"]);
            echo "<li>" . date("d/m/y", $inizio) . " ";
            echo "Aula " . $i["idAula"] . ", dalle " . date("G:i", $inizio) . 
                ' alle ' . date("G:i", $fine) . ";</li>";
        }

        echo "</li></ul><li>Corso Madre Lingua:" . "<ul>";
        foreach($corsoMadreLingua as $i) {
            $inizio = strtotime($i["OraInizio"]);
            $fine = strtotime($i["OraFine"]);
            echo "<li>" . date("d/m/y", $inizio) . " ";
            echo "Aula " . $i["idAula"] . ", dalle " . date("G:i", $inizio) . 
                ' alle ' . date("G:i", $fine) . ";</li>";
        }

        echo "</ul></li></ul>";
    }

    else {
        echo "<p>Non ci sono lezioni prenotate.</p>";
    }

    if (isset($_SESSION["user"])) {
        echo "<a id='prenotazione' href='prenotazioni.php'>Prenota una lezione</a>";
    }

    ?>

    </div>
    <div id="footer">
        <img src="img/css.bmp" class="valid" alt="CSS Valid!"/>
        <img src="img/xhtml.bmp" class="valid" alt="XHTML 1.0 Valid!"/>
        <span id="lastModify">Ultima modifica: </span><script type="text/javascript">lastModify()</script>
    </div>
</body>
</html>
