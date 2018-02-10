
<?php 
    session_start();

    $title = "Contatti";
    include("presets/header.php"); //include la prima parte della pagina

    $activeItem = 4;
    include("presets/menu.php");
?>
	
	<script>
	//inizializza la mappa
	function initMap() {
		var uluru = {lat: 45.411399, lng: 11.887482};
		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 12,
			center: uluru
		});
		var marker = new google.maps.Marker({
			position: uluru,
			map: map
		});
	}
	</script>	

    <div id="corpo">
	    <h3>I nostri contatti</h3>
		<ul>
			<li>Indrizzo: Via Trieste, 63 - 35121 Padova (<span xml:lang="en">Italy</span>)</li>
			<li>Telefono:  +39 049 827 1200</li>
			<li>Fax: +39 049 827 1499</li>
			<li>Email: englishworld@gmail.com</li>
		</ul>

		<h3>Come raggiungerci</h3>
		<div id="map"></div>
	<!--[if lte IE 11]> 
	<script type="text/javascript">
		var gMap = document.getElementById("map").style;
		gMap.display="none";
	</script>
	<![endif]-->

		<script type="text/javascript" defer="defer" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7by0clulzGa2eB_ro8RArbIeom20hsTU&callback=initMap">
	</script>


		<ul class="marginsLeft">
			<li><strong>Per chi arriva in auto:</strong> uscire dall'autostrada o tangenziale all'uscita di Padova Fiera e prendere direzione verso il centro. lungo la strada vedrete le insegne della nostra scuola e vicino un ampio parcheggio;</li>
			<li><strong>Dalla stazione degli autobus e dei treni:</strong> si esce dalla stazione, si gira a sinistra e poi immediatamente a destra al semaforo (via Trieste), si cammina lungo via Trieste per circa 300m.</li>
		</ul>	
    </div>

<?php
    include("presets/footer.php");
?>
</body>
</html>
