
<?php 
    session_start();
    include("presets/header.php"); //include la prima parte della pagina
?>

    <div id="path">Ti trovi in: <span xml:lang="en">Home</span> &gt;&gt; Corsi
    <?php 
        include("scripts/benvenuto.php");
    ?>
    </div>
    
    <div id="nav">
        <a href="#corpo" id="skipNav">Salta la navigazione</a> <!-- position: absolute; height: 0; overflow: hidden; -->
        <ul>
            <li><a href="home.php"><span xml:lang="en">Home</span></a></li>
            <li class="active" >Corsi</li>
            <li><a href="lezioni.php">Lezioni</a></li>
            <li><a href="esami.php">Esami</a></li>
            <li><a href="contatti.php">Contatti</a></li>
        </ul>
    </div>
    <div id="corpo">
      <h2>I nostri corsi</h2>
      <dl>
        <dt>Inglese</dt>
        <dd>Corso incentrato nell'insegnamento della lingua Inglese. Il corso viene tenuto da docenti preparati e viene erogato principalmente in lingua inglese. <br />
        <strong>Contenuti:</strong> apprendimento della lingua dai suoi fondamenti. Al <em>primo livello</em> (età 9-12), vengono insegnati i sostantivi e i termini più comuni e 
        diffusi, struttura delle proposizioni e grammatica di base. Al <em>secondo livello</em>, vengono [...]
        </dd>
      </dl>
            

    </div>
    <div id="footer">
        <img src="img/css.bmp" class="valid" alt="CSS Valid!"/>
        <img src="img/xhtml.bmp" class="valid" alt="XHTML 1.0 Valid!"/>
        <span id="lastModify">Ultima modifica: </span><script type="text/javascript">lastModify()</script>
    </div>
</body>
</html>
