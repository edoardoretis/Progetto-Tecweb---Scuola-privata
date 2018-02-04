
<?php 
    session_start();

    $title = "Contatti";
    include("presets/header.php"); //include la prima parte della pagina

    $activeItem = 4;
    include("presets/menu.php");
?>

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

<?php
    include("presets/footer.php");
?>
</body>
</html>
