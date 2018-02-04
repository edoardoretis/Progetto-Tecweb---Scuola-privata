<?php 
    session_start();
    $title = "Area prenotazioni";
    if (!isset($_SESSION["user"]))
        header("Location: lezioni.php");
    
    include("presets/header.php");
    include("presets/menu.php");
?>

    <div id="corpo">
        <h2>Area prenotazione lezioni</h2>
        <form method="post" action="scripts/validate_prenotation.php" id="prenotationForm">
        <fieldset>
            <select name="tipoLezione" size="1">
                <option value="B0">corso Base</option>
                <option value="B1">corso Intermedio</option>
                <option value="B2">corso Avanzato</option>
                <option value="M1">corso Madrelingua</option>
            </select>

            <label for="aula">Aula</label>
            <select name="aula" size="1">
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
            <input type="date" name="dataLezione" />

            <label for="oraInizio">Inizio lezione</label>
            <input type="time" name="oraInizio" />

            <label for="oraFine">Fine lezione</label>
            <input type="time" name="oraFine" />

            <input type="submit" value="Prenota" />
        </fieldset>
        </form>
    </div>

<?php
    include("presets/footer.php"); 
?>
</body>
</html>