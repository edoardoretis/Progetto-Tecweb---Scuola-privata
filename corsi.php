
<?php 
    session_start();
    
    $title = "Corsi";
    include("presets/header.php"); //include la prima parte della pagina
    
    $activeItem = 1;
    include("presets/menu.php");
?>
    <div id="corpo">
		<h2>I nostri corsi</h2>
		<p>I corsi sono incentrati nell'insegnamento della lingua inglese. Il corsi vengono tenuto da docenti preparati e vengono erogati principalmente in lingua inglese. </p>
		
		<img src="img/english_course.jpg" alt="immagine di presentazione" class="bigImg" />
		<dl>
		<dt>Corso Base</dt>
			<dd><strong>Contenuti:</strong> Comprende e usa espressioni di uso quotidiano e frasi basilari tese a soddisfare bisogni di tipo concreto. 
			Sa presentare se stesso/a e gli altri ed è in grado di fare domande e rispondere su particolari personali come dove abita, 
			le persone che conosce e le cose che possiede. Interagisce in modo semplice, purché l’altra persona parli lentamente e chiaramente e 
			sia disposta a collaborare.<br />
			
			I docenti dei corsi base sono:
				<ul>
					<!-- DISCLAIMER: mail messe in chiaro poichè il sito non sarà caricato nel web -->
					<li> Boscolo Chiara; <em>Per informazioni:</em> <a href="mailto:kevin.gabbo@gmail.com">chiara.boscolo@gmail.com</a></li>
					<li> Ferro Andrea; <em>Per informazioni:</em> <a href="mailto:ferro@gmail.com">ferro@gmail.com</a></li>
				</ul>
			</dd>
		<dt>Corso Intermedio </dt>
			<dd> <strong>Contenuti:</strong> Comprende i punti chiave di argomenti familiari che riguardano la scuola, il tempo libero ecc. 
			Sa muoversi con disinvoltura in situazioni che possono verificarsi mentre viaggia nel paese di cui parla la lingua. 
			È in grado di produrre un testo semplice relativo ad argomenti che siano familiari o di interesse personale. 
			È in grado di esprimere esperienze ed avvenimenti, sogni, speranze e ambizioni e di spiegare brevemente le ragioni delle sue opinioni 
			e dei suoi progetti.<br />
			
			I docenti dei corsi base sono:
				<ul>
					<!-- DISCLAIMER: mail messe in chiaro poichè il sito non sarà caricato nel web -->
					<li> Varagnolo Sofia; <em>Per informazioni:</em> <a href="mailto:Sofi@hotmail.com">Sofi@hotmail.com</a></li>
					<li> Rossi Antonio; <em>Per informazioni:</em> <a href="mailto:a.rossi@libero.it">a.rossi@libero.it</a></li>
				</ul>
			</dd>
		</dl>
			<img src="img/english_course2.jpg" alt="Immagine di abbellimento" class="bigImg" />
		<dl>
		<dt>Corso Avanzato </dt>
			<dd><strong>Contenuti:</strong> Comprende un’ampia gamma di testi complessi e lunghi e ne sa riconoscere il significato implicito. 
			Si esprime con scioltezza e naturalezza. Usa la lingua in modo flessibile ed efficace per scopi sociali, professionali ed accademici. 
			Riesce a produrre testi chiari, ben costruiti, dettagliati su argomenti complessi, mostrando un sicuro controllo della struttura testuale, 
			dei connettori e degli elementi di coesione.<br />
			
			I docenti dei corsi base sono:
				<ul>
					<!-- DISCLAIMER: mail messe in chiaro poichè il sito non sarà caricato nel web -->
					<li> Brini Kate; <em>Per informazioni:</em> <a href="mailto:kate@hotmail.com">kate@hotmail.com</a></li>
					<li> Penzo Jordan; <em>Per informazioni:</em> <a href="mailto:jordan_d@gmail.com">jordan_d@gmail.com</a></li>
				</ul>
			</dd>
		<dt>Corso Madrelingua </dt>
			<dd><strong>Contenuti:</strong>  Comprende con facilità praticamente tutto ciò che sente e legge. Sa riassumere informazioni provenienti da diverse fonti sia parlate che 
			scritte, ristrutturando gli argomenti in una presentazione coerente. Sa esprimersi spontaneamente, in modo molto scorrevole e preciso, 
			individuando le più sottili sfumature di significato in situazioni complesse.<br />
			I docenti dei corsi base sono:
				<ul>
					<!-- DISCLAIMER: mail messe in chiaro poichè il sito non sarà caricato nel web -->
					<li> Gabbo Kevin; <em>Per informazioni:</em> <a href="mailto:kevin.gabbo@gmail.com">kevin.gabbo@gmail.com</a></li>
					<li> Pol Braian; <em>Per informazioni:</em> <a href="mailto:braian@libero.it">braian@libero.it</a></li>
				</ul>
			</dd>
		</dl>


    </div>
<?php
    include("presets/footer.php"); 
?>
</body>
</html>
