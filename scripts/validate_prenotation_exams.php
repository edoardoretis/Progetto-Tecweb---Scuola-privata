<?php
session_start();

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

// function validate_input($var) {
//     $var = trim($var);
//     $var = stripslashes($var);
//     $var = htmlspecialchars($var);
//     return $var;
// }

//form non impostato correttamente
if (!isset($_POST["tipoEsame"]) || !isset($_POST["dataEsame"]) 
|| !isset($_POST["oraInizio"]) || !isset($_POST["oraFine"])
|| $_POST["tipoEsame"] == "" || $_POST["dataEsame"] == ""
|| $_POST["oraInizio"] == "" || $_POST["oraFine"])
{
    $_SESSION["prenErr"] = "Compila tutti i campi.";
    header("Location: ../prenotazioni_esami.php");
}
    

//prenotazione antecedente, non valida
if (date('m/d/y') > $_POST["dataEsame"])
    echo "ERRORE";

//dati relativi alle ore in formate datetime di MYSQL
$oraInizio = $_POST["dataEsame"] . ' ' . $_POST["oraInizio"];
$oraFine = $_POST["dataEsame"] . ' ' . $_POST["oraFine"];

//aula
$aula = $_POST["aula"];

//controllo per evitare sovrapposizioni
$sql = "SELECT OraInizio, OraFine, idAula FROM lezioni";
$res = $conn->query($sql);
$ok = true;
$_SESSION["prenErr"] = "";

//confronto con prenotazione lezioni
if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        // echo $row["idAula"] . " " . $row["OraInizio"] . ":00 " . $row["OraFine"] . ":00 " . strtotime($row["OraInizio"]) . " " . strtotime($row["OraFine"]);
        // echo "<br />" . $aula . " " . $oraInizio . " " . $oraFine . " " . strtotime($oraInizio) . " " . strtotime($oraFine);
        // echo "<br /><br />"; 
        if ($row["idAula"] == $aula) {
            $strTimeInizio = strtotime($oraInizio);
            $strTimeFine = strtotime($oraFine);
            if ($strTimeInizio >= $strTimeFine) {
                $ok = false;
                $_SESSION["prenErr"] = "Prenotazione non effettuata. Imposta una fascia oraria valida.";
                header("Location: ../prenotazioni_esami.php");
            }

            if (($strTimeInizio < strtotime($row["OraFine"]) && $strTimeInizio > strtotime($row["OraInizio"])) //oraInizio inclusa in una fascia oraria occupata
                || ($strTimeFine > strtotime($row["OraInizio"]) && $strTimeFine < strtotime($row["OraFine"]))) //oraFine inclusa in una fascia oraria occupata
            {
                $ok = false;
                $_SESSION["prenErr"] = "Prenotazione non effettuata. Orario non disponibile.";
                header("Location: ../prenotazioni_esami.php");
            }
        }
    } //while
}

$sql = "SELECT OraInizio, OraFine, idAula FROM esami";
$res = $conn->query($sql);

//confronto con prenotazione esami
if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        // echo $row["idAula"] . " " . $row["OraInizio"] . ":00 " . $row["OraFine"] . ":00 " . strtotime($row["OraInizio"]) . " " . strtotime($row["OraFine"]);
        // echo "<br />" . $aula . " " . $oraInizio . " " . $oraFine . " " . strtotime($oraInizio) . " " . strtotime($oraFine);
        // echo "<br /><br />"; 
        if ($row["idAula"] == $aula) {
            $strTimeInizio = strtotime($oraInizio);
            $strTimeFine = strtotime($oraFine);
            if ($strTimeInizio >= $strTimeFine) {
                $ok = false;
                $_SESSION["prenErr"] = "Prenotazione non effettuata. Imposta una fascia oraria valida.";
                header("Location: ../prenotazioni.php");
            }

            if (($strTimeInizio < strtotime($row["OraFine"]) && $strTimeInizio > strtotime($row["OraInizio"])) //oraInizio inclusa in una fascia oraria occupata
                || ($strTimeFine > strtotime($row["OraInizio"]) && $strTimeFine < strtotime($row["OraFine"]))) //oraFine inclusa in una fascia oraria occupata
            {
                $ok = false;
                $_SESSION["prenErr"] = "Prenotazione non effettuata. Orario non disponibile.";
                header("Location: ../prenotazioni.php");
            }
        }
    } //while
}

if ($ok) {
    //parsing corso
    $corso = $_POST["tipoEsame"];
    $sql = "SELECT idCorso FROM corsi WHERE Nomecorso=\"$corso\"";
    $res = $conn->query($sql) or die($conn->error);
    while ($row = $res->fetch_assoc()) {
        $corso = $row["idCorso"];
    }

    //parsing idDocente
    $sql = 'SELECT idDocente FROM docenti WHERE email="' . $_SESSION["email"] . '"';
    $res = $conn->query($sql) or die($conn->error);
    $idDocente = "";
    while ($row = $res->fetch_assoc()) {
        $idDocente = $row["idDocente"];
    }

    //inserimento nel db
    $sql = "INSERT INTO esami VALUES(\"$idDocente\", \"$corso\", \"$aula\", \"$oraInizio\", \"$oraFine\")";
    if ($conn->query($sql) !== TRUE) {
        die("Error: ". $sql . "<br />" . $conn->error);
    }
    else {
        $_SESSION["prenotazioneOk"] = "PRENOTAZIONE CREATA CON SUCCESSO!";
        header("Location: ../esami.php");
    }
}

$conn->close();

?>
