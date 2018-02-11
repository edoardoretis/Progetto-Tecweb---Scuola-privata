<?php 
session_start();

include("functions.php");
include("connection.php");

//errors handling
$_SESSION["err"] = array();

if(isset($_POST["email"]) && $_POST["email"] == "") {
    // array_push($_SESSION["err"], "Inserisci l'email.");
    $_SESSION["err"][0] = "Inserisci l'email.";
}

else if (isset($_POST["email"]) && !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $_SESSION["err"][0] = "Inserisci un'email valida.";
}

else {
    $_SESSION["err"][0] = "";
}

if (isset($_POST["psw"]) && $_POST["psw"] == "") {
    // array_push($_SESSION["err"], "Inserisci la password.");
    $_SESSION["err"][1] = "Inserisci la password.";
}
else {
    $_SESSION["err"][1] = "";
    $_SESSION["email"] = $_POST["email"];
}


if (isset($_POST["email"], $_POST["psw"])) {
    $email = validateInput($_POST["email"]);
    $userpsw = validateInput($_POST["psw"]);
    $_POST["email"] = $email;
    $_POST["psw"] = $userpsw;

    // Check connection
    if ($conn->connect_error)
        die("Connection failed: " . $conn->connect_error);
    
    $sql = "SELECT * FROM docenti";
    $result = $conn->query($sql);
    $_SESSION["matchFound"] = false;

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // echo $row["Email"] . " " . $row["Psw"] . "<br />";
            if ($row["Email"] == $email && $row["Psw"] == $userpsw) {
                // echo "match found! <br />";
                $_SESSION["matchFound"] = true;
                $_SESSION["user"] = $row["Nome"];
                break;
            }
        }
        // if (!$_SESSION["matchFound"])
        //     echo "user and psw don't match any row.<br />";
        
        $conn->close();

        if ($_SESSION["matchFound"]) //redirect
            header("Location: ../home.php");
        else 
            header("Location: ../login.php");
    }
}
$conn->close();
?>
