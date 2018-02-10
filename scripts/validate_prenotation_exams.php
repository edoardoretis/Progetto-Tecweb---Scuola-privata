<?php
session_start();

include("functions.php");
include("connection.php");

$_SESSION["dataPren"] = $_POST["dataEsame"];
$_SESSION["oraInizioPren"] = $_POST["oraInizio"];
$_SESSION["oraFinePren"] = $_POST["oraFine"];

//validazione variabili POST
if (!validateDate($_POST["dataEsame"]) || !validateTime($_POST["oraInizio"])
    || !validateTime($_POST["oraFine"]))
{
    $_SESSION["prenErr"] = "Prenotazione non effettuata. Imposta un formato corretto dei campi.";    
    header("Location: ../prenotazioni.php");
}

//dati relativi alle ore in formate datetime di MYSQL
$oraInizio = validateInput($_POST["dataEsame"]) . ' ' . validateInput($_POST["oraInizio"]);
$oraFine = validateInput($_POST["dataEsame"]) . ' ' . validateInput($_POST["oraFine"]);

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
    
    //deallocazioni variabili di sessione
    unset($_SESSION["oraFinePren"], $_SESSION["oraInizioPren"], $_SESSION["dataPren"]);
    
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
