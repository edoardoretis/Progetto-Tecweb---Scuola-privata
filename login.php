<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php 
    // if (isset($_SESSION["found"]) && $_SESSION["found"]) 
    //     header('Location: home.html');
?>
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="it" lang="it">
<head>
    <title>Scuola Privata</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="title" content="Scuola Privata - Home page" />
    <meta name="description" content="Scuola Privata per bla bla bla" />
    <meta name="keywords" content="Scuola privata, istruzione" />
    <meta name="author" content="Elisa, Edoardo, Timoty" />
    <meta name="language" content="italian it" />
    <link href="style/style.css" rel="stylesheet" type="text/css" media="screen"/>
    <link type="text/css" rel="stylesheet" href="small.css" media="hendheld, screen and(max-width:480px), only screen and(max-device-width:480px)"/>
    <link href="style/print.css" rel="stylesheet" type="text/css" media="print"/>
    
    <script type="text/javascript" src="ultima_modifica.js"></script>
</head>
<body>

<?php
session_start();
function check_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$servername = "localhost";
$username = "root";
$password = "";
$db = "Tecweb";
$email = $password = "";
$valuesInserted = false; //bool per vedere se è stato fatto l'input

//cookies
// $passwordCookie = "";
// $emailCookie = "";

//errori
$emailErr = $pswErr = $matchErr = "";

$conn = new mysqli($servername, $username, $password, $db);

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "connection successfully";

//inizializzazione eventuali errori
if(empty($_POST["email"])) 
    $emailErr = "Campo email richiesto.";
    
else {
    $valuesInserted = true;
    $email = check_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        $emailErr = "Campo email non valido.";
}

if (empty($_POST["psw"])) 
    $pswErr = "Campo password richiesto.";
else {
    $valuesInserted = true;
    $password = check_input($_POST["psw"]);
}

$sql = "SELECT * FROM docenti";
$adminSQL = "SELECT idAdmin, Psw FROM admin";
$adminResult = $conn->query($adminSQL);
$result = $conn->query($sql);

$_SESSION["found"] = false; //trovato un match?

// if (false) {
//     //gestion log in admin;
// }

if ($result->num_rows > 0) {
    $exitFlag = false; //flag di uscita anticipata
    $i = 0;
    while ($row = $result->fetch_assoc() && !$exitFlag) {
        echo $i;    
        echo $row["Email"] . " " . $row["Psw"] . "<br />";
        if ($row["Email"] == $email) {
            if ($row["Psw"] == $password) {
                //ok, redirect
                echo "TROVATA!";
                $_SESSION["found"] = true;
            }
            $exitFlag = true;
        }
        $i++;
    }
    if (!$_SESSION["found"]) {
            //password o user errati errata
            $matchErr = "email o password non corretti.";
    }

    else { //found
        //salvataggio dei dati nei cookie
        setcookie("user", $email, time() + (86400 * 30), "/"); //30 days
        setcookie("psw", $password, time() + (86400 * 30), "/");
    }
}

else {
    echo "0 rows";
}

$conn->close();

?>

    <div id="header">
        <span id="logo"></span>
        <h1><span xml:lang="en"><a href="">English World</a></span></h1>
        <h2>Scuola privata di inglese per tutte le et&agrave;</h2>
        <h2>Direttore: Dr. Rossi Mario</h2>
    </div>

    <div id="path">Ti trovi in: <span xml:lang="en">Login page</span>
    </div>
    
    <span id="skipNav"><a href="#corpo">Salta la navigazione</a></span> <!-- position: absolute; height: 0; overflow: hidden; -->
    <div id="nav">
        <ul>
            <li><a href="home.html"><span xml:lang="en">Home</span></a></li>
            <li><a href="corsi.html">Corsi</a></li>
            <li><a href="lezioni.html">Lezioni</a></li>
            <li><a href="esami.html">Esami</a></li>
            <li><a href="contatti.html">Contatti</a></li>
        </ul>
    </div>
    <div id="corpo">
        <h2 class="centered">Pagina di autenticazione</h2>
        <p class="centered">Inserisci le credenziali per entrare: </p>
        
        <form id="loginForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);//echo "redirect_form.php";?>">
            <?php echo '<span class="error">* reqired field.</span>' ?>
            <label for="email">Email</label>
            <input type="text" name="email" value="<?php //echo $email ?>" />
            <span class="error">* <?php if ($valuesInserted) echo $emailErr; ?></span><br />

            <label for="psw">Password</label>
            <input type="password" name="psw" value="<?php //echo $password ?>" />
            <span class="error">* <?php if ($valuesInserted) echo $pswErr; ?></span><br />
            <?php
                if ($emailErr == "" && $pswErr == "")
                    echo '<span class="error">' . $matchErr . '</span>'; 
            ?>
            <input type="submit" value="Login" />
        </form>
        
        
    </div>
    <div id="footer">
        <img src="img/css.bmp" class="valid" alt="CSS Valid!"/>
        <img src="img/xhtml.bmp" class="valid" alt="XHTML 1.0 Valid!"/>
        <span id="lastModify">Ultima modifica: </span><script type="text/javascript">lastModify()</script>
    </div>
</body>
</html>