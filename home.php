
<?php 
    session_start();
    
    $title = "Home";
    include("presets/header.php"); //include la prima parte della pagina
    
    $activeItem = 0;
    include("presets/menu.php");
?>
    <div id="corpo">
      <h2>La Scuola</h2>
      <p><em xml:lang="en">The English World</em>, fondata nel 2004, è una struttura internazionale privata che offre un ambiente formativo a misura di studente. 
        La Scuola prevede un approccio dinamico, differenziato, stimolante e gratificante. Gli studenti sono supportati per esprimere al massimo il 
        loro potenziale con un'attenzione specifica al mantenimento e rinforzo positivo della loro autostima. Lo scopo della nostra scuola è dare ai 
        nostri studenti una padronanza della lingua inglese che li renda autosufficienti nel dialogo e nella comprensione della lingua.</p>
      <img src="img/img1.jpg" class="valid" alt="Immagine di abbellimento" />
      
      <h2>I nostri corsi</h2>
      <p>Ogni studente può scegliere il <a href="corsi.php">corso</a> che fa per lui, partendo da <em>corsi base</em>, fino ad arrivare a <em>corsi intermedi</em>, <em>corsi avanzati</em> e <em>madrelingua</em>. 
        Ogni corso è tenuto da un docente madrelingua che punta ad insegnare allo studente la cultura e la bellezza della lingua più usata al mondo.<br />
        Siamo sicuri che nella nostra scuola troverete il corso che fa al caso vostro e ne uscirete più che soddisfatti!</p>
	<img src="img/img2.jpg" class="valid" alt="Immagine di abbellimento" />
    </div>
    
<?php
    include("presets/footer.php"); 
?>

</body>
</html>
