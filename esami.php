
<?php 
include("presets/header.php"); //include la prima parte della pagina
?>

    <div id="path">Ti trovi in: <span xml:lang="en">Home</span> &gt;&gt; Esami
    <?php 
        include("scripts/benvenuto.php");
    ?>
    </div>

    <div id="nav">
        <a href="#corpo" id="skipNav">Salta la navigazione</a> <!-- position: absolute; height: 0; overflow: hidden; -->
        <ul>
            <li><a href="home.php"><span xml:lang="en">Home</span></a></li>
            <li><a href="corsi.php">Corsi</a></li>
            <li><a href="lezioni.php">Lezioni</a></li>
            <li class="active" >Esami</li>
            <li><a href="contatti.php">Contatti</a></li>
        </ul>
    </div>
    <div id="corpo">
	    
		
			

    </div>
    <div id="footer">
        <img src="img/css.bmp" class="valid" alt="CSS Valid!"/>
        <img src="img/xhtml.bmp" class="valid" alt="XHTML 1.0 Valid!"/>
        <span id="lastModify">Ultima modifica: </span><script type="text/javascript">lastModify()</script>
    </div>
</body>
</html>
