<?php 
    session_start();
    include("presets/header.php")
?>

    <div id="path">Ti trovi in: <span xml:lang="en">Login page</span>
    </div>

    <div id="nav">
        <a href="#corpo" id="skipNav">Salta la navigazione</a> <!-- position: absolute; height: 0; overflow: hidden; -->        
        <ul>
            <li><a href="home.php" tabindex="1"><span xml:lang="en">Home</span></a></li>
            <li><a href="corsi.php" tabindex="2">Corsi</a></li>
            <li><a href="lezioni.php" tabindex="3">Lezioni</a></li>
            <li><a href="esami.php" tabindex="4">Esami</a></li>
            <li><a href="contatti.php" tabindex="5">Contatti</a></li>
        </ul>
    </div>
    <div id="corpo">
        <h2 class="centered">Pagina di autenticazione</h2>
        <p class="centered">Inserisci le credenziali per entrare: </p>
        
        <form id="loginForm" method="POST" action="scripts/validate_form.php">
        <fieldset>
            <?php echo '<span class="error">* required field.</span>' ?>
            <label for="email">Email</label>
            <input type="text" id="email" name="email" value="<?php echo isset($_SESSION["email"]) ? $_SESSION["email"] : ""; ?>" tabindex="6" />
            <span class="error">* <?php if (isset($_SESSION["err"])) echo $_SESSION["err"][0] ?></span><br />

            <label for="psw">Password</label>
            <input type="password" id="psw" name="psw" value="<?php //echo $password ?>" tabindex="7" />
            <span class="error">* <?php if (isset($_SESSION["err"])) echo $_SESSION["err"][1] ?></span><br />
            <?php
               if (isset($_SESSION["matchFound"]) && !$_SESSION["matchFound"] && $_SESSION["err"][0] == "" && $_SESSION["err"][1] == "")
                   echo '<span class="error">' . "Email o password non corretti." . '</span>'; 
            ?>
            <input type="submit" value="Login" tabindex="8"/>
        </fieldset>
        </form>
        
        
    </div>
    <?php
    include("presets/footer.php"); 
    ?>
</body>
</html>