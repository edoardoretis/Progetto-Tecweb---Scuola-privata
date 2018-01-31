
<?php 
    include("presets/header.php"); //include la prima parte della pagina
?>

  <div id="path">Ti trovi in: <span xml:lang="en">Home</span>	
    <?php 
        include("scripts/benvenuto.php");
    ?>
	</div>
    
    <div id="nav">
        <a href="#corpo"><span id="skipNav">Salta la navigazione</span></a>        
        <ul>
            <li class="active" xml:lang="en">Home</li>
            <li><a href="corsi.php">Corsi</a></li>
            <li><a href="lezioni.php">Lezioni</a></li>
            <li><a href="esami.php">Esami</a></li>
            <li><a href="contatti.php">Contatti</a></li>
        </ul>
    </div>
    <div id="corpo">
      <h2>La nostra scuola</h2>
      <p>The English World, fondata nel 2004, è una struttura internazionale privata che offre un ambiente formativo a misura di studente. La Scuola prevede un approccio dinamico, differenziato, stimolante e gratificante. Gli studenti sono supportati per esprimere al massimo il loro potenziale con un'attenzione specifica al mantenimento e rinforzo positivo della loro autostima. Lo scopo della nostra scuola e' dare ai nostri studenti una padronanza della lingua inglese che li renda autosufficienti nel dialogo e nella comprensione della lingua.</p>
	  <img src="img/img1.jpg" class="valid" alt="Immagine di abbellimento"/>
      <h2>I nostri corsi</h2>
      <p>Ogni studente puo' scegliere il corso che fa per lui, partendo da corsi base, corsi intermedi e corsi elevati. Ogni corso e' tenuto da un docente madrelingua che punta ad insegnarvi i trucchi e la bellezza di questa lingua mondiale.</br>
Siamo sicuri che nella nostra scuola troverete il corso che fa al vostro caso e sarete soddisfatti del nostro lavoro!</p>
	<img src="img/img2.jpg" class="valid" alt="Immagine di abbellimento"/>
    </div>
    <div id="footer">
        <img src="img/css.bmp" class="valid" alt="CSS Valid!"/>
        <img src="img/xhtml.bmp" class="valid" alt="XHTML 1.0 Valid!"/>
        <span id="lastModify">Ultima modifica: </span><script type="text/javascript">lastModify()</script>
    </div>

</body>
</html>
