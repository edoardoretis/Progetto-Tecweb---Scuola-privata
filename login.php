<?php 
    include("presets/header.php")
?>

    <div id="path">Ti trovi in: <span xml:lang="en">Login page</span>
    </div>

    <div id="nav">
        <a href="#corpo" id="skipNav">Salta la navigazione</a> <!-- position: absolute; height: 0; overflow: hidden; -->        
        <ul>
            <li><a href="home.php"><span xml:lang="en">Home</span></a></li>
            <li><a href="corsi.php">Corsi</a></li>
            <li><a href="lezioni.php">Lezioni</a></li>
            <li><a href="esami.php">Esami</a></li>
            <li><a href="contatti.php">Contatti</a></li>
        </ul>
    </div>
    <div id="corpo">
        <h2 class="centered">Pagina di autenticazione</h2>
        <p class="centered">Inserisci le credenziali per entrare: </p>
        
        <form id="loginForm" method="POST" action="scripts/validate_form.php">
            <?php echo '<span class="error">* required field.</span>' ?>
            <label for="email">Email</label>
            <input type="text" id="email" name="email" value="<?php echo isset($_SESSION["email"]) ? $_SESSION["email"] : ""; ?>" />
            <span class="error">* <?php if (isset($_SESSION["err"])) echo $_SESSION["err"][0] ?></span><br />

            <label for="psw">Password</label>
            <input type="password" id="psw" name="psw" value="<?php //echo $password ?>" />
            <span class="error">* <?php if (isset($_SESSION["err"])) echo $_SESSION["err"][1] ?></span><br />
            <?php
               if (isset($_SESSION["matchFound"]) && !$_SESSION["matchFound"] && $_SESSION["err"][0] == "" && $_SESSION["err"][1] == "")
                   echo '<span class="error">' . "Email o password non corretti." . '</span>'; 
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