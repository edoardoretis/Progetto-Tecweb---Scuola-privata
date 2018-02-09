<?php 
    session_start();

    $title = "Login";
    include("presets/header.php");
    include("presets/menu.php");
?>
    <div id="corpo">
        <h2 class="centered">Pagina di autenticazione</h2>
        <p class="centered">Inserisci le credenziali per entrare: </p>
        
        <form id="loginForm" method="post" action="scripts/validate_form.php">
        <fieldset>
            <?php echo '<span class="error">* required field.</span>' ?>
            <label for="email">Email</label>
            <input type="text" id="email" name="email" value="<?php echo isset($_SESSION["email"]) ? $_SESSION["email"] : ""; ?>" tabindex="5" />
            <span class="error">* <?php if (isset($_SESSION["err"])) echo $_SESSION["err"][0] ?></span><br />

            <label for="psw">Password</label>
            <input type="password" id="psw" name="psw" value="<?php //echo $password ?>" tabindex="6" />
            <span class="error">* <?php if (isset($_SESSION["err"])) echo $_SESSION["err"][1] ?></span><br />
            <?php
               if (isset($_SESSION["matchFound"]) && !$_SESSION["matchFound"] && $_SESSION["err"][0] == "" && $_SESSION["err"][1] == "")
                   echo '<span class="error">' . "Email o password non corretti." . '</span>'; 
            ?>
            <input type="submit" value="Login" tabindex="7"/>
        </fieldset>
        </form>
        
        
    </div>
<?php
    include("presets/footer.php"); 
?>
</body>
</html>