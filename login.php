<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
        <form id="loginForm" method="post">
            <label for="email">email</label>
            <input type="text" name="email" />
            <label for="psw">password</label>
            <input type="password" name="psw" />
            <input type="submit" value="Login" />
        </form>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "Tecweb";
    
    $conn = new mysqli($servername, $username, $password, $db);

    //check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "connection successfully";
    
    

    /*
    $sql = "SELECT Nome FROM docenti";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "nome " . $row["Nome"] . "<br />";
        }
    }
    else {
        echo "No result";
    }
   */
    
    $conn->close();
    ?>
        
        
    </div>
    <div id="footer">
        <img src="img/css.bmp" class="valid" alt="CSS Valid!"/>
        <img src="img/xhtml.bmp" class="valid" alt="XHTML 1.0 Valid!"/>
        <span id="lastModify">Ultima modifica: </span><script type="text/javascript">lastModify()</script>
    </div>
</body>
</html>