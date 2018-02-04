
<?php 
    session_start();
    
    $title = "Corsi";
    include("presets/header.php"); //include la prima parte della pagina
    
    $activeItem = 1;
    include("presets/menu.php");
?>
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
<?php
    include("presets/footer.php"); 
?>
</body>
</html>
