<?php 
    session_start();
    $title = "Area prenotazioni";

    //per prevenire l'accesso di utenti non autorizzati tramite l'URL
    if (!isset($_SESSION["user"]))
        header("Location: lezioni.php");
    
    include("presets/header.php");
    include("presets/menu.php");
?>

    <div id="corpo">
        <h2>Area prenotazione lezioni</h2>
<?php
        if (isset($_SESSION["prenErr"]))
            echo "<p class='formProcessed'>" . $_SESSION["prenErr"] . "</p>";
        unset($_SESSION["prenErr"]);  
?>
        <form method="post" action="scripts/validate_prenotation.php" id="prenotationForm">
        <fieldset>
            <label for="tipoLezione">Corso</label>
            <select name="tipoLezione" id="tipoLezione" size="1" tabindex="<?php
            $tabindexCounter++; echo $tabindexCounter; ?>">
                <option value="B0">corso Base</option>
                <option value="B1">corso Intermedio</option>
                <option value="B2">corso Avanzato</option>
                <option value="M1">corso Madrelingua</option>
            </select>

            <label for="aula">Aula</label>
            <select name="aula" id="aula" size="1" tabindex="<?php
            $tabindexCounter++; echo $tabindexCounter; ?>">
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="A3">A3</option>
                <option value="A4">A4</option>
                <option value="A5">A5</option>
                <option value="A6">A6</option>
                <option value="A7">A7</option>
                <option value="A8">A8</option>
            </select>

            <label for="dataLezione">Data</label>
            <input type="text" name="dataLezione" id="dataLezione" tabindex="<?php
            $tabindexCounter++; echo $tabindexCounter; ?>"  value="<?php if(isset($_SESSION["dataPren"])) echo $_SESSION["dataPren"]; ?>" />
            (formato: YYYY-MM-GG)

            <label for="oraInizio">Inizio lezione</label>
            <input type="text" name="oraInizio" id="oraInizio" tabindex="<?php
            $tabindexCounter++; echo $tabindexCounter; ?>" value="<?php if(isset($_SESSION["oraInizioPren"])) echo $_SESSION["oraInizioPren"]; ?>" />
            (formato: HH:MM)

            <label for="oraFine">Fine lezione</label>
            <input type="text" name="oraFine" id="oraFine" tabindex="<?php
            $tabindexCounter++; echo $tabindexCounter; ?>" value="<?php if(isset($_SESSION["oraFinePren"])) echo $_SESSION["oraFinePren"]; ?>" />
            (formato: HH:MM)

            <input type="submit" value="Prenota" tabindex="<?php
            $tabindexCounter++; echo $tabindexCounter; ?>" />
        </fieldset>
        </form>
    </div>

<?php
    include("presets/footer.php"); 
?>
</body>
</html>