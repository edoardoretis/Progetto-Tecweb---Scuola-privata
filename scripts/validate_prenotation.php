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

function validate_input($var) {
    $var = trim($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);
    return $var;
}

//form non impostato correttamente
if (!isset($_POST["tipoLezione"]) || !isset($_POST["dataLezione"]) 
    || !isset($_POST["oraInizio"]) || !isset($_POST["oraFine"]))
    die("dati mancanti");

//prenotazione antecedente, non valida
if (date('m/d/y') > $_POST["dataLezione"])
    echo "ERRORE";

//dati relativi alle ore in formate datetime di MYSQL
$oraInizio = $_POST["dataLezione"] . ' ' . $_POST["oraInizio"];
$oraFine = $_POST["dataLezione"] . ' ' . $_POST["oraFine"];

//aula
$aula = $_POST["aula"];

//parsing corso
$corso = $_POST["tipoLezione"];
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
$sql = "INSERT INTO lezioni VALUES(\"$idDocente\", \"$corso\", \"$aula\", \"$oraInizio\", \"$oraFine\")";
if ($conn->query($sql) !== TRUE) {
    die("Error: ". $sql . "<br />" . $conn->error);
}
else {
    $_SESSION["prenotazioneOk"] = "PRENOTAZIONE CREATA CON SUCCESSO!";
    header("Location: ../lezioni.php");
}
$conn->close();

?>