
<?php 
    session_start();
    include("presets/header.php"); //include la prima parte della pagina
?>

    <div id="path">Ti trovi in: <span xml:lang="en">Home</span> &gt;&gt; Contatti
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
            <li><a href="esami.php">Esami</a></li>
            <li class="active">Contatti</li>
        </ul>
    </div>
    <div id="corpo">
	    <h3> I nostri contatti</h3>
		<ul>
			<li>Indrizzo: Via Trieste, 63 - 35121 Padova (<span xml:lang="en">Italy</span>)</li>
			<li>Telefono:  +39 049 827 1200</li>
			<li>Fax: +39 049 827 1499</li>
			<li>Email: englishword@gmail.com</li>
		</ul>

        <h3> Come raggiungerci</h3>
		<ul>
			<li>Per chi arriva in auto: uscire dall'autostrada o tangenziale all'uscita di Padova Fiera e prendere direzione verso il centro. lungo la strada vedrete le insegne della nostra scuola e vicino un ampio parcheggio;</li>
			<li>Dalla stazione degli autobus e dei treni: si esce dalla stazione, si gira a sinistra e poi immediatamente a destra al semaforo (via Trieste), si cammina lungo via Trieste per circa 300m.</li>
		</ul>
		
			

    </div>
    <div id="footer">
        <img src="img/css.bmp" class="valid" alt="CSS Valid!"/>
        <img src="img/xhtml.bmp" class="valid" alt="XHTML 1.0 Valid!"/>
        <span id="lastModify">Ultima modifica: </span><script type="text/javascript">lastModify()</script>
    </div>
</body>
</html>
